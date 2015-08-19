<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Базовый контроллер для административной панели
	 *
	 * @name        Controller_Admin_Layout_Secure
	 * @category    Admin
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	abstract class Controller_Admin_Layout_Secure extends Controller_Layout_Secure {
	 
		/**
		 * Default layout template
		 *
		 * @property View
		 * @access public
		 */
		public $template = 'admin/base/layout';
	 
		/**
		 * Login page URL
		 *
		 * @property string
		 * @access public
		 */
		public $login_url = 'admin/auth/login';
	 
		/**
		 * Roles
		 *
		 * @property array
		 * @access public
		 */
		public $roles = array('login', 'admin');
		
		/**
		 * Отобразить административную страницу 
		 *
		 * @param string $path путь к шаблону 
		 * @param array  $data данные для шаблона
		 */
		protected function showAdmin($path, $data = array()) {
		
			$menu    = View::factory('admin/block/menu');
			$footer  = View::factory('admin/block/footer');
			$content = View::factory('admin/' . $path, $data);
			
			$html = $menu . $content . $footer;
		
			if (!empty($data[ 'pagetitle' ])) {
			
				$this -> template -> set('pagetitle', $data[ 'pagetitle' ]);
			}
		
			// Set content template
			$this -> template -> set('content', $html);
		}
	} 

    /* End of file Secure.php */
    /* Location: ./application/classes/Controller/Admin/Layout/Secure.php */
	
	