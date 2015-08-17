<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы со статьями
	 *
	 * @name        Controller_Admin_Articles
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Articles extends Controller_Admin_Layout_Secure {
	 
		/**
		 * Имя таблицы для ORM
		 * @access protected
		 * @property string
		 */
		protected $ormName = 'article';
	 
		/**
		 * Список полей для последующей вставки в таблицу
		 * @access protected
		 * @property array
		 */
		protected $fields = array(
			'name',
			'title',
			'description',
			'keywords', 
			'content',
			'created',
			'visible',
			'action',
			'user',					
		);
	 
		/**
		 * Поле с именем записи
		 * @access protected
		 * @property string
		 */
		protected $nameFiled = 'name';
		
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
				-> order_by('name', 'ASC')
				-> offset($this -> pagination -> offset)
				-> limit($this -> pagination -> items_per_page)
				-> find_all();
				
			return $items;
		}
		
		/**
		 * Получить объект валидации POST запроса
		 */
		protected function _getPostValidation() {
		
			$post = Validation::factory($this -> request -> post())
				-> labels(array(
					'name'        => __('Имя роли'),
					'description' => __('Описание'),
				))
				-> rule('name', 'not_empty')
				-> rule('description', 'not_empty');
				
			return $post;
		}
	} 

    /* End of file Articles.php */
    /* Location: ./application/classes/Controller/Admin/Articles.php */

	


	