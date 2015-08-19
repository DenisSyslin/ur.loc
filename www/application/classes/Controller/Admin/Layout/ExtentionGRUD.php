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
		 * Имя контроллера в деинственном числе
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






		
			$data = array();
			
			$this -> orm = ORM::factory($this -> ormName) -> reset(FALSE);
			
			// Подключить постраничную навигацию			
			$this -> pagination	= Pagination::factory(array(
				'group'       => 'admin',
				'total_items' => $this -> orm -> count_all()
			));
			
			// Элементы страницы
			$data[ 'items' ]      = $this -> _getItems();
			$data[ 'pagination' ] = $this -> pagination;
			
			// Получение сообщений для страницы
			$data[ 'message' ]      = Session::instance() -> get_once('mess');
			$data[ 'message_type' ] = Session::instance() -> get_once('message_type');
			
			$this -> setParam('pagetitle', $pagetitle);
			
			$this -> showAdmin($this -> ormName . 's/list', $data);	
		}
		
		/**
		 * Общий метод отображения формы добаления элемента (не злоупотреблять!!!)
		 *
		 * @param string $pagetitle заголовок страницы
		 */
		protected function grudNew($pagetitle) {
		
			$data = array();
				
			$data[ 'item' ] = ORM::factory($this -> ormName) -> as_array();
			
			$this -> setParam('pagetitle', $pagetitle);
			$this -> showAdmin($this -> ormName . 's/new', $data);	
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
			$item_id = $this -> request -> param('id');
			
			if (!$item_id) {

				throw new HTTP_Exception_404('Запись не найдена.');
			}
	 
			// Получить запись
			$this -> orm = ORM::factory($this -> ormName, $item_id);
			
			if (!$this -> orm -> loaded()) {

				throw new HTTP_Exception_404('Запись не найдена.');
			}
	 
			$data[ 'item' ] = $this -> orm -> as_array();
			
			$this -> setParam('pagetitle', $pagetitle);
			$this -> showAdmin($this -> ormName . 's/edit', $data);	
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

				HTTP::redirect('/admin/' . $this -> ormName . 's');
			}
	 
			$post = $this -> _getPostValidation();

			// check validation
			if ($post -> check()) {

				// store
				$data = $post -> data();
	 
				$this -> orm = ORM::factory($this -> ormName, Arr::get($data, 'id'));

				// update record
				$this -> orm -> values($data, $this -> fields) -> save();
	 
				// message
				Session::instance() -> set('mess', (Arr::get($post -> data(), 'id') ? 'Запись обновлена.' : 'Запись создана.'));
				Session::instance() -> set('message_type', 'success');
	 
				// redirect to list page
				HTTP::redirect(URL::site('/admin/' . $this -> ormName . 's'));
			}
	 
			// Errors list
			View::set_global('errors', $post -> errors('validation'));
	 
			$data = array();
			$data[ 'item' ] = $post -> data();
			
			$this -> setParam('pagetitle', $pagetitle);
			$this -> showAdmin($this -> ormName . 's/' . (Arr::get($post -> data(), 'id') ? 'edit' : 'new'), $data);	
		}
		
		/**
		 * Общий метод удаления элемента (не злоупотреблять!!!)
		 *
		 * @throws HTTP_Exception_404
		 */
		protected function grudDelete() {
		
			$item_id = $this -> request -> param('id');
			
			if (!$item_id) {
			
				throw new HTTP_Exception_404('Запись не найдена.');
			}
	 
			// Get record
			$this -> orm = ORM::factory($this -> ormName, $item_id);
			
			if (!$this -> orm -> loaded()) {
			
				throw new HTTP_Exception_404('Запись не найдена.');
			}
	 
			// Set message
			Session::instance()
				-> set('mess', __('Запись :record удалена.', array(':record' => $this -> orm -> {$this -> nameFiled})))
				-> set('message_type', 'success');
	 
			// Delete record
			$this -> orm -> delete();
	 
			// Redirect to base page
			HTTP::redirect($this -> request -> referrer());
		}
	} 

    /* End of file ExtentionGRUD.php */
    /* Location: ./application/classes/Controller/Admin/Layout/ExtentionGRUD.php */
	
	