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
		
			// Была отправлена форма обратной связи
			if ($this -> request -> method() === Request::POST) {

				$post = $this -> _getContactValidation();
			
				// Выполнить проверку
				if ($post -> check()) {
				
				}
				else {
					
					
				}
			}
		
			$data[ 'slogan' ] = 'Контакты';
			$this -> setParam('pagetitle', 'О нас');
			$this -> showPage($this -> cName . 's/about', $data);	
		}
		
		/**
		 * Получить объект валидации POST запроса, формы контактов
		 */
		protected function _getContactValidation() {
		
			$post = array_map('trim', $this -> request -> post());
		
			$post = Validation::factory($post)
				-> labels(array(
					'type'        => __('Тип страницы'),
					'title'       => __('Title окна'),
					'content'     => __('Контент'),
					'description' => __('Описнаие'),
					'keywords'    => __('Ключевые слова'),
					'visible'     => __('Видимость'),
				))
				-> rule('type', 'not_empty')
				-> rule('type', 'regex', array(':value', '~^[a-z]+$~ui'))
				-> rule('title', 'not_empty');
				
			return $post;
		}
	} 

    /* End of file Pages.php */
    /* Location: ./application/classes/Controller/Pages.php */
