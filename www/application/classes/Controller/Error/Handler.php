<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер обработки ощибок
	 *
	 * @name        Controller_Error_Handler
	 * @category    classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Error_Handler extends Controller_Layout_Default {
	 
		/**
		 * Имя контроллера
		 * @access protected
		 * @property string
		 */
		protected $cName = 'error';
		
		/**
		 * Перед выводом шаблона
		 */
		public function before() {

			parent::before();

			$this -> template -> page = URL::site(rawurldecode(Request::$initial -> uri()));
	 
			// Если внутренний запрос
			if (Request::$initial !== Request::$current) {

				if ($message = rawurldecode($this -> request -> param('message'))) {

					$this -> template -> message = $message;
				}
			}
			else {

				$this -> request -> action(404);
			}
	 
			// Устанавливаем HTTP статус
			$this -> response -> status((int) $this -> request -> action());
		}
		
		/**
		 * 404 Страница не найдена
		 */
		public function action_404() {
		
			$data = array();
			$data[ 'current_page' ] = $this -> cName;
	 
			// Устанавливаем HTTP статус
			$this -> response -> status(404);

			// Тут мы проверяем пришли попали ли мы на 404 страницу с нашего сайта
			if (isset ($_SERVER[ 'HTTP_REFERER' ]) AND strstr($_SERVER[ 'HTTP_REFERER' ], $_SERVER[ 'SERVER_NAME' ]) !== FALSE) {

				// Устанавливаем влаг о том что 404 ошибка была с внутренней сслки
				$data[ 'local' ] = TRUE;
			}
			
			$this -> template -> set('pagetitle', '404 Страница не найдена');

			$this -> showPage($this -> cName . 's/404', $data);	
		}
	 
		/**
		 * Сервис недоступен
		 */
		public function action_503() {
		
			$data = array();
			$data[ 'current_page' ] = $this -> cName;
			
			$this -> template -> set('pagetitle', 'Сервис недоступен');

			$this -> showPage($this -> cName . 's/503', $data);	
		}
	 
		/**
		 * Внутренняя ошибка сервера
		 */
		public function action_500() {
		
			$data = array();
			$data[ 'current_page' ] = $this -> cName;
			
			$this -> template -> set('pagetitle', 'Внутренняя ошибка сервера');

			$this -> showPage($this -> cName . 's/500', $data);	
		}
	} 

    /* End of file Handler.php */
    /* Location: ./application/classes/Controller/Error/Handler.php */