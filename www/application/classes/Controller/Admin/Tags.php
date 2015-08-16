<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы с тегами
	 *
	 * @name        Controller_Admin_Tags
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Tags extends Controller_Admin_Layout_Secure {
	 
		/**
		 * Имя таблицы для ORM
		 * @access protected
		 * @property string
		 */
		protected $ormName = 'tag';
	 
		/**
		 * Список полей для последующей вставки в таблицу
		 * @access protected
		 * @property array
		 */
		protected $fields = array('name');
	 
		/**
		 * Поле с именем записи
		 * @access protected
		 * @property string
		 */
		protected $nameFiled = 'name';
		
		/**
		 * Список тэгов
		 */
		public function action_index() {
		
			$this -> grudIndex('Список тэгов');
		}

		/**
		 * Добавить тэг
		 */
		public function action_new() {

			$this -> grudNew('Добавить тэг');
		}
 
		/**
		 * Редактировать тэг
		 */
		public function action_edit() {
		
			$this -> grudEdit('Редактировать тэг');
		}
	 			
		/**
		 * Сохранить тэг
		 */
		public function action_save() {
			
			$this -> grudSave('Сохранить тэг');
		}
		
		/**
		 * Удалить тэг
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
		 * Получить объект авлидации POST запроса
		 */
		protected function _getPostValidation() {
		
			$post = Validation::factory($this -> request -> post())
				-> labels(array(
					'name' => __('Имя тэга'),
				))
				-> rule('name', 'not_empty');
				
			return $post;
		}
	} 

    /* End of file Tags.php */
    /* Location: ./application/classes/Controller/Admin/Tags.php */

	
	
	