<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер управления доступом в ЛК
	 *
	 * @name        Controller_Account
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */

	class Controller_Account extends Controller_Layout_Default {

		/**
		 * Просмотр профиля или авторизация через соц.сеть
		 */
		public function action_index() {
			
			$data   = array();   
			$data[ 'current_page' ] = '';			
			$ulogin = Ulogin::factory();
			
			// Есть сообщение о смене пароля
			if (Session::instance() -> get('changeStatus') != '') { 
			 
				$data[ 'changeStatus' ] = Session::instance() -> get_once('changeStatus'); 
			}
					
			if ($ulogin -> mode()) {
				
				// пробуем
				try {
				
					$user = $ulogin -> login(); // залогиниться
					
					// если из соц.сети можно достать фото пользователя
					if (!empty($user[ 'photo' ])) {
					
						// кладем в папку
						$this -> _photoWrite($user[ 'photo' ]);
						
						// обновляем запись, что у пользователя есть фото
						$userORM = ORM::factory('user', Auth::instance() -> get_user() -> id);
						$userORM -> set('photo', 1) -> update();
					}

					// если пользователь хотел куда-то перейти
					if (Session::instance() -> get('redirectAfterLogin') != '') { 
					 
						$redirect = Session::instance() -> get_once('redirectAfterLogin'); 
						HTTP::redirect($redirect);  
					}
				}
				catch(ORM_Validation_Exception $e) {
					
					// если возникли ошибки - выводим в переменную login
					$this -> template -> login = $e -> errors('Ощибка входа'); 
				}
			}

			// если пользователь не авторизован
			if (!$data[ 'user' ] = Auth::instance() -> get_user()) {
			
				// редиректим на страницу со входом/регистрацией
				HTTP::redirect('/account/registration'); 
			} 
			
			$data[ 'ulogin' ] = $ulogin -> render(); // стартуем сессии
			$data[ 'photo' ]  = '/uploads/users/nophoto.jpg';

			if (Auth::instance() -> get_user() -> photo == 1) {
				
				// выводим фото
				$data[ 'photo' ] = sprintf("/uploads/users/%s.jpg",  Auth::instance() -> get_user() -> id); 
			} 

			// берем данные по всем присоединенным аккаунтам пользователя
			$data[ 'networks' ] = DB::select('identity') 
				-> from('ulogins') 
				-> where("user_id", "=", Auth::instance() -> get_user() -> id) 
				-> execute() 
				-> as_array(); 
			
			$this -> setParam('pagetitle', 'Личный кабинет');
			
			$this -> showPage('account/account', $data);	
		}

		/**
		 * Вход в ЛК
		 */
		public function action_login() {
			
			// Значки социальных сетей
			$ulogin = Ulogin::factory(); 
			
			$data = array();   
			$data[ 'item' ] = array();
			$data[ 'current_page' ] = '';			
			$data[ 'ulogin' ] = $ulogin -> render(); 
			
			// если переданы POST данные
			if ($this -> request -> method() == Request::POST)  {
				
				$post = $this -> _getLoginValidation();
			
				// Выполнить проверку
				if ($post -> check()) {
				
					$post = $post -> data();
					
					// проверяем - стоит ли флаг - запомнить меня
					$remember = (!empty($post[ 'rememberme' ]) ? (bool) $post[ 'rememberme' ] : FALSE);
					
					// Авторизация прошла успешно
					if ($user = Auth::instance() -> login($post[ 'email' ], $post[ 'password' ], $remember)) {

						// Для отправки пользователя на страницу в которую он попасть не смог
						if (Session::instance() -> get('redirectAfterLogin') != '') { 
						
							$redirect = Session::instance() -> get_once('redirectAfterLogin');
							HTTP::redirect($redirect);
						}
						
						HTTP::redirect('/account/');
					} 
					
					$data[ 'message' ] = 'Авторизация не прошла'; 
				}
				else {
					
					// Список ошибок
					View::set_global('login_errors', $post -> errors('validation'));
				} 
				
				$data[ 'item' ] = $this -> request -> post();
			}
				
			$this -> setParam('pagetitle', 'Авторизация');
			$this -> showPage('account/login', $data);	
		}

		/**
		 * Регистрация пользователей
		 */
		public function action_registration() {	
			
			// Значки социальных сетей
			$ulogin = Ulogin::factory(); 
			
			$data = array();   
			$data[ 'item' ] = array();
			$data[ 'current_page' ] = '';			
			$data[ 'ulogin' ] = $ulogin -> render(); 
			
			if ($this -> request -> method() == Request::POST) {			
			
				$post = $this -> _getRegistrationValidation();
			
				// Выполнить проверку
				if ($post -> check()) {
				
					$post = $post -> data();

					// если проверка пройдена - регистрируем
					$user = ORM::factory( 'User' ) 
						-> set('email',    $post[ 'email' ])
						-> set('username', $post[ 'username' ])
						-> set('password', $post[ 'password' ])
						-> save();

					// Даем новому пользователю роль для логина
					$user -> add('roles', ORM::factory('Role', array('name' => 'login')));

					$subject = sprintf('Регистрация на %s', URL::base(true, false));
					$message = 'Вы успешно зарегистрировались с паролем - ' . $post[ 'password' ];

					// отправляем пользователю сообщение с его паролем
					Helper_Mail::mailSend($post[ 'email' ], $subject, $message, Config::getSiteParam('site_email')); 

					// Сразу авторизуем пользователя, без ввода логина и пароля
					Auth::instance() -> force_login($user); 
					
					HTTP::redirect('/account/');
				}
				else {
					
					// Список ошибок
					View::set_global('errors', $post -> errors('validation'));
				} 
			
				$data[ 'item' ] = $this -> request -> post();
			}	

			$this -> setParam('pagetitle', 'Регистрация');
			
			$this -> showPage('account/login', $data);	
		}

		/**
		 * Смена пароля
		 */ 
		public function action_changepass() {

			// Проверяем новый пароль на корректность заполнения
			$post = Validation::factory($this -> request -> post())
				 -> rule('newpassword', 'not_empty')
				 -> rule('newpassword', 'min_length', array(':value', '5'));

			// Если новый пароль удовлетворяет требованиям
			if ($post -> check()) {
				
				// Данные пользователя
				$user_id = Auth::instance() -> get_user() -> id; 
				$oldPass = Auth::instance() -> get_user() -> password;

				// Полуить хеши паролей
				$oldPassHASH = Auth::instance() -> hash_password($post[ 'oldpassword' ]); 
				$newPassHASH = Auth::instance() -> hash_password($post[ 'newpassword' ]); 				
				
				//Проверяем совпадение
				if ($oldPassHASH === $oldPass) {
					
					// Меняем пароль
					DB::update('users') 
						-> set(array('password' => $newPassHASH)) 
						-> where('id', '=', $user_id) 
						-> execute();
						
					Session::instance() -> set('changeStatus', 'changeok');
					
					// Редиректим на страницу с поздравлением	
					HTTP::redirect('/account/');  
				} 
			}
			else {
				
				// Список ошибок
				View::set_global('errors', $post -> errors('validation'));
			} 
			
			Session::instance() -> set('changeStatus', 'changefalse');
			HTTP::redirect('/account/');  
		}

		/**
		 * Сброс пароля
		 */ 
		public function action_forgot() {
			
			$post = array();
			$data = array();   
			$data[ 'current_page' ] = '';		
			$email = '';
			
			if (HTTP_Request::POST == $this  ->  request  ->  method()) {
			
				// Проверяем новый пароль на корректность заполнения
				$post = Validation::factory($this -> request -> post())
					-> rule('email', 'not_empty')
					-> rule('email', 'email');
				
				// Проверить 				
				if ($post -> check()) { 
				
					$email = $post['email' ];
					
					// В любом случае выводим сообщение о том, что пароль отправлен. Пусть думают что все почтовые аккаунты имеют своих владельцев
					$data[ 'message' ] = 'Ссылка для восстановления пароля была отправлена на указанную почту'; 

					// Теперь действительно ищем - есть ли пользователь со введенным адресом
					$user = ORM::factory('User', array('email' => $email)); 
					
					// Если есть
					if ($user -> loaded()) { 
						
						// Записываем в сессию хэш, который будем проверять
						$hash = md5(time() . $email); 
						
						Session::instance() -> set('forgotpass', $hash);
						Session::instance() -> set('forgotmail', $email); // и почту записываем
						
						$subject = sprintf('Восстановление пароля на %s', URL::base(true, false));
						$message = sprintf('Для сброса пароля пройдите по ссылке - <a href="%saccount/forgot/%s">СБРОСИТЬ</a>', URL::base(true, false), $hash); 
						
						// Отправляем ссылку с хэшем для сброса пароля
						Helper_Mail::mailSend($email, $subject, $message, Config::getSiteParam('site_email')); 
					}	
				} 
				else {
					
					// Список ошибок
					View::set_global('errors', $post -> errors('validation'));
				} 
			}
			
			$URLhash = $this -> request -> param('hash');
			
			// если человек прошел по ссылке в письме
			if ($URLhash) {
			
				// проверяем его сессию - действительно ли именно он запросил сброс?
				if (Session::instance() -> get_once('forgotpass') === $URLhash) {
					
					$forgotmail = Session::instance() -> get_once('forgotmail');
					
					$newpass = substr(md5(time() . $forgotmail), 0, 8); // генерируем новый пароль
					
					// ставим новый пароль пользователю
					DB::update('users') 
						-> set(array('password' => Auth::instance() -> hash_password($newpass))) 
						-> where('email', '=', $forgotmail) 
						-> execute(); 
						
					$subject = 'Ваш новый пароль на ' . URL::base(true, false);
					$message = sprintf('Ваш новый пароль - "%s" без кавычек. <a href="%saccount/">Войти</a>', $newpass, URL::base(true, false)); 

					// отправляем новый пароль пользователю
					Helper_Mail::mailSend($forgotmail, $subject, $message, Config::getSiteParam('site_email')); 
					
					// сообщаем об успехе процедуры
					$data[ 'message' ] = 'Новый пароль был отправлен Вам на почту!'; 
				}
			}
			
			$data[ 'email' ] = $email;
			
			$this -> setParam('pagetitle', 'Забыли пароль?');
			
			$this -> showPage('account/forgot', $data);	
		}
		
		/**
		 * Выход из ЛК
		 */
		public function action_logout() {
			
			Auth::instance() -> logout();
			HTTP::redirect('/account/');
		}	
		
		/**
		 * Положить аватарку на диск
		 *
		 * @param string $userPhoto путь до фотки
		 */
		private function _photoWrite($userPhoto) {
		
			$path = sprintf('%suploads/users/%s.jpg', DOCROOT, Auth::instance() -> get_user() -> id);
		
			// кладем в папку /uploads/users (не забудьте про права на запись!)
			$fp = fopen($path, 'w');  
			fwrite($fp, file_get_contents($userPhoto)); // скачиваем его
			fclose($fp);
			
			return true;
		}
		
		/**
		 * Получить объект валидации POST запроса, формы входа
		 */
		protected function _getLoginValidation() {
		
			$post = $this -> request -> post();
			$post = array_map('trim', $post);
			$post = array_map('strip_tags', $post);
		
			$post = Validation::factory($post)
				-> rule('email',    'not_empty')
				-> rule('email',    'email')
				-> rule('password', 'not_empty')
				-> labels(array(
					'email'    => 'Email',
					'password' => 'Пароль',
				));

			return $post;
		}
		
		/**
		 * Получить объект валидации POST запроса, формы входа
		 */
		protected function _getRegistrationValidation() {
		
			$post = $this -> request -> post();
			$post = array_map('trim', $post);
			$post = array_map('strip_tags', $post);

			$post = Validation::factory($post)
				-> rule('username', 'not_empty')
				-> rule('username', 'min_length', array(':value', '4'))
				-> rule('username', 'Model_Validate::unique_username', array(':value', false))
				-> rule('password', 'not_empty')
				-> rule('password', 'min_length', array(':value', '5'))
				-> rule('email',    'not_empty')
				-> rule('email',    'email')
				-> rule('email',    'Model_Validate::unique_useremail', array(':value', false))
				-> labels(array(
					'username' => 'Отображаемое имя',
					'email'    => 'Email',
					'password' => 'Пароль',
				));

			return $post;
		}
	}
	
    /* End of file Account.php */
    /* Location: ./application/classes/Controller/Account.php */