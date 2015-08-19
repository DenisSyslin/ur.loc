<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель работы со статьями
	 *
	 * @name        Model_Article
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Article extends Model_Layout_CRUD {
	
		/**
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = 'articles';

		/**
		 * Получить список статей
		 *
		 * @return array
		 */
		public function getList() {
		
			$this -> columns = array('id', 'name', 'created', 'visible', 'action', 'user');
		
			return parent::getList();
		}
		
		/**
		 * Получить статью
		 *
		 * @param int $article_id идентификатор статьи
		 * @return array
		 */
		public function get($article_id) {
		
			$this -> columns = array('id', 'name', 'title', 'description', 'keywords', 'content', 'created', 'visible');

			return parent::get($article_id);
		}
	} 

    /* End of file Article.php */
    /* Location: ./application/classes/Model/Article.php */