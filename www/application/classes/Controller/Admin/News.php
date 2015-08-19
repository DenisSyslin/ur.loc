<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы с новостями
	 *
	 * @name        Controller_Admin_News
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_News extends Controller_Admin_Layout_Secure {
	 
		/**
		 * Имя таблицы для ORM
		 * @access protected
		 * @property string
		 */
		protected $ormName = 'News';
	 		
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
		
			$this -> model = Model::factory('News');
		}
		
		/**
		 * Список статей
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
			
			$this -> setParam('pagetitle', 'Список статей');
			
			$this -> showAdmin($this -> ormName . 's/list', $data);	
		}
		
		/**
		 * Добавить статью
		 */
		public function action_new() {
				
			$data = array();
				
			$data[ 'item' ] = array_merge($this -> request -> post(), array());
			
			$this -> setParam('pagetitle', 'Добавить статью');
			$this -> showAdmin($this -> ormName . 's/new', $data);	
		}
 
		/**
		 * Редактировать статью 
		 */
		public function action_edit() {
			
			$data = array();
			
			// Получить идентификатор из строки запроса
			$item_id = $this -> request -> param('id');
			
			if (!$item_id) {

				throw new HTTP_Exception_404('Статья не найдена.');
			}
	 
			// Получить запись
			if (!$param = $this -> model -> get($item_id)) {

				throw new HTTP_Exception_404('Статья не найдена.');
			}
	 
			$data[ 'item' ] = $param;
			
			$this -> setParam('pagetitle', 'Редактировать статью');
			$this -> showAdmin($this -> ormName . 's/edit', $data);	
		}
	 
		/**
		 * Сохранить статью
		 */
		public function action_save() {
		
			// Protect page
			if ($this -> request -> method() !== Request::POST) {

				throw new HTTP_Exception_404('Статья не найдена.');
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
	 
				if (empty($data[ 'visible' ]) OR $data[ 'visible' ] != 'yes') {
					
					$data[ 'visible' ] = 'no';
				}

				$data[ 'user' ] = Auth::instance() -> get_user() -> id;
	 
				echo '<pre>';
				print_r($data);
				echo '</pre>';
	 
				//if ($this -> model -> save(Arr::get($data, 'id'), $data)) {
				//		 
				//	// message
				//	Session::instance() -> set('mess', (Arr::get($post -> data(), 'id') ? 'Статья обновлена.' : 'Статья создана.'));
				//	Session::instance() -> set('message_type', 'success');
		        //
				//	// redirect to list page
				//	HTTP::redirect(URL::site('/admin/' . $this -> ormName . 's'));
				//}
			}
	 
			// Errors list
			View::set_global('errors', $post -> errors('validation'));
	 
			$data = array();
			$data[ 'item' ] = $post -> data();
			
			$this -> setParam('pagetitle', 'Сохранить статью');
			$this -> showAdmin($this -> ormName . 's/' . (Arr::get($post -> data(), 'id') ? 'edit' : 'new'), $data);	
		}
		
		/**
		 * Удалить статью
		 */
		public function action_delete() {
		
			$this -> grudDelete();
		}
		
		/**
		 * Получить список элементов
		 */
		protected function _getItems() {
		
			$items = $this -> orm
				-> order_by('name', 'ASC')
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
					'name'        => __('Имя статьи'),
					'title'       => __('Title окна'),
					'content'     => __('Контент'),
					'description' => __('Описнаие'),
					'keywords'    => __('Ключевые слова'),
					'visible'     => __('Видимость'),
				))
				-> rule('name', 'not_empty')
				-> rule('content', 'not_empty')
				-> rule('title', 'not_empty');
				
			return $post;
		}
	} 

    /* End of file News.php */
    /* Location: ./application/classes/Controller/Admin/News.php */

	


	