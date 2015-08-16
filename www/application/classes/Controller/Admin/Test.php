<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Тестовый контроллер
	 *
	 * @name        Controller_Admin_Test
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Test extends Controller_Admin_Layout_Secure {
	 
		/**
		 * Список пользователей
		 */
		public function action_index() {
		
			print_r(Kohana::$config -> load('site.name'));
		}
	} 

    /* End of file Test.php */
    /* Location: ./application/classes/Controller/Admin/Test.php */
