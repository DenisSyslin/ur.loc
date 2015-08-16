<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер административной панели
	 *
	 * @name        Controller_Admin_Dashboard
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Dashboard extends Controller_Admin_Layout_Secure {
	 
		/**
		 * Control Panel Dashboard Action
		 */
		public function action_index() {
		
			$this -> setParam('pagetitle', 'Панель управления системой');
		
			// Set content template
			$this -> showAdmin('dashboard');	
		}
	} 

    /* End of file Dashboard.php */
    /* Location: ./application/classes/Controller/Admin/Dashboard.php */