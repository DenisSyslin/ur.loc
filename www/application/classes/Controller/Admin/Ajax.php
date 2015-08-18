<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер управления доступом в админку
	 *
	 * @name        Controller_Admin_Auth
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Auth extends Controller_Layout_Default {
	 
		/**
		 * URL в случае удачного входа
		 * @property string
		 * @access private
		 */
		private $success_url = '/admin';
	 
		/**
		 * User Login Action
		 */
		public function action_login() {
		
			// create template
			$template = View::factory('admin/login');
	 
			// init errors array
			$errors = array();
	 
			// check request method
			if ($this -> request -> method() == Request::POST) {

				// validate user data
				$post = Validation::factory($this -> request -> post())
					 -> rule('login', 'not_empty')
					 -> rule('password', 'not_empty')
					 -> labels(array(
						'login'    => 'User login or email',
						'password' => 'Password',
					));
	 
				// if data valid
				if ($post -> check()) {
	 
					// set error
					$errors = array('common' => 'Invalid username or password');

					// Попытка войти
					if (Auth::instance() -> login($post[ 'login' ], $post[ 'password' ], isset($post[ 'remember' ]))) {
							 
						// set error
						$errors = array('common' => 'You have not access.');

						// Проверить наличие административной роли пользователя 
						$user_id = Auth::instance() -> get_user() -> id;
						$roles   = ORM::factory('user', $user_id) 
							-> roles 
							-> find_all();
							
						foreach ($roles as $role) {
							
							if ($role -> name == 'admin') {
								
								HTTP::redirect(URL::site($this -> success_url, TRUE, FALSE));
							}
						}
					}
				}
	 
				// add validation errors
				$errors = Arr::merge($errors, $post -> errors('messages'));
			}
	 
			// set variables into login template
			$template -> set('errors', $errors);
	 
			// set content into template
			$this -> template -> set('content', $template);
		}
	 
		/**
		 * User Logout Action
		 */
		public function action_logout() {
		
			// logout
			Auth::instance() -> logout(TRUE, TRUE);
	 
			// redirect
			HTTP::redirect($this -> request -> referrer());
		}
	 
		/**
		 * User Initialize Action
		 */
		//public function action_init() {
		//
		//	// find current admin user
		//	$user = ORM::factory('user', array('username' => 'admin'));
	    //
		//	// if user not founded
		//	if ($user -> loaded() === FALSE) {
        //
		//		// create new admin user
		//		$user -> values(array(
		//			'username' => 'admin',
		//			'password' => '12',
		//			'email'    => 'syslin@vand.ru',
		//		)) -> save();
	    //
		//		// add roles for admin user
		//		$user -> add('roles', ORM::factory('role', array('name' => 'login')));
		//		$user -> add('roles', ORM::factory('role', array('name' => 'admin')));
	    //
		//		// user message
		//		$this -> template -> set('content', '<h1>Done!</h1>');
	    //
		//		// exit
		//		return ;
		//	}
	    //
		//	// user message
		//	$this -> template -> set('content', '<h1>Error!</h1>');
		//}
	} 

    /* End of file Auth.php */
    /* Location: ./application/classes/Controller/Admin/Auth.php */