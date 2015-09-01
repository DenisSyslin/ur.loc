<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель работы с новостями
	 *
	 * @name        Model_New
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_New extends Model_Layout_CRUD {
	
		/**
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = 'news';

		/**
		 * Получить список новостей
		 *
		 * @param int $itemsPerPage строк на странице
		 * @param int $offset блок строк
		 *
		 * @return array
		 */
		public function getList($itemsPerPage, $offset) {
		
			$this -> columns = array(
				't.id', 
				't.name', 
				't.created', 
				't.visible', 
				't.action', 
				'u.username'
			);
		
			return parent::getList($itemsPerPage, $offset);
		}
		
		/**
		 * Получить новость
		 *
		 * @param int $news_id идентификатор новости
		 * @return array
		 */
		public function get($news_id) {
		
			$this -> columns = array('id', 'name', 'title', 'description', 'keywords', 'content', 'created', 'visible');

			return parent::get($news_id);
		}
	} 

    /* End of file New.php */
    /* Location: ./application/classes/Model/New.php */