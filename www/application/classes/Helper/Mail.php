<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Класс хелпер, используется для отправки почты
	 *
	 * @name        Helper_Mail
	 * @category    Classes
	 * @subcategory Helper
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Helper_Mail {

		/**
		 * Отправка письма 
		 *
		 * @param string $to получатель или получали в виде массива
		 * @param string $subject тема
		 * @param string $message сообщение
		 * @param string $from от кого
		 *
		 * @return string
		 */
		public static function mailSend($to, $subject, $message, $from) {
		
			if (is_array($to)) {
			
				foreach ($to as $email) {
				
					mailSend($email, $subject, $message, $from);
				}		

				return;	
			}

			$to = "<{$to}>" ; 

			$content = ' 
				<html> 
					<head> 
						<title>%s</title> 
					</head> 
					<body> 
						<div>%s</div>
					</body> 
				</html>'; 
			
			$HTML = sprintf($content, $subject, $message); 

			$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
			$headers .= "From: <{$from}>\r\n"; 
			$headers .= "Reply-To: <{$from}>\r\n"; 

			return mail($to, $subject, $HTML, $headers); 
		}
	}
