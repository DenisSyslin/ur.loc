<?php defined('SYSPATH') or die('No direct script access.');
 
	/**
	 * Контроллер работы с пользователями
	 *
	 * @name        Controller_Admin_Users
	 * @category    Controller
	 * @subcategory Admin
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Admin_Users extends Controller_Admin_Layout_SimpleGRUD {
	 
		/**
		 * Имя таблицы для ORM
		 * @access protected
		 * @property string
		 */
		protected $ormName = 'user';
	 
		/**
		 * Поле с именем записи
		 * @access protected
		 * @property string
		 */
		protected $nameFiled = 'username';
		
		/**
		 * Список пользователей
		 */
		public function action_index() {
		
			$this -> grudIndex('Список пользователей');
		}
		
		/**
		 * Добавить пользователя
		 */
		public function action_new() {
		
			$data   = array();
				
			// Roles list
			$data[ 'roles' ] = ORM::factory('role')
				-> order_by('name', 'ASC')
				-> find_all();
			
			$data[ 'item' ] = ORM::factory('user') -> as_array();
			
			$data[ 'item' ][ 'roles' ] = array();
			
			$this -> setParam('pagetitle', 'Добавить пользователя');
			
			$this -> showAdmin('users/new', $data);	
		}
 
		/**
		 * Редактировать пользователя
		 *
		 * @throws HTTP_Exception_404
		 */
		public function action_edit() {
		
			$data   = array();
			
			// Get user id
			$user_id = $this -> request -> param('id');
			
			if (!$user_id) {

				throw new HTTP_Exception_404('Пользователь не найден.');
			}
	 
			// Get user
			$user = ORM::factory('user', $user_id);
			
			if (!$user -> loaded()) {

				throw new HTTP_Exception_404('Пользователь не найден.');
			}
	 
			// User roles
			$userRoles = array();
			
			foreach ($user -> roles -> find_all() as $role) {

				$userRoles[] = $role -> id;
			}
	 
			// Roles list
			$data[ 'roles' ] = ORM::factory('role') 
				-> order_by('name', 'ASC') 
				-> find_all();

			$data[ 'item' ]  = $user -> as_array();
			$data[ 'item' ][ 'roles' ]  = $userRoles;
			
			$this -> setParam('pagetitle', 'Редактировать пользователя');
			
			$this -> showAdmin('users/edit', $data);	
		}
	 			
		/**
		 * Сохранить пользователя
		 *
		 * @throws HTTP_Exception_404
		 */
		public function action_save() {

			// Protect page
			if ($this -> request -> method() !== Request::POST) {

				throw new HTTP_Exception_404('Страница не найдена.');
			}
	 
			// Back
			if ($this -> request -> post('back')) {

				HTTP::redirect('/admin/users');
			}
	 
			$post = $this -> _getPostValidation();
			
			// check validation
			if ($post -> check()) {

				// store
				$data = $post -> data();
	 
				/** @var Model_User $user **/
				$user = ORM::factory('user', Arr::get($data, 'id'));
	 
				// remove password if empty
				if (empty($data[ 'password' ])) {
                                            
					unset($data[ 'password' ]);
				}
	 
				// update user
				$user -> values($data, array('username', 'email', 'password')) -> save();
	 
				// remove all roles
				$user -> remove('roles');
	 
				// add new roles
				foreach (Arr::get($post, 'roles', array()) as $role) {

					$user -> add('roles', $role);
				}
	 
				// message
				Session::instance() -> set('mess', (Arr::get($post -> data(), 'id') ? 'Пользователь обновлен.' : 'Пользователь создан.'));
				Session::instance() -> set('message_type', 'success');
	 
				// redirect to list page
				HTTP::redirect(URL::site('/admin/users'));
			}
	 
			// Errors list
			View::set_global('errors', $post -> errors('validation'));
	 
			$data = array();
			$data[ 'item'  ] = $post -> data();
			$data[ 'roles' ] = ORM::factory('role') -> order_by('name', 'ASC') -> find_all();
			
			$this -> setParam('pagetitle', 'Сохранить пользователя');

			$this -> showAdmin('users/' . (Arr::get($post -> data(), 'id') ? 'edit' : 'new'), $data);	
		}
		
		/**
		 * Удалить пользователя
		 */
		public function action_delete() {
		
			$this -> grudDelete();
		}
		
		/**
		 * Получить список элементов
		 */
		protected function _getItems() {
		
			$items = $this -> orm
				-> order_by('username', 'ASC')
				-> order_by('email', 'ASC')
				-> offset($this -> pagination -> offset)
				-> limit($this -> pagination -> items_per_page)
				-> find_all();
				
			return $items;
		}
		
		/**
		 * Получить объект авлидации POST запроса
		 */
		protected function _getPostValidation() {
		
			$postdata = $this -> request -> post();
			$user_id = false;
			
			if (!empty($postdata[ 'id' ])) {
				
				$user_id = $postdata[ 'id' ];
			}
		
			$post = Validation::factory($postdata)
				-> labels(array(
					'username' => __('Имя пользователя'),
					'email'    => __('Email'),
				))
				-> rule('username', 'not_empty')
				-> rule('username', 'Model_Validate::unique_username', array(':value', $user_id))
				-> rule('email',    'not_empty')
				-> rule('email',    'email')
				-> rule('email',    'Model_Validate::unique_useremail', array(':value', $user_id));
	 
			if (!empty($post[ 'password' ])) {

				$post
					-> labels(array(
						'password'         => __('Пароль'),
						'password_confirm' => __('Подтверждение пароля'),
					))
					-> rule('password',         'not_empty')
					-> rule('password_confirm', 'not_empty')
					-> rule('password_confirm', 'matches', array(':validation', 'password', 'password_confirm'));
			}
				
			return $post;
		}
	} 

    /* End of file Users.php */
    /* Location: ./application/classes/Controller/Admin/Users.php */

	
	