<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер обработки ощибок
	 *
	 * @name        Kohana_Exception
	 * @category    classes
	 * @subcategory Kohana
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Kohana_Exception extends Kohana_Kohana_Exception {

		/**
		 * Обработчик ошибок
		 */
		public static function handler(Exception $e) {

			if (Kohana::DEVELOPMENT === Kohana::$environment) {

				parent::handler($e);
			}
			else {

				try {

					// Пишем в журнал
					Kohana_Exception::log($e);
	 
					$attributes = array (
						'action'  => 500,
						'message' => rawurlencode($e -> getMessage())
					);
	 
					if ($e instanceof HTTP_Exception) {

						$attributes[ 'action' ] = $e -> getCode();
					}
	 
					// Error sub-request.
					echo Request::factory(Route::get('error') -> uri($attributes))
					 -> execute()
					 -> send_headers()
					 -> body();
				}
				catch (Exception $e) {

					// Clean the output buffer if one exists
					ob_get_level() and ob_clean();
	 
					// Display the exception text
					echo parent::text($e);
	 
					// Exit with an error status
					exit(1);
				}
			}
		}
	}
	
    /* End of file Exception.php */
    /* Location: ./application/classes/Kohana/Exception.php */