<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель работы со страницами сайта
	 *
	 * @name        Model_Page
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Page extends Model_Layout_CRUD {
	
		/**
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = 'pages';

		/**
		 * Получить список страниц
		 *
		 * @return array
		 */
		public function getList() {
		
			$this -> columns = array('id', 'type', 'created', 'visible', 'action', 'user');
		
			return parent::getList();
		}
		
		/**
		 * Получить страницу
		 *
		 * @param int $page_id идентификатор страницы
		 * @return array
		 */
		public function get($page_id) {
		
			$this -> columns = array('id', 'type', 'title', 'description', 'keywords', 'content', 'created', 'visible');

			return parent::get($page_id);
		}
	} 

    /* End of file Page.php */
    /* Location: ./application/classes/Model/Page.php */