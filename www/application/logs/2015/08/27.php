<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-27 09:32:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: slogan ~ APPPATH\views\default\pages\about.php [ 3 ] in Z:\home\ur.loc\www\application\views\default\pages\about.php:3
2015-08-27 09:32:00 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\pages\about.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 3, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\base\layout.php(57): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\ur.loc\www\application\views\default\pages\about.php:3
2015-08-27 09:33:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: slogan ~ APPPATH\views\default\block\header.php [ 2 ] in Z:\home\ur.loc\www\application\views\default\block\header.php:2
2015-08-27 09:33:34 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\block\header.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 2, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\pages\about.php(3): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 Z:\home\ur.loc\www\application\views\default\base\layout.php(57): Kohana_View->__toString()
#9 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#10 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#11 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#15 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\ur.loc\www\application\views\default\block\header.php:2
2015-08-27 09:34:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: slogan ~ APPPATH\views\default\block\header.php [ 2 ] in Z:\home\ur.loc\www\application\views\default\block\header.php:2
2015-08-27 09:34:50 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\block\header.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 2, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\pages\about.php(3): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 Z:\home\ur.loc\www\application\views\default\base\layout.php(57): Kohana_View->__toString()
#9 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#10 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#11 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#15 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\ur.loc\www\application\views\default\block\header.php:2
2015-08-27 19:47:26 --- CRITICAL: ErrorException [ 2 ]: array_map() expects parameter 1 to be a valid callback, function 'striptags' not found or invalid function name ~ APPPATH\classes\Controller\Pages.php [ 102 ] in file:line
2015-08-27 19:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map() exp...', 'Z:\\home\\ur.loc\\...', 102, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(102): array_map('striptags', Array)
#2 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(78): Controller_Pages->_getContactValidation()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line