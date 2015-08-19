<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель работы со страницами сайта
	 *
	 * @name        Model_Page
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Page extends Model_Database {
	
		/**
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = 'pages';
		
		/**
		 * Получить список статей
		 *
		 * @return array
		 */
		public function getList() {
		
			$query = DB::select('id', 'name', 'created', 'visible', 'action', 'user')
				-> from($this -> _table_name)
				-> execute();
			
			if (count($query)) {
			
				return $query -> as_array();
			}
			
			return FALSE;
		}
		
		/**
		 * Получить колличество статей
		 *
		 * @return array
		 */
		public function getCount() {
		
			$query = DB::select(array(DB::expr('COUNT(id)'), 'count'))
				-> from($this -> _table_name)
				-> execute();
			
			if (count($query)) {
			
				$articles = $query -> as_array();
				$article = array_pop($articles);
				
				return $article[ 'count' ];
			}
			
			return FALSE;
		}
		
		/**
		 * Получить статью
		 *
		 * @param int $article_id идентификатор статьи
		 * @return array
		 */
		public function get($article_id) {
		
			$query = DB::select(
				'id',
				'name',
				'title',
				'description',
				'keywords', 
				'content',
				'created',
				'visible'					
			)
				-> from($this -> _table_name)
				-> where('id', '=', $article_id)
				-> limit(1)
				-> execute();
			
			if (count($query)) {
			
				$articles = $query -> as_array();
			
				return array_pop($articles);
			}
			
			return FALSE;
		}
		
		/**
		 * Сохранить статью
		 *
		 * @param int $article_id идентификатор статьи
		 * @param array $data данные для сохранения
		 * @return в зависимости от запроса 
		 *     INSERT - Возвращает массив из двух элементов: id последней вставленной строки и количество вставленных строк
		 *     UPDATE - Возвращает количество обновленных строк.
		 *     В случае неудачи возвращается bool FALSE
		 */
		public function save($article_id = false, $data) {
		
			if (empty($article_id)) {
			
				$query = DB::insert($this -> _table_name, array_keys($data)) -> values($data);
			}
			else {
			
				$query = DB::update($this -> _table_name) -> set($data) -> where('id', '=', $article_id);
			} 
		
			return $query -> execute();
		}
		
		/**
		 * Удалить статью
		 *
		 * @param int $article_id
		 * @return int Возвращает количество удаленных строк.
		 */
		public function del($article_id) {
			
			$result = DB::delete($this -> _table_name) 
				-> where('id', '=', $article_id) 
				-> limit(1) 
				-> execute();				
			
			return (($result > 0) ? $result : FALSE);
		}
	} 

    /* End of file Page.php */
    /* Location: ./application/classes/Model/Page.php */