<?php defined('SYSPATH') OR die('No direct script access.');

	/**
	 * Расширение класса конфигурации, для единовременного получения настроек из БД  
	 * сохранения их, и дальнейшее использование без обращения к БД  
	 *
	 *
	 * @name        Config
	 * @category    System
	 * @subcategory Classes
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */

	class Config extends Kohana_Config {
	
		/**
		 * Контейнер хранения настроек из БД
		 * @property array
		 * @access private 
		 */
		private static $siteSettings = null;
	
		/**
		 * Записать настройки
		 * 
		 * @param array $siteSettings
		 */
		public static function setSiteSettings($siteSettings) {
		
			self::$siteSettings = $siteSettings;
		}

		/**
		 * Вернуть настройки
		 * 
		 * @return array
		 */
		public static function getSiteSettings() {
		
			return self::$siteSettings;
		}

		/**
		 * Установить необходимый параметр
		 * 
		 * @param int $key
		 * @param mixed $value
		 */
		public static function setSiteParam($key, $value) {
			
			self::$siteSettings[ $key ] = $value;
		}

		/**
		 * Вернуть необходимый параметр
		 * 
		 * @param int $key
		 * @return mixed
		 */
		public static function getSiteParam($key) {
			
			if (isset(self::$siteSettings[ $key ])) {
				
				return self::$siteSettings[ $key ];
			}
			
			return false;
		}
	}

    /* End of file Config.php */
    /* Location: ./system/classes/Config.php */

	
	