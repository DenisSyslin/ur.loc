<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-31 15:43:44 --- CRITICAL: View_Exception [ 0 ]: The requested view default/block/carusel could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-31 15:43:44 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('default/block/c...')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/block/c...', NULL)
#2 Z:\home\ur.loc\www\application\views\default\pages\main.php(3): Kohana_View::factory('default/block/c...')
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#4 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 Z:\home\ur.loc\www\application\views\default\base\layout.php(62): Kohana_View->__toString()
#7 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#8 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#9 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#13 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-31 16:05:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: slogan ~ APPPATH\views\default\pages\help.php [ 2 ] in Z:\home\ur.loc\www\application\views\default\pages\help.php:2
2015-08-31 16:05:07 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\pages\help.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 2, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\base\layout.php(62): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\ur.loc\www\application\views\default\pages\help.php:2
2015-08-31 16:09:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Article::getByType() ~ APPPATH\classes\Controller\Articles.php [ 39 ] in file:line
2015-08-31 16:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line