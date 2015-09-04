<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы со статьями
	 *
	 * @name        Controller_Articles
	 * @category    classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Articles extends Controller_Layout_SiteGRUD {
	 
		/**
		 * Имя контроллера
		 * @access protected
		 * @property string
		 */
		protected $cName = 'article';

		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
			$this -> pageModel = Model::factory('Page');
		}
		
		/**
		 * Список статей
		 */
		public function action_index() {
		
			$this -> grudIndex();	
		}
		
		/**
		 * Статья
		 */
		public function action_show() {
		
			$this -> grudShow();
		}
	} 

    /* End of file Articles.php */
    /* Location: ./application/classes/Controller/Articles.php */