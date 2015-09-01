<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель работы с настройками
	 *
	 * @name        Model_Config
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Config extends Model_Database {
	
		/**
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = 'configs';
	
		/**
		 * Table columns
		 * @property array
		 * @access protected
		 */
		protected $_table_columns = array(
			'id'            => 'id',
			'group_name'    => 'group_name',
			'config_key'    => 'config_key',
			'config_ru_key' => 'config_ru_key',
			'config_value'  => 'config_value',
		);
		
		/**
		 * Получить параметры
		 *
		 * @param int $itemsPerPage строк на странице
		 * @param int $offset блок строк
		 *
		 * @return array
		 */
		public function getList($itemsPerPage, $offset) {
		
			$query = DB::select('id', 'config_key', 'config_ru_key', 'config_value')
				-> from($this -> _table_name)
				-> limit($itemsPerPage)
				-> offset($offset)
				-> execute();
			
			if (count($query)) {
			
				$params = $query -> as_array();
			
				foreach ($params as &$param) {
			
					$param[ 'config_value' ] = unserialize($param[ 'config_value' ]);
				}
				
				return $params;
			}
			
			return FALSE;
		}
		
		/**
		 * Получить колличество параметров
		 *
		 * @return array
		 */
		public function getCount() {
		
			$query = DB::select(array(DB::expr('COUNT(id)'), 'count'))
				-> from($this -> _table_name)
				-> execute();
			
			if (count($query)) {
			
				$params = $query -> as_array();
				$param = array_pop($params);
				
				return $param[ 'count' ];
			}
			
			return FALSE;
		}
		
		/**
		 * Получить параметр
		 *
		 * @param int $param_id идентификатор параметра
		 * @param bool $only_visible только видимая запись
		 * @return array
		 */
		public function get($param_id, $only_visible = false) {
		
			$query = DB::select('id', 'config_key', 'config_ru_key', 'config_value')
				-> from($this -> _table_name)
				-> where('id', '=', $param_id)
				-> limit(1)
				-> execute();
			
			if (count($query)) {
			
				$params = $query -> as_array();
			
				$param = array_pop($params);
				$param[ 'config_value' ] = unserialize($param[ 'config_value' ]);
				
				return $param;
			}
			
			return FALSE;
		}
		
		/**
		 * Сохранить параметр
		 *
		 * @param int $param_id идентификатор параметра
		 * @param array $data данные для сохранения
		 * @return в зависимости от запроса 
		 *     INSERT - Возвращает массив из двух элементов: id последней вставленной строки и количество вставленных строк
		 *     UPDATE - Возвращает количество обновленных строк.
		 *     В случае неудачи возвращается bool FALSE
		 */
		public function save($param_id = false, $data) {
		
			if (isset($data[ 'config_value' ])) {
			
				$data[ 'config_value' ] = serialize($data[ 'config_value' ]);
			}
		
			if (empty($param_id)) {
			
				$query = DB::insert($this -> _table_name, array_keys($data)) -> values($data);
			}
			else {
			
				$query = DB::update($this -> _table_name) -> set($data) -> where('id', '=', $param_id);
			} 
		
			return $query -> execute();
		}
		
		/**
		 * Удалить параметр
		 *
		 * @param int $param_id
		 * @return int Возвращает количество удаленных строк.
		 */
		public function del($param_id) {
			
			$result = DB::delete($this -> _table_name) 
				-> where('id', '=', $param_id) 
				-> limit(1) 
				-> execute();				
			
			return (($result > 0) ? $result : FALSE);
		}
	} 

    /* End of file Config.php */
    /* Location: ./application/classes/Model/Config.php */