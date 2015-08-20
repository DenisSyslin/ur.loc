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
					if ($user[ 'photo' ] != '') {
					
						// кладем в папку /uploads/users (не забудьте про права на запись!)
						$fp = fopen(DOCROOT . 'uploads/users/' . Auth::instance() -> get_user() -> id . '.jpg', 'w');  
						fwrite($fp, file_get_contents($user[ 'photo' ])); // скачиваем его
						fclose($fp);
						
						// обновляем запись, что у пользователя есть фото
						DB::update('users') 
							-> set(array('photo' => 1)) 
							-> where('id', '=', Auth::instance() -> get_user() -> id) 
							-> execute(); 
					}
					
					$session = Session::instance(); // стартуем сессии
					
					// если пользователь хотел куда-то перейти
					if ($session -> get('redirectAfterLogin') != '') { 
					 
						$redirect = $session -> get('redirectAfterLogin'); 
						$session -> delete('redirectAfterLogin'); // удаляем запись об этом
						HTTP::redirect($redirect);                // и редиректим
					}
				}
				catch(ORM_Validation_Exception $e) {
					
					// если возникли ошибки - выводим в переменную login
					$this -> template -> login = $e -> errors(''); 
				}
			}

			// если пользователь не авторизован
			if (!$data['user'] = Auth::instance() -> get_user()) {
			
				// редиректим на страницу со входом/регистрацией
				HTTP::redirect('/account/registration'); 
			} 

			if (Auth::instance() -> get_user() -> photo == 1) {
				
				// выводим фото
				$data['photo'] = "/uploads/users/" . Auth::instance() -> get_user() -> id . ".jpg"; 
			} 
			
			$data[ 'ulogin' ] = $ulogin -> render(); // стартуем сессии
			$data[ 'photo' ]  = '/uploads/users/nophoto.jpg';

			// берем данные по всем присоединенным аккаунтам пользователя
			$data[ 'networks' ] = DB::select("identity") 
				-> from('ulogins') 
				-> where("user_id", "=", Auth::instance() -> get_user() -> id) 
				-> execute() 
				-> as_array(); 
			
			$this -> setParam('pagetitle', 'Личный кабинет');
			
			$this -> showPage('account', $data);	
		}

		/**
		 * Вход в ЛК
		 */
		public function action_login() {
			
			$data = array();		

			// если переданы POST данные
			if ($this -> request -> method() !== Request::POST)  {
				
				// проверяем - стоит ли флаг - запомнить меня
				$remember = array_key_exists('rememberme', $this -> request -> post())
					? (bool) $this -> request -> post('rememberme') 
					: FALSE;
				
				// Параметры авторизации
				$userEmail = $this -> request -> post('email');
				$userPass  = $this -> request -> post('password');
				
				// Авторизация прошла успешно
				if ($user = Auth::instance() -> login($userEmail, $userPass, $remember)) {

					// Для отправки пользователя на страницу в которую он попасть не смог
					if (Session::instance() -> get('redirectAfterLogin') != '') { 
					
						$redirect = Session::instance() -> get_once('redirectAfterLogin');
						HTTP::redirect($redirect);
					}
					
					HTTP::redirect('/account/');
				} 
				else {
					
					// Авторизация не прошла
					$data[ 'message' ] = Kohana::message('auth', 'wrongPass'); 
				}
				
				$data[ 'email' ] = $userEmail;
			}
			
			$ulogin = Ulogin::factory(); 
			
			// Значки социальных сетей
			$data[ 'ulogin' ] = $ulogin -> render(); 
				
			// Вставляем username, если он был введен
			$data[ 'username' ] = array_key_exists('username', $this -> request -> post()) 
				? htmlspecialchars($this -> request -> post('username')) 
				: ''; 
				
			// Вставляем email, если он был введен
			$data[ 'email' ]  = array_key_exists('email', $this -> request -> post()) 
				? htmlspecialchars($this -> request -> post('email')) 
				: '';
			
			$this -> setParam('pagetitle', 'Авторизация');
			
			$this -> showPage('account/login', $data);	
		}

		/**
		 * Регистрация пользователей
		 */
		public function action_registration() {	
			
			$data = array();
			
			if ($this -> request -> method() !== Request::POST) {			
			
				try {

					// Проверить поля
					$object = Validation::factory($this -> request -> post());
					$object
						 -> rule('username', 'not_empty')
						 -> rule('username', 'min_length', array(':value', '4'))
						 -> rule('password', 'not_empty')
						 -> rule('password', 'min_length', array(':value', '5'))
						 -> rule('email',    'email');

					// Проверка пройдена - регистрируем
					$user = ORM::factory('User') 
						 -> set('email',    $this -> request -> post('email'))
						 -> set('username', $this -> request -> post('username'))
						 -> set('password', $this -> request -> post('password'))
						 -> save();

					// даем новому пользователю роль для логина
					$user -> add('roles', ORM::factory('Role', array('name' => 'login')));

					// очищаем массив с POST
					$_POST = array();

					$to      = $this -> request -> post('email');
					$subject = Kohana::message('account', 'email.themes.registration');
					$from    = Kohana::message('account', 'email.from');
					$message = 'Вы успешно зарегистрировались с паролем - '.$this -> request -> post('password');

					// отправляем пользователю сообщение с его паролем
					Email::send($to, $from, $subject, $message, $html = false); 

					// сразу же авторизуем его, без ввода логина и пароля
					Auth::instance() -> force_login($user); 
					HTTP::redirect('/account/');
				} 
				catch (ORM_Validation_Exception $e) {

					// если во время валидации возникли ошибки
					$data[ 'messageReg' ] = Kohana::message('account', 'errorReg');
					$data[ 'errors' ]     = $e -> errors('models');			
					// берем значения ошибок из файла /application/messages/model/user.php
				}
			}	
			
			$ulogin = Ulogin::factory(); 
			
			// Значки социальных сетей
			$data[ 'ulogin' ] = $ulogin -> render(); 
				
			// Вставляем username, если он был введен
			$data[ 'username' ] = array_key_exists('username', $this -> request -> post()) 
				? htmlspecialchars($this -> request -> post('username')) 
				: ''; 
				
			// Вставляем email, если он был введен
			$data[ 'email' ]  = array_key_exists('email', $this -> request -> post()) 
				? htmlspecialchars($this -> request -> post('email')) 
				: ''; 
			
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
			
			$data = array();
			$post = array();
			
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
	}
	
    /* End of file Account.php */
    /* Location: ./application/classes/Controller/Account.php */