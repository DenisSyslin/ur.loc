<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер работы с новостями
	 *
	 * @name        Controller_News
	 * @category    classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_News extends Controller_Layout_SiteGRUD {
	 
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
			$this -> pageModel = Model::factory('Page');
		}
		
		/**
		 * Список новостей
		 */
		public function action_index() {
		
			$this -> grudIndex();
		}
		
		/**
		 * Новость
		 */
		public function action_show() {
		
			$this -> grudShow();
		}
	} 

    /* End of file News.php */
    /* Location: ./application/classes/Controller/News.php */

	





	


	