<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Базовый контроллер 
	 *
	 * @name        Controller_Layout_Secure
	 * @category    Controller
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	abstract class Controller_Layout_Secure extends Controller_Layout_Default {
	 
		/**
		 * Kohana_Auth_ORM
		 * 
		 * @property object
		 * @access public
		 */
		public $auth = NULL;
	 
		/**
		 * Model_User
		 *
		 * @property object
		 * @access public
		 */
		public $user = NULL;
	 
		/**
		 * Login page URL
		 *
		 * @property string
		 * @access public
		 */
		public $login_url = 'login';
	 
		/**
		 * Roles
		 *
		 * @property array
		 * @access public
		 */
		public $roles = array('login');
	 
		/**
		 * Before execute action
		 */
		public function before() {
		
			parent::before();
	 
			// auth
			$this -> auth = Auth::instance();
	 
			// user
			$this -> user = $this -> auth -> get_user();
	 
			// check access
			if (is_array($this -> roles) AND !(empty($this -> roles)) AND ! $this -> auth -> logged_in($this -> roles) ) {
			
				HTTP::redirect($this -> login_url);
			}
	 
			// set template variables
			$this -> template -> set_global('user', $this -> user);
		}
	} 

    /* End of file Secure.php */
    /* Location: ./application/classes/Controller/Layout/Secure.php */
	
	
	