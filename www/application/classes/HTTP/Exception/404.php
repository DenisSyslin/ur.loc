﻿<?php defined('SYSPATH') or die('No direct script access.');

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
			
			// Делаем запись в журнал
			Kohana_Exception::log($this);
			
			// Путь до шаблона	
			$TMP_PATH = Config::getSiteParam('site_template');
			
			// Глобальная переменная
			View::set_global('TMP_PATH', $TMP_PATH);
			
			// Меню сайта
			$menu = View::factory($TMP_PATH . '/block/menu');
			$menu -> current = '';

			// Базовый шаблон
			$layout = View::factory($TMP_PATH . '/base/layout');

			// Переменные шаблона
			$layout -> menu    = $menu;
			$layout -> footer  = View::factory($TMP_PATH . '/block/footer');
			$layout -> content = View::factory($TMP_PATH . '/errors/404', array());
			$layout -> pagetitle = '404 Страница не найдена';

			// Рендерим страницу
			return Response::factory()
				-> status(404)
				-> body($layout -> render());
		}
	}

    /* End of file 404.php */
    /* Location: ./application/classes/HTTP/Exception/404.php */
	