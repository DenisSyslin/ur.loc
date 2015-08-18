<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы с настройками сайта
	 *
	 * @name        Controller_Admin_Configs
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Configs extends Controller_Admin_Layout_Secure {

		/**
		 * Имя таблицы для ORM
		 * @access protected
		 * @property string
		 */
		protected $ormName = 'config';
		
		/**
		 * Основная модель
		 * @access protected
		 * @property string
		 */
		protected $model;

		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			$this -> model = Model::factory('Config');
		}
	 
		/**
		 * Список параметров
		 */
		public function action_index() {
		
			$data = array();
			
			// Подключить постраничную навигацию			
			$this -> pagination	= Pagination::factory(array(
				'group'       => 'admin',
				'total_items' => $this -> model -> getCount()
			));
			
			// Элементы страницы
			$data[ 'items' ]      = $this -> model -> getList();

			$data[ 'pagination' ] = $this -> pagination;
			
			// Получение сообщений для страницы
			$data[ 'message' ]      = Session::instance() -> get_once('mess');
			$data[ 'message_type' ] = Session::instance() -> get_once('message_type');
			
			$this -> setParam('pagetitle', 'Список параметров');
			
			$this -> showAdmin($this -> ormName . 's/list', $data);	
		}
		
		/**
		 * Добавить параметр
		 */
		public function action_new() {
		
			$data = array();
				
			$data[ 'item' ] = array_merge($this -> request -> post(), array());
			
			$this -> setParam('pagetitle', 'Добавить параметр');
			$this -> showAdmin($this -> ormName . 's/new', $data);	
		}
 
		/**
		 * Редактировать параметр 
		 */
		public function action_edit() {
		
			$data = array();
			
			// Получить идентификатор из строки запроса
			$item_id = $this -> request -> param('id');
			
			if (!$item_id) {

				throw new HTTP_Exception_404('Параметр не найден.');
			}
	 
			// Получить запись
			if (!$param = $this -> model -> get($item_id)) {

				throw new HTTP_Exception_404('Параметр не найден.');
			}
	 
			$data[ 'item' ] = $param;
			
			$this -> setParam('pagetitle', 'Редактировать параметр');
			$this -> showAdmin($this -> ormName . 's/edit', $data);	
		}
	 
		/**
		 * Сохранить параметр
		 */
		public function action_save() {

			// Protect page
			if ($this -> request -> method() !== Request::POST) {

				throw new HTTP_Exception_404('Параметр не найден.');
			}
	 
			// Back
			if ($this -> request -> post('back')) {

				HTTP::redirect('/admin/' . $this -> ormName . 's');
			}
			
			$post = $this -> _getPostValidation();

			// check validation
			if ($post -> check()) {

				// store
				$data = $post -> data();
				unset($data[ 'save' ]);
	 
				if ($this -> model -> save(Arr::get($data, 'id'), $data)) {
						 
					// message
					Session::instance() -> set('mess', (Arr::get($post -> data(), 'id') ? 'Параметр обновлен.' : 'Параметр создан.'));
					Session::instance() -> set('message_type', 'success');
		 
					// redirect to list page
					HTTP::redirect(URL::site('/admin/' . $this -> ormName . 's'));
				}
			}
	 
			// Errors list
			View::set_global('errors', $post -> errors('validation'));
	 
			$data = array();
			$data[ 'item' ] = $post -> data();
			
			$this -> setParam('pagetitle', 'Сохранить параметр');
			$this -> showAdmin($this -> ormName . 's/' . (Arr::get($post -> data(), 'id') ? 'edit' : 'new'), $data);	
		}
		
		/**
		 * Удалить параметр
		 */
		public function action_delete() {
		
			$param_id = $this -> request -> param('id');
			
			if (!$param_id OR !is_numeric($param_id)) {
			
				throw new HTTP_Exception_404('Параметр не найден.');
			}
	 
			// Get param
			if (!$param = $this -> model -> get($param_id)) {
			
				throw new HTTP_Exception_404('Параметр не найден.');
			}
			// Del param
			if ($this -> model -> del($param_id)) {
		 
				Session::instance()
					-> set('mess', __('Параметр :param удален.', array(':param' => $param[ 'config_ru_key' ])))
					-> set('message_type', 'success');
			}
			else {
					 
				Session::instance()
					-> set('mess', __('Параметр :param НЕ удален.', array(':param' => $param[ 'config_ru_key' ])))
					-> set('message_type', 'error');
			}
	 
			// Redirect to base page
			HTTP::redirect($this -> request -> referrer());
		}
		
		/**
		 * Получить список элементов
		 */
		protected function _getItems() {
		
			$items = $this -> orm
				-> order_by('config_ru_key', 'ASC')
				-> offset($this -> pagination -> offset)
				-> limit($this -> pagination -> items_per_page)
				-> find_all();
				
			return $items;
		}
		
		/**
		 * Получить объект валидации POST запроса
		 */
		protected function _getPostValidation() {
		
			$post = Validation::factory($this -> request -> post())
				-> labels(array(
					'config_key'    => __('Ключ'),
					'config_ru_key' => __('Имя параметра'),
					'config_value'  => __('Значение'),
				))
				-> rule('config_key',    'not_empty')
				-> rule('config_ru_key', 'not_empty')
				-> rule('config_value',  'not_empty');
				
			return $post;
		}
	} 

    /* End of file Configs.php */
    /* Location: ./application/classes/Controller/Admin/Configs.php */
