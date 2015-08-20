<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы с новостями
	 *
	 * @name        Controller_Admin_News
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_News extends Controller_Admin_Layout_ExtentionGRUD {

		/**
		 * Имя контроллера в единственном числе
		 * @property string
		 * @access protected
		 */
		protected $cName = 'new';	 	
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Список новостей
		 */
		public function action_index() {
			
			$this -> grudIndex('Список новостей');
		}
		
		/**
		 * Добавить новость
		 */
		public function action_new() {
			
			$this -> grudNew('Добавить новость');
		}
 
		/**
		 * Редактировать новость 
		 */
		public function action_edit() {
			
			$this -> grudEdit('Редактировать новость');
		}
	 
		/**
		 * Сохранить новость
		 */
		public function action_save() {
		
			$this -> grudSave('Сохранить новость');
		}
		
		/**
		 * Удалить новость
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
						
					'name'        => __('Имя новости'),
					'title'       => __('Title окна'),
					'content'     => __('Контент'),
					'description' => __('Описнаие'),
					'keywords'    => __('Ключевые слова'),
					'visible'     => __('Видимость'),
				))
				-> rule('name', 'not_empty')
				-> rule('content', 'not_empty')
				-> rule('content', 'min_length', array(':value', 4))
				-> rule('title', 'not_empty');
				
			return $post;
		}
	} 

    /* End of file News.php */
    /* Location: ./application/classes/Controller/Admin/News.php */

	


	