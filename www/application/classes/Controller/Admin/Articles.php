<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы со статьями
	 *
	 * @name        Controller_Admin_Articles
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Articles extends Controller_Admin_Layout_ExtentionGRUD {
	 
		/**
		 * Имя контроллера
		 * @access protected
		 * @property string
		 */
		protected $cName = 'article';

		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Список статей
		 */
		public function action_index() {
			
			$this -> grudIndex('Список статей');
		}
		
		/**
		 * Добавить статью
		 */
		public function action_new() {
			
			$this -> grudNew('Добавить статью');
		}
 
		/**
		 * Редактировать статью 
		 */
		public function action_edit() {
			
			$this -> grudEdit('Редактировать статью');
		}
	 
		/**
		 * Сохранить статью
		 */
		public function action_save() {
		
			$this -> grudSave('Сохранить статью');
		}
		
		/**
		 * Удалить статью
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
						
					'name'        => __('Имя статьи'),
					'title'       => __('Title окна'),
					'content'     => __('Контент'),
					'description' => __('Описнаие'),
					'keywords'    => __('Ключевые слова'),
					'visible'     => __('Видимость'),
					'show_on_main_page' => __('Отображать на главной'),
				))
				-> rule('name', 'not_empty')
				-> rule('content', 'not_empty')
				-> rule('content', 'min_length', array(':value', 4))
				-> rule('title', 'not_empty');
				
			return $post;
		}
	} 

    /* End of file Articles.php */
    /* Location: ./application/classes/Controller/Admin/Articles.php */

	


	