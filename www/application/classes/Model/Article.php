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
		 * Получить статью
		 *
		 * @param int $article_id идентификатор статьи
		 * @param bool $only_visible только видимая запись
		 * @return array
		 */
		public function get($article_id, $only_visible = false) {
		
			$this -> columns = array('id', 'name', 'title', 'description', 'keywords', 'content', 'created', 'visible');

			return parent::get($article_id, $only_visible);
		}
		
		/**
		 * Получить список видимых записей
		 *
		 * @param int $itemsPerPage строк на странице
		 * @param int $offset блок строк
		 *
		 * @return array
		 */
		public function getVisibleList($itemsPerPage, $offset) {
			
			$this -> columns = array(
				'id', 
				'name', 
				'title', 
				'description', 
				'keywords', 
				'content', 
				'created'
			);
		
			return parent::getVisibleList($itemsPerPage, $offset);
		}
	} 

    /* End of file Article.php */
    /* Location: ./application/classes/Model/Article.php */