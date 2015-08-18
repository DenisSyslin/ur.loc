<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы со статьями
	 *
	 * @name        Controller_Admin_Articles
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Articles extends Controller_Admin_Layout_Secure {
	 
		/**
		 * Имя таблицы для ORM
		 * @access protected
		 * @property string
		 */
		protected $ormName = 'article';
	 		
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
		
			$this -> model = Model::factory('Article');
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
			
			// Получение визуального редактора
			View::set_global('contentAria', MyCKEditor::wysiwyg('content', Arr::get($data[ 'item' ], 'content')));

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
	 
			//echo '<pre>';
			//print_r($param);
			//echo '</pre>';
			//die();
				
			$data[ 'item' ] = $param;
			
			// Получение визуального редактора
			View::set_global('contentAria', MyCKEditor::wysiwyg('content', Arr::get($data[ 'item' ], 'content')));
			
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

			$article_id = (Arr::get($post -> data(), 'id') ? Arr::get($post -> data(), 'id') : 0);
			
			// check validation
			if ($post -> check()) {

				// store
				$data = $post -> data();
				unset($data[ 'save' ]);
	 
				//echo '<pre>';
				//print_r($data);
				//echo '</pre>';
				//die();
				
				if (empty($data[ 'visible' ]) OR $data[ 'visible' ] != 'yes') {
					
					$data[ 'visible' ] = 'no';
				}

				$data[ 'created' ] = date('Y-m-d H:i:s');
				$data[ 'user' ] = Auth::instance() -> get_user() -> id;
	 
				$data[ 'action' ] = (( ! empty($article_id) ) ? 'Update Article' : 'Add Article');
	 
				if ($this -> model -> save(Arr::get($data, 'id'), $data)) {
						 
					// message
					Session::instance() -> set('mess', (( ! empty($article_id) ) ? 'Статья обновлена.' : 'Статья создана.'));
					Session::instance() -> set('message_type', 'success');
		        
					// redirect to list page
					HTTP::redirect(URL::site('/admin/' . $this -> ormName . 's'));
				}
			}
	 
			// Errors list
			View::set_global('errors', $post -> errors('validation'));
	 
			$data = array();
			$data[ 'item' ] = $post -> data();
			
			// Получение визуального редактора
			View::set_global('contentAria', MyCKEditor::wysiwyg('content', Arr::get($data[ 'item' ], 'content')));
			
			$this -> setParam('pagetitle', 'Сохранить статью');
			$this -> showAdmin($this -> ormName . 's/' . (Arr::get($post -> data(), 'id') ? 'edit' : 'new'), $data);	
		}
		
		/**
		 * Удалить статью
		 */
		public function action_delete() {
		
			$article_id = $this -> request -> param('id');
			
			if (!$article_id OR !is_numeric($article_id)) {
			
				throw new HTTP_Exception_404('Удалить статью.');
			}
	 
			// Get article
			if (!$article = $this -> model -> get($article_id)) {
			
				throw new HTTP_Exception_404('Удалить статью.');
			}
			// Del article
			if ($this -> model -> del($article_id)) {
		 
				Session::instance()
					-> set('mess', __('Статью :article удалена.', array(':article' => $article[ 'name' ])))
					-> set('message_type', 'success');
			}
			else {
					 
				Session::instance()
					-> set('mess', __('Статью :article НЕ удалена.', array(':article' => $article[ 'name' ])))
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
		
			$post = array_map('trim', $this -> request -> post());
		
			$post = Validation::factory($post)
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

    /* End of file Articles.php */
    /* Location: ./application/classes/Controller/Admin/Articles.php */

	


	