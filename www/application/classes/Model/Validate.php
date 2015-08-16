<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель пользовательской валидации полей
	 *
	 * @name        Model_Validate
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Validate extends Model_Database {
	
		/**
		 * Table users name
		 * @property string
		 * @access private
		 */
		private static $tableUsers = 'users';
	
		/**
		 * Проверка уникальности имени пользователя
		 *
		 * @param string $username имя пользователя
		 * @return bool
		 */
		public static function unique_username($username, $user_id = false) {
			
			$query = DB::select(array(DB::expr('COUNT(username)'), 'total'))
				-> from(self::$tableUsers)
				-> where('username', '=', $username);
				
			if (!empty($user_id)) {
				
				$query -> where('id', '!=', $user_id);
			}	

			return ! $query -> execute() -> get('total');
		}
		
		/**
		 * Проверка уникальности email-адреса пользователя
		 *
		 * @param string $email email-адрес пользователя
		 * @return bool
		 */
		public static function unique_useremail($email, $user_id = false) {
			
			$query = DB::select(array(DB::expr('COUNT(email)'), 'total'))
				-> from(self::$tableUsers)
				-> where('email', '=', $email);
				
			if (!empty($user_id)) {
				
				$query -> where('id', '!=', $user_id);
			}	

			return ! $query -> execute() -> get('total');
		}
	} 

    /* End of file Validate.php */
    /* Location: ./application/classes/Model/Validate.php */