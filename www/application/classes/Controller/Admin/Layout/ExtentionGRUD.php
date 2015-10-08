<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер GRUD для расширенных задач задач
	 *
	 * @name        Controller_Admin_Layout_ExtentionGRUD
	 * @category    Admin
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	abstract class Controller_Admin_Layout_ExtentionGRUD extends Controller_Admin_Layout_Secure {
		
		/**
		 * Имя контроллера в единственном числе
		 * @property string
		 * @access protected
		 */
		protected $cName = '';
	
		/**
		 * Основная модель
		 * @access protected
		 * @property string
		 */
		protected $model;
	
		/**
		 * Общий метод отображения списка элементов (не злоупотреблять!!!)
		 *
		 * @param string $pagetitle заголовок страницы
		 */
		protected function grudIndex($pagetitle) {

			$data = array();

			$pageNum = $this -> request -> param('id');
			
			if (empty($pageNum)) {
			
				$pageNum = 1;
			}
			
			// Подключить постраничную навигацию			
			$this -> pagination	= Pagination::factory(array(
				'group'       => 'admin',
				'total_items' => $this -> model -> getCount()
			));
			
			$limit  = $this -> pagination -> items_per_page;
			$offset = $this -> pagination -> offset;
			
			// Элементы страницы
			$data[ 'items' ]      = $this -> model -> getList($limit, $offset);
			$data[ 'pagination' ] = $this -> pagination;
			
			// Получение сообщений для страницы
			$data[ 'message' ]      = Session::instance() -> get_once('mess');
			$data[ 'message_type' ] = Session::instance() -> get_once('message_type');
			
			$this -> setParam('pagetitle', $pagetitle);
			
			$this -> showAdmin($this -> cName . 's/list', $data);	
		}
		
		/**
		 * Общий метод отображения формы добаления элемента (не злоупотреблять!!!)
		 *
		 * @param string $pagetitle заголовок страницы
		 */
		protected function grudNew($pagetitle) {
			
			$data = array();
				
			$data[ 'item' ] = array_merge($this -> request -> post(), array());

			// Добавить редактор
			$this -> addEditor();
				
			$this -> setParam('pagetitle', $pagetitle);
			$this -> showAdmin($this -> cName . 's/new', $data);	
		}
		
		/**
		 * Общий метод отображения формы редактирования элемента (не злоупотреблять!!!)
		 *
		 * @param string $pagetitle заголовок страницы
		 * @throws HTTP_Exception_404
		 */
		protected function grudEdit($pagetitle) {
			
			$data = array();
			
			// Получить идентификатор из строки запроса
			$record_id = $this -> request -> param('id');
			
			if (!$record_id) {

				throw new HTTP_Exception_404('Запись не найдена.');
			}
	 
			// Получить запись
			if (!$record = $this -> model -> get($record_id)) {

				throw new HTTP_Exception_404('Запись не найдена.');
			}
			
			// Добавить редактор
			$this -> addEditor();
				
			$data[ 'item' ] = $record;
			
			$this -> setParam('pagetitle', $pagetitle);
			$this -> showAdmin($this -> cName . 's/edit', $data);	
		}
		
		/**
		 * Общий метод отображения сохранения элемента (не злоупотреблять!!!)
		 *
		 * @param string $pagetitle заголовок страницы
		 * @throws HTTP_Exception_404
		 */
		protected function grudSave($pagetitle) {

			// Protect page
			if ($this -> request -> method() !== Request::POST) {

				throw new HTTP_Exception_404('Запись не найдена.');
			}
	 
			// Back
			if ($this -> request -> post('back')) {

				HTTP::redirect('/admin/' . $this -> cName . 's');
			}
			
			$post = $this -> _getPostValidation();

			$record_id = (Arr::get($post -> data(), 'id') ? Arr::get($post -> data(), 'id') : 0);
			
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

				$data[ 'content' ] =  preg_replace('~[\t\r\n]+~siu', '', $data[ 'content' ]);
				$data[ 'content' ] =  preg_replace('~[\s]{2,}~siu', ' ', $data[ 'content' ]);
				
				if (empty($record_id)) {
					
					$data[ 'created' ] = date('Y-m-d H:i:s');
				}
				
				$data[ 'user' ] = Auth::instance() -> get_user() -> id;
	 
				$data[ 'action' ] = (( ! empty($record_id) ) ? 'Update ' : 'Add ') . UTF8::ucfirst($this -> cName);
	 
				if ($this -> model -> save(Arr::get($data, 'id'), $data)) {
						 
					// message
					Session::instance() -> set('mess', (( ! empty($record_id) ) ? 'Запись обновлена.' : 'Запись создана.'));
					Session::instance() -> set('message_type', 'success');
		        
					// redirect to list page
					HTTP::redirect(URL::site('/admin/' . $this -> cName . 's'));
				}
			}
	 	 
			// Errors list
			View::set_global('errors', $post -> errors('validation'));
	 
			$data = array();
			$data[ 'item' ] = $post -> data();
			
			// Добавить редактор
			$this -> addEditor();
			
			$this -> setParam('pagetitle', $pagetitle);
			$this -> showAdmin($this -> cName . 's/' . (( ! empty($record_id) ) ? 'edit' : 'new'), $data);	
		}
		
		/**
		 * Общий метод удаления элемента (не злоупотреблять!!!)
		 *
		 * @throws HTTP_Exception_404
		 */
		protected function grudDelete() {
		
			$record_id = $this -> request -> param('id');
			
			if (!$record_id OR !is_numeric($record_id)) {
			
				throw new HTTP_Exception_404('Запись не найдена.');
			}
	 
			// Get record
			if (!$record = $this -> model -> get($record_id)) {
			
				throw new HTTP_Exception_404('Запись не найдена.');
			}
			
			// Del record
			if ($this -> model -> del($record_id)) {
		 
				Session::instance()
					-> set('mess', __('Запись :record удалена.', array(':record' => $record[ 'name' ])))
					-> set('message_type', 'success');
			}
			else {
					 
				Session::instance()
					-> set('mess', __('Запись :record НЕ удален.', array(':record' => $record[ 'name' ])))
					-> set('message_type', 'error');
			}
	 
			// Redirect to base page
			HTTP::redirect($this -> request -> referrer());
		}
		
				
		/**
		 * Добавить редактор для страниц
		 */
		protected function addEditor() {
			
			$this -> addScript('js_plagins/ckeditor/ckeditor.js');
			$this -> addScript('js_plagins/myckeditor.js');
		}
	} 

    /* End of file ExtentionGRUD.php */
    /* Location: ./application/classes/Controller/Admin/Layout/ExtentionGRUD.php */
	
	