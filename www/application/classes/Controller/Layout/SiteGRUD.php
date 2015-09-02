<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Базовый контроллер 
	 *
	 * @name        Controller_Layout_SiteGRUD
	 * @category    Controller
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	abstract class Controller_Layout_SiteGRUD extends Controller_Layout_Default {
		
		/**
		 * Имя контроллера
		 * @access protected
		 * @property string
		 */
		protected $cName = '';
		
		/**
		 * Модель получения информации о странице
		 * @access protected
		 * @property object
		 */
		protected $pageModel;
		
		/**
		 * Список записей
		 */
		public function grudIndex() {
		
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
		 * Запись
		 * 
		 * @throw HTTP_Exception_404
		 */
		public function grudShow() {
		
			$data = array();
			$data[ 'current_page' ] = $this -> cName . 's';
			
			// Получить идентификатор из строки запроса
			$record_id = $this -> request -> param('id');
			
			if (!$record_id) {

				throw new HTTP_Exception_404('Запись не найдена.');
			}
			
			if (!$record = $this -> model -> get($record_id, true)) {

				throw new HTTP_Exception_404('Запись не найдена.');
			}
			
			$data[ 'item' ]   = $record;
			$data[ 'slogan' ] = $record[ 'name' ];
			$this -> setParam('pagetitle', $record[ 'title' ]);
			$this -> showPage($this -> cName . 's/show', $data);	
		}
	} 

    /* End of file SiteGRUD.php */
    /* Location: ./application/classes/Controller/Layout/SiteGRUD.php */
	
	