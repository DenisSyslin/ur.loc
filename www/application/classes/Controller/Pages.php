<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы со страницами
	 *
	 * @name        Controller_Pages
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Pages extends Controller_Layout_Default {
	
		/**
		 * Основная модель
		 * @access protected
		 * @property string
		 */
		protected $model;
		
		/**
		 * Имя контроллера в единственном числе
		 * @property string
		 * @access protected
		 */
		protected $cName = 'page';
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Главная страница
		 */
		public function action_index() {
		
			$data = array();
			$data[ 'current_page' ] = 'main';
		
			$this -> addStylesheet('css/flexslider.css');
			$this -> addScript('js_plagins/jquery.flexslider.js');
			$this -> setParam('pagetitle', 'Главная страница');
			$this -> showPage($this -> cName . 's/main', $data);	
		}
		
		/**
		 * Страница помощь
		 */
		public function action_help() {
		
			$data = array();
			$data[ 'current_page' ] = 'help';
		
			$this -> setParam('pagetitle', 'Помощь');
			$this -> showPage($this -> cName . 's/help', $data);	
		}
		
		/**
		 * Страница о нас
		 */
		public function action_about() {
		
			$data = array();
			$data[ 'current_page' ] = 'about';
		
			$this -> setParam('pagetitle', 'О нас');
			$this -> showPage($this -> cName . 's/about', $data);	
		}
	} 

    /* End of file Pages.php */
    /* Location: ./application/classes/Controller/Pages.php */
