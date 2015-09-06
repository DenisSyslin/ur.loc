<?php defined('SYSPATH') or die('No direct script access.'); 

	/**
	 * Модуль коментарией VK
	 *
	 * @name        Kohana_Comments
	 * @category    Modules
	 * @subcategory Comments
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */

	class Kohana_Comments { 
		
		/**
		 * Конструктор класса
		 */
		public function __construct(array $config = array()) {
			
			// заносим в $this -> config конфиг из папки с модулем и объединяем его с конфигом пользователя, елси он есть
			$this -> config = Kohana::$config -> load('comments') -> as_array(); 
		}
		
		/**
		 * Фабричный метод для класса
		 *
		 * @param array $config конфигурация
		 * @return object
		 */
		public static function factory(array $config = array()) {
			
			return new Comments($config); 
		}

		/**
		 * Метод отрисовки комментариев
		 *
		 * @return html
		 */	
		public function render() {
			
			// создаем переменную с нашим видом, в который передаем конфиг
			$view = View::factory('comments/comments') -> set('cfg', $this -> config); 
			
			// как результат вызова функции - возвращаем отрендеренный вид
			return $view -> render(); 
		}
	}
	
    /* End of file Comments.php */
    /* Location: ./modules/comments/classes/Kohana/Comments.php */