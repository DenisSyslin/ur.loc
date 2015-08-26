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
		}
		
		/**
		 * Список новостей
		 */
		public function action_index() {
		
			$data = array();
			$data[ 'current_page' ] = $this -> cName . 's';
		
			$this -> setParam('pagetitle', 'Список новостей');
			$this -> showPage($this -> cName . 's/list', $data);	
		}
	} 

    /* End of file News.php */
    /* Location: ./application/classes/Controller/News.php */

	





	


	