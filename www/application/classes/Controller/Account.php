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
			
			// если ранее юлогин не вызывался
			if (!$ulogin -> mode()) {
				
				$this -> template -> login = $ulogin -> render(); // рисуем значки соц.сетей
			}
			else {
				
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

					// Проверка пройдена - регистрируем
					$user_id = DB::insert('users') 
						-> set(array(
							'username' => $post[ 'username' ], 
							'email'    => $post[ 'email' ], 
							'password' => $post[ 'password' ]
						)) 
						-> execute();

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

			// проверяем новый пароль на корректность заполнения
			$object = Validation::factory($this -> request -> post());  
			$object
				 -> rule('newpassword', 'not_empty')
				 -> rule('newpassword', 'min_length', array(':value', '5'));

			// если новый пароль удовлетворяет требованиям
			if ($object -> check()) {
				
				// берем хэш текущего пароль пользователя
				$realoldpass = Auth::instance() -> get_user() -> password;

				// сравниваем с тем, что ввел пользователь
				$oldpass     = Auth::instance() -> hash_password($this -> request -> post('oldpassword')); 
				
				// если они совпадают
				if ($realoldpass === $oldpass) {
					
					DB::update('users') 
						-> set(array(
								'password' => Auth::instance() -> hash_password($this -> request -> post('newpassword'))
							)
						) 
						-> where('id', '=', Auth::instance() -> get_user() -> id) 
						-> execute();

					// меняем пароль и редиректим на страницу с поздравлением	
					HTTP::redirect('/account/?changeok');  
				} 
				else {
					
					// если нет - сообщаем об ошибке
					HTTP::redirect('/account/?changefalse');  
				}
			}
			else {
				
				// если нет - сообщаем об ошибке
				HTTP::redirect('/account/?changefalse'); 
			}
		}

		/**
		 * Сброс пароля
		 */ 
		public function action_forgot() {
			
			$post = array();
			$data = array();   
			$data[ 'current_page' ] = '';		
			
			// если были какие-то POST данные
			if (HTTP_Request::POST == $this  ->  request  ->  method()) {
				
				// в любом случае выводим сообщение о том, что пароль отправлен. Пусть думают что все почтовые аккаунты имеют своих владельцев
				$data[ 'message' ] = Kohana::message('account', 'passwordSended'); 

				// а теперь действительно ищем - есть ли пользователь со введенным адресом
				$user = ORM::factory('User', array('email' => $this -> request -> post('email'))); 
				
				// если есть
				if ($user -> loaded()) { 
					
					$session = Session::instance();

					// записываем в сессию хэш, который будем проверять
					$hash = md5(time() . $this -> request -> post('email')); 
					$session -> set('forgotpass', $hash);
					$session -> set('forgotmail', $this -> request -> post('email')); // и почту записываем
					
					$to      = $this -> request -> post('email');
					$subject = Kohana::message('account', 'email.themes.passworReset');
					$from    = Kohana::message('account', 'email.from');
					$message = 'Для сброса пароля пройдите по ссылке - <a href="' . URL::base(true, false) . 'account/forgot?change=' . $hash . '">СБРОСИТЬ</a>'; 
					
					// отправляем ссылку с хэшем для сброса пароля
					Email::send($to, $from, $subject, $message, $html = true);	
				}	
			}
			
			$restore = Arr::get($_GET, 'change');
			
			// если человек прошел по ссылке в письме
			if ($restore) {
			
				$session = Session::instance();

				// проверяем его сессию - действительно ли именно он запросил сброс?
				if ($session -> get('forgotpass') === $restore) {
					
					$newpass = substr(md5(time() . $session -> get('forgotmail')), 0, 8); // генерируем новый пароль
					$to      = $session -> get('forgotmail');
					$subject = Kohana::message('account', 'email.themes.newPassword');
					$from    = Kohana::message('account', 'email.from');
					$message = 'Ваш новый пароль - "' . $newpass . '" без кавычек. <a href="http://ratefilm.ru/account/">Войти</a>'; 

					// ставим новый пароль пользователю
					DB::update('users') 
						-> set(array('password' => Auth::instance() -> hash_password($newpass))) 
						-> where('email', '=', $session -> get('forgotmail')) 
						-> execute(); 
						
					$session -> delete('forgotpass');
					$session -> delete('forgotmail'); // очищаем сессию
					
					// отправляем новый пароль пользователю
					Email::send($to, $from, $subject, $message, $html = true);	

					// сообщаем об успехе процедуры
					$data[ 'message' ] = Kohana::message('account', 'newPassSended'); 
				}
			}
			
			$data[ 'email' ] = array_key_exists('email', $this -> request -> post()) 
				? htmlspecialchars($this -> request -> post('email')) 
				: '';
			
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