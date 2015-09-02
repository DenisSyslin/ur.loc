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
		 * @param int $itemsPerPage строк на странице
		 * @param int $offset блок строк
		 *
		 * @return array
		 */
		public function getList($itemsPerPage, $offset) {
		
			$this -> columns = array(
				't.id', 
				't.type', 
				't.name', 
				't.title', 
				't.created', 
				't.visible', 
				't.action', 
				'u.username'
			);
		
			return parent::getList($itemsPerPage, $offset);
		}
		
		/**
		 * Получить страницу
		 *
		 * @param int $page_id идентификатор страницы
		 * @param bool $only_visible только видимая запись
		 * @return array
		 */
		public function get($page_id, $only_visible = false) {
		
			$this -> columns = array('id', 'type', 'name', 'title', 'description', 'keywords', 'content', 'created', 'visible');

			return parent::get($page_id, $only_visible);
		}
		
		/**
		 * Получить страницу
		 *
		 * @param string $type тип страницы
		 * @return array
		 */
		public function getByType($type, $asList = false) {
		
			$this -> columns = array('id', 'type', 'name', 'title', 'description', 'keywords', 'content', 'created', 'visible');
			
			$query = DB::select_array($this -> columns)
				-> from($this -> _table_name)
				-> where('type', '=', $type)
				-> where('visible', '=', 'yes');
			
			if (!$asList) {
			
				$query -> limit(1);
			}
			
			$result = $query -> execute();
			
			if (count($result)) {
			
				$records = $result -> as_array();
			
				if ($asList) {
				
					return $records;
				}
			
				return current($records);
			}
			
			return FALSE;		
		}
		
		/**
		 * Поиск слова
		 *
		 * @param string $word искомое слово
		 * @return array
		 */
		public function search($word) {
			$query = DB::query(Database::SELECT, 'SELECT SQL_CALC_FOUND_ROWS *
				FROM (
					(
						SELECT 
							MATCH (name, title, content) AGAINST ("свободы") AS Relevance, id, name, title, description, keywords, content, created, \'news\' AS type 
						FROM `news` 
						WHERE 
							MATCH (name, title, content) AGAINST ("свободы")
							AND visible = \'yes\' 
					)
					UNION
					(
						SELECT 
							MATCH (name, title, content) AGAINST ("свободы") AS Relevance, id, name, title, description, keywords, content, created, \'articles\' AS type  
						FROM `articles` 
						WHERE 
							MATCH (name, title, content) AGAINST ("свободы")
							AND visible = \'yes\' 
					)
				) AS q
				ORDER BY Relevance DESC');
				
			$result = $query -> execute();
			
			if (count($result)) {
			
				return $result -> as_array();
			}
			
			return FALSE;	
		}
		
	} 

    /* End of file Page.php */
    /* Location: ./application/classes/Model/Page.php */