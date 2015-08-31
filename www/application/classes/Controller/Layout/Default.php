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
		 * Default layout template path
		 * @const string
		 * @access public
		 */
		const TMP_PATH = 'default';
	 
		/**
		 * Default layout template
		 *
		 * @property View
		 * @access public
		 */
		public $template = 'default/base/layout';
		
		/**
		 * Массив стилевых таблиц для базового шаблона
		 * @access protected
		 * @variable array
		 */
		protected $styles = array();
		
		/**
		 * Массив скриптов для базового шаблона
		 * @access protected
		 * @variable array
		 */
		protected $scripts = array();
	 
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
		 * Добавление стилевых таблиц в шаблон
		 *
		 * @param string $file название стилевой таблицы
		 * @param bool $isUrl если стиль находится в интернете
		 * @param string $media строка тип CSS (all, print, screen, media)
		 */
		public function addStylesheet($file, $isUrl = FALSE, $media = 'all') {
		
			if ($isUrl !== FALSE) {
				$isUrl = TRUE;
			}
		
			$this -> styles[] = array(
				'file'  => $file,
				'isUrl' => ($isUrl),
				'media' => $media
			);
		}

		/**
		 * Добавление скриптов в шаблон
		 *
		 * @param string $file название скрипта
		 * @param bool $isUrl если скрипт находится в интернете
		 */
		public function addScript($file, $isUrl = FALSE) {
			
			if ($isUrl !== FALSE) {
				$isUrl = TRUE;
			}
		
			$this -> scripts[] = array(
				'file'   => $file,
				'isUrl'  => ($isUrl)
			);
		}
		
		/**
		 * Отобразить пользовательскую страницу 
		 *
		 * @param string $path путь к шаблону 
		 * @param array  $data данные для шаблона
		 */
		protected function showPage($path, $data = array()) {
		
			View::set_global('TMP_PATH', self::TMP_PATH);
			
			$content = View::factory(self::TMP_PATH . '/' . $path, $data);

			$menu = View::factory(self::TMP_PATH . '/block/menu');
			$menu -> current = $data[ 'current_page' ];

			$footer = View::factory(self::TMP_PATH . '/block/footer');
			
			$html = $content;
		
			if (!empty($data[ 'pagetitle' ])) {
			
				$this -> template -> set('pagetitle', $data[ 'pagetitle' ]);
			}
		
			// Set content template
			//$this -> template -> set('TMP_PATH', self::TMP_PATH);
			$this -> template -> set('menu', $menu);
			$this -> template -> set('footer', $footer);
			$this -> template -> set('content', $html);
			$this -> template -> set('scripts', $this -> scripts);
			$this -> template -> set('styles',  $this -> styles);
		}
	} 

    /* End of file Default.php */
    /* Location: ./application/classes/Controller/Layout/Default.php */
	
	