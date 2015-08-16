<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы с ролями
	 *
	 * @name        Controller_Admin_Roles
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Roles extends Controller_Admin_Layout_Secure {
	 
		/**
		 * Имя таблицы для ORM
		 * @access protected
		 * @property string
		 */
		protected $ormName = 'role';
	 
		/**
		 * Список полей для последующей вставки в таблицу
		 * @access protected
		 * @property array
		 */
		protected $fields = array('name', 'description');
	 
		/**
		 * Поле с именем записи
		 * @access protected
		 * @property string
		 */
		protected $nameFiled = 'name';
		
		/**
		 * Список ролей
		 */
		public function action_index() {
		
			$this -> grudIndex('Список ролей');
		}
		
		/**
		 * Добавить роль
		 */
		public function action_new() {
		
			$this -> grudNew('Добавить роль');
		}
 
		/**
		 * Редактировать роль 
		 */
		public function action_edit() {
		
			$this -> grudEdit('Редактировать роль');
		}
	 
		/**
		 * Сохранить роль
		 */
		public function action_save() {
			
			$this -> grudSave('Сохранить роль');
		}
		
		/**
		 * Удалить роль
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
					'name'        => __('Имя роли'),
					'description' => __('Описание'),
				))
				-> rule('name', 'not_empty')
				-> rule('description', 'not_empty');
				
			return $post;
		}
	} 

    /* End of file Roles.php */
    /* Location: ./application/classes/Controller/Admin/Roles.php */

	


	