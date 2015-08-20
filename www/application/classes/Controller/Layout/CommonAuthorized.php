<?php defined('SYSPATH') or die('No direct script access.');
 
	/**
	 * Базовый контроллер ЛК
	 *
	 * @name        Controller_Layout_CommonAuthorized
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */

	abstract class Controller_Layout_CommonAuthorized extends Controller_Template {
	 
		/**
		 * Имя шаблона
		 * @property string
		 * @access public
		 */
		public $template = 'template';
	 
		/**
		 * Перед загрузкой страницы
		 */
		public function before() {
			
			parent::before();
			
			if (!Auth::instance() -> get_user()) {
				
				$session = Session::instance();
				$session -> set('redirectAfterLogin', $_SERVER[ 'REQUEST_URI' ]);
				HTTP::redirect('/account/registration');
			}
		}
	}
		
    /* End of file CommonAuthorized.php */
    /* Location: ./application/classes/Controller/Layout/CommonAuthorized.php */