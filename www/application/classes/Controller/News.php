<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы с новостями
	 *
	 * @name        Controller_News
	 * @category    classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_News extends Controller_Layout_Default {
	 
		/**
		 * Имя контроллера
		 * @access protected
		 * @property string
		 */
		protected $cName = 'new';

		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
			$this -> pageModel = Model::factory('page');
		}
		
		/**
		 * Список новостей
		 */
		public function action_index() {
		
			$data = array();
			$data[ 'current_page' ] = $this -> cName . 's';
		
			if (!$headers = $this -> pageModel -> getByType($data[ 'current_page' ])) {
				
				// 404	
			}

			$pageNum = $this -> request -> param('id');
			
			if (empty($pageNum)) {
			
				$pageNum = 1;
			}
			
			// Подключить постраничную навигацию			
			$this -> pagination	= Pagination::factory(array(
				'group'       => 'site',
				'total_items' => $this -> model -> getCount(true)
			));
			
			$limit  = $this -> pagination -> items_per_page;
			$offset = $this -> pagination -> offset;
			
			// Элементы страницы
			$data[ 'items' ]      = $this -> model -> getVisibleList($limit, $offset);
			$data[ 'pagination' ] = $this -> pagination;
		
			$data[ 'slogan' ] = $headers[ 'title' ];
			$this -> setParam('pagetitle', $headers[ 'title' ]);
			$this -> showPage($this -> cName . 's/list', $data);	
		}
		
		/**
		 * Новость
		 */
		public function action_show() {
		
			$data = array();
			$data[ 'current_page' ] = $this -> cName . 's';
			
			// Получить идентификатор из строки запроса
			$record_id = $this -> request -> param('id');
			
			if (!$record_id) {

				throw new HTTP_Exception_404('Новость не найдена.');
			}
			
			if (!$record = $this -> model -> get($record_id, true)) {

				throw new HTTP_Exception_404('Новость не найдена.');
			}
			
			$data[ 'item' ]   = $record;
			$data[ 'slogan' ] = $record[ 'name' ];
			$this -> setParam('pagetitle', $record[ 'title' ]);
			$this -> showPage($this -> cName . 's/new', $data);	
		}
	} 

    /* End of file News.php */
    /* Location: ./application/classes/Controller/News.php */

	





	


	