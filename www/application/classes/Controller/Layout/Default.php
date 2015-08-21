<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Базовый контроллер 
	 *
	 * @name        Controller_Layout_Default
	 * @category    Controller
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	abstract class Controller_Layout_Default extends Controller_Template {
	 
		/**
		 * Auto loading configs groups
		 *
		 * @property array
		 * @access public
		 */
		public $config_groups = array(
			'blog',
		);
	 
		/**
		 * Auto loaded configs
		 *
		 * @property array (group => params)
		 * @access public
		 */
		public $config = array();
	 
		/**
		 * Global variables
		 *
		 * @property array
		 * @access private
		 */
		private $globals = array();
	 
		/**
		 * Default layout template
		 *
		 * @property View
		 * @access public
		 */
		public $template = 'base/layout';
	 
		/**
		 * Before execute action
		 */
		public function before() { 
		
			parent::before();
	 
			// load configs
			foreach ($this -> config_groups as $group) {
			
				$this -> config[ $group ] = Kohana::$config -> load($group) -> as_array();
			}
	 
			// bind this value as global for all templates
			View::set_global('config', $this -> config);
	 
			// bind as global value session message if exists
			View::set_global('message', Session::instance() -> get_once('message'));
		}
				
		/**
		 * Установить параметр для базового шаблона
		 *
		 * @param string $key
		 * @param string $value
		 */
		protected function setParam($key, $value) {
		
			$this -> template -> set($key, $value);
		}
				
		/**
		 * Установить глобальный параметр для базового шаблона
		 *
		 * @param string $key
		 * @param string $value
		 */
		protected function setGlobalParam($key, $value) {
		
			$this -> globals[ $key ] = $value;
		}
		
		/**
		 * Отобразить пользовательскую страницу 
		 *
		 * @param string $path путь к шаблону 
		 * @param array  $data данные для шаблона
		 */
		protected function showPage($path, $data = array()) {
		
			$content = View::factory($path, $data);

			$menu = View::factory('block/menu');
			$menu -> current = $data[ 'current_page' ];

			$footer = View::factory('block/footer');
			
			$html = $content;
		
			if (!empty($data[ 'pagetitle' ])) {
			
				$this -> template -> set('pagetitle', $data[ 'pagetitle' ]);
			}
		
			// Set content template
			$this -> template -> set('menu', $menu);
			$this -> template -> set('footer', $footer);
			$this -> template -> set('content', $html);
		}
	} 

    /* End of file Default.php */
    /* Location: ./application/classes/Controller/Layout/Default.php */
	
	