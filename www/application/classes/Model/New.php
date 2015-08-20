<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель работы с новостями
	 *
	 * @name        Model_New
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_New extends Model_Database {
	
		/**
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = 'news';

		/**
		 * Получить список новостей
		 *
		 * @return array
		 */
		public function getList() {
		
			$this -> columns = array('id', 'name', 'created', 'visible', 'action', 'user');
		
			return parent::getList();
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