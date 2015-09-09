<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Класс ошибки 404
	 *
	 * @name        HTTP_Exception_404
	 * @category    classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
		
		/**
		 * Генирация ответа на ошибку 404
		 *
		 * @return Response
		 */
		public function get_response() {
			
			$view = View::factory(Config::getSiteParam('site_template') . '/errors/404');
			
			// Remembering that `$this` is an instance of HTTP_Exception_404
			$view -> message = $this -> getMessage();
			
			$response = Response::factory()
				-> status(404)
				-> body($view -> render());
				
			return $response;
		}
	}

    /* End of file 404.php */
    /* Location: ./application/classes/HTTP/Exception/404.php */
	