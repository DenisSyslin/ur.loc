<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-09 13:07:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\classes\Controller\Pages.php [ 111 ] in Z:\home\ur.loc\www\system\classes\Kohana\Core.php:1031
2015-09-09 13:07:32 --- CRITICAL: View_Exception [ 0 ]: The requested view error could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-09-09 13:07:32 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('error')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('error', NULL)
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('error')
#3 Z:\home\ur.loc\www\application\classes\Controller\Error\Handler.php(9): Kohana_Controller_Template->before()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(69): Controller_Error_Handler->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Error_Handler))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\application\classes\Kohana\Exception.php(30): Kohana_Request->execute()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Core.php(1031): Kohana_Exception::handler(Object(ErrorException))
#11 [internal function]: Kohana_Core::shutdown_handler()
#12 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-09-09 13:13:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\classes\Controller\Pages.php [ 111 ] in Z:\home\ur.loc\www\system\classes\Kohana\Core.php:1031
2015-09-09 13:13:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: TMP_PATH ~ APPPATH\views\default\base\layout.php [ 19 ] in Z:\home\ur.loc\www\application\views\default\base\layout.php:19
2015-09-09 13:13:36 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\base\layout.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 19, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Error_Handler))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\application\classes\Kohana\Exception.php(30): Kohana_Request->execute()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Core.php(1031): Kohana_Exception::handler(Object(ErrorException))
#11 [internal function]: Kohana_Core::shutdown_handler()
#12 {main} in Z:\home\ur.loc\www\application\views\default\base\layout.php:19