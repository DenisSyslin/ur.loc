<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Базовая модель 
	 *
	 * @name        Model_Layout_CRUD
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Layout_CRUD extends Model_Database {
	
		/**
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = '';
		
		/**
		 * Columns list
		 * @property array
		 * @access protected
		 */
		protected $columns = array();

		/**
		 * Получить список
		 *
		 * @param int $itemsPerPage строк на странице
		 * @param int $offset блок строк
		 *
		 * @return array
		 */
		public function getList($itemsPerPage, $offset) {
		
			$query = DB::select_array($this -> columns)
				-> from(array($this -> _table_name, 't'))
				-> join(array('users', 'u')) -> on('u.id', '=', 't.user')
				-> limit($itemsPerPage)
				-> offset($offset)
				-> order_by('t.created', 'DESC')
				-> execute();
			
			if (count($query)) {
			
				return $query -> as_array();
			}
			
			return FALSE;
		}
		
		/**
		 * Получить колличество записей
		 *
		 * @param bool $only_visible только видимая запись
		 * @return int
		 */
		public function getCount($only_visible = false) {
		
			$query = DB::select(array(DB::expr('COUNT(id)'), 'count'))
				-> from($this -> _table_name);
			
			if ($only_visible) {
			
				$query -> where('visible', '=', 'yes');
			}
			
			$result = $query -> execute();
			
			if (count($result)) {
			
				return $result -> get('count');
			}
			
			return FALSE;
		}
		
		/**
		 * Получить запись
		 *
		 * @param int $record_id идентификатор записи
		 * @param bool $only_visible только видимая запись
		 * @return array
		 */
		public function get($record_id, $only_visible = false) {
		
			$query = DB::select_array($this -> columns)
				-> from($this -> _table_name)
				-> where('id', '=', $record_id)
				-> limit(1);
			
			if ($only_visible) {
			
				$query -> where('visible', '=', 'yes');
			}
			
			$result = $query -> execute();
			
			if (count($result)) {
			
				$records = $result -> as_array();
			
				return current($records);
			}
			
			return FALSE;
		}
		
		/**
		 * Сохранить запись
		 *
		 * @param int $record_id идентификатор записи
		 * @param array $data данные для сохранения
		 * @return в зависимости от запроса 
		 *     INSERT - Возвращает массив из двух элементов: id последней вставленной строки и количество вставленных строк
		 *     UPDATE - Возвращает количество обновленных строк.
		 *     В случае неудачи возвращается bool FALSE
		 */
		public function save($record_id = false, $data) {
		
			if (empty($record_id)) {
			
				$query = DB::insert($this -> _table_name, array_keys($data)) -> values($data);
			}
			else {
			
				$query = DB::update($this -> _table_name) -> set($data) -> where('id', '=', $record_id);
			} 
		
			return $query -> execute();
		}
		
		/**
		 * Удалить запись идентификатор записи
		 *
		 * @param int $record_id
		 * @return int Возвращает количество удаленных строк.
		 */
		public function del($record_id) {
			
			$result = DB::delete($this -> _table_name) 
				-> where('id', '=', $record_id) 
				-> limit(1) 
				-> execute();				
			
			return (($result > 0) ? $result : FALSE);
		}
	} 

    /* End of file Article.php */
    /* Location: ./application/classes/Model/Article.php */