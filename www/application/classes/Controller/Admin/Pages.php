<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы со страницами сайта
	 *
	 * @name        Controller_Admin_Pages
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Pages extends Controller_Admin_Layout_ExtentionGRUD {
	 
		/**
		 * Имя контроллера в единственном числе
		 * @access protected
		 * @property string
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
		 * Список страниц
		 */
		public function action_index() {
			
			$this -> grudIndex('Список страниц');
		}
		
		/**
		 * Добавить страницу
		 */
		public function action_new() {
			
			$this -> grudNew('Добавить страницу');
		}
 
		/**
		 * Редактировать страницу 
		 */
		public function action_edit() {
			
			$this -> grudEdit('Редактировать страницу');
		}
	 
		/**
		 * Сохранить страницу
		 */
		public function action_save() {
		
			$this -> grudSave('Сохранить страницу');
		}
		
		/**
		 * Удалить страницу
		 */
		public function action_delete() {
		
			$this -> grudDelete();
		}
		
		/**
		 * Получить список элементов
		 */
		protected function _getItems() {
		
			$items = $this -> orm
				-> order_by('created', 'ASC')
				-> offset($this -> pagination -> offset)
				-> limit($this -> pagination -> items_per_page)
				-> find_all();
				
			return $items;
		}
		
		/**
		 * Получить объект валидации POST запроса
		 */
		protected function _getPostValidation() {
		
			$post = array_map('trim', $this -> request -> post());
		
			$post = Validation::factory($post)
				-> labels(array(
					'type'        => __('Тип страницы'),
					'name'        => __('Имя страницы'),
					'title'       => __('Title окна'),
					'content'     => __('Контент'),
					'description' => __('Описнаие'),
					'keywords'    => __('Ключевые слова'),
					'visible'     => __('Видимость'),
				))
				-> rule('type', 'not_empty')
				-> rule('name', 'not_empty')
				-> rule('type', 'regex', array(':value', '~^[a-z]+$~ui'))
				-> rule('title', 'not_empty');
				
			return $post;
		}	
	} 

    /* End of file Pages.php */
    /* Location: ./application/classes/Controller/Admin/Pages.php */

	


	