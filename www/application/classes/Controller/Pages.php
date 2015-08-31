<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы со страницами
	 *
	 * @name        Controller_Pages
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Pages extends Controller_Layout_Default {
	
		/**
		 * Основная модель
		 * @access protected
		 * @property string
		 */
		protected $model;
		
		/**
		 * Имя контроллера в единственном числе
		 * @property string
		 * @access protected
		 */
		protected $cName = 'page';
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Главная страница
		 */
		public function action_index() {
		
			$data = array();
			$data[ 'current_page' ] = 'main';
		
			$this -> setParam('pagetitle', 'Главная страница');
			$this -> showPage($this -> cName . 's/main', $data);	
		}
		
		/**
		 * Страница помощь
		 */
		public function action_help() {
		
			$data = array();
			$data[ 'current_page' ] = 'help';
		
			$this -> setParam('pagetitle', 'Помощь');
			$this -> showPage($this -> cName . 's/help', $data);	
		}
		
		/**
		 * Страница о нас
		 */
		public function action_about() {
		
			$data = array();
			$data[ 'current_page' ] = 'about';
		
			if (!$headers = $this -> model -> getByType('about')) {
				
				// 404	
			}
		
			$item = array();
		
			// Была отправлена форма обратной связи
			if ($this -> request -> method() === Request::POST) {

				$post = $this -> _getContactValidation();
			
				// Выполнить проверку
				if ($post -> check()) {
				
					$data = $post -> data();
				
					$message = $data[ 'comment' ];
					$subject = __(Config::getSiteParam('site_name')) . ':: Сообщение от пользователя ' . $data[ 'name' ];
					$from    = $data[ 'email' ];
				
					Helper_Mail::mailSend(__(Config::getSiteParam('site_email')), $subject, $message, $from);

					// Сообщение
					Session::instance() -> set('mess', 'Спасибо за интерес проявленный к нашей компании. Мы свяжемся с вами в ближайшее время.');
					Session::instance() -> set('message_type', 'success');
		        
					// Чистим форму
					HTTP::redirect(URL::site('/pages/about'));	
				}
				
				$item = $this -> request -> post();
				
				// Возвращаем ошибки
				View::set_global('errors', $post -> errors('validation'));
			}
		
			// Получение сообщений для страницы
			$data[ 'message' ]      = Session::instance() -> get_once('mess');
			$data[ 'message_type' ] = Session::instance() -> get_once('message_type');
		
			$data[ 'item' ]   = $item;
			$data[ 'slogan' ] = $headers[ 'title' ];
			$this -> setParam('pagetitle', $headers[ 'title' ]);
			$this -> showPage($this -> cName . 's/about', $data);	
		}
		
		/**
		 * Получить объект валидации POST запроса, формы контактов
		 */
		protected function _getContactValidation() {
		
			$post = $this -> request -> post();
			$post = array_map('trim', $post);
			$post = array_map('strip_tags', $post);
		
			$post = Validation::factory($post)
				-> labels(array(
					'name'    => __('Ваше ФИО'),
					'email'   => __('Ваш email'),
					'comment' => __('Сообщение')
				))
				-> rule('name', 'not_empty')
				-> rule('name', 'regex', array(':value', '~^[а-яё\d\-\_\s]+$~ui'))
				-> rule('email', 'not_empty')
				-> rule('email', 'email')
				-> rule('comment', 'not_empty');
				
			return $post;
		}
	} 

    /* End of file Pages.php */
    /* Location: ./application/classes/Controller/Pages.php */
