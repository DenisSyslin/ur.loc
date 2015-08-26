<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-25 09:30:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ APPPATH\classes\Controller\Layout\Default.php [ 67 ] in file:line
2015-08-25 09:30:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-25 09:31:53 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/base/layout could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-25 09:31:53 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('admin/base/layo...')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/base/layo...', NULL)
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('admin/base/layo...')
#3 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(74): Kohana_Controller_Template->before()
#4 Z:\home\ur.loc\www\application\classes\Controller\Layout\Secure.php(51): Controller_Layout_Default->before()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(69): Controller_Layout_Secure->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-25 19:32:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>', expecting ':' ~ APPPATH\views\default\base\layout.php [ 39 ] in file:line
2015-08-25 19:32:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-25 19:34:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Layout_Default::addStylesheet(), called in Z:\home\ur.loc\www\application\classes\Controller\Pages.php on line 46 and defined ~ APPPATH\classes\Controller\Layout\Default.php [ 118 ] in Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php:118
2015-08-25 19:34:34 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\ur.loc\\...', 118, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(46): Controller_Layout_Default->addStylesheet()
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php:118
2015-08-25 19:37:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\default\base\layout.php [ 40 ] in Z:\home\ur.loc\www\application\views\default\base\layout.php:40
2015-08-25 19:37:05 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\base\layout.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 40, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\application\views\default\base\layout.php:40
2015-08-25 19:53:57 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/articles/form could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-25 19:53:57 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('admin/articles/...')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/articles/...', Array)
#2 Z:\home\ur.loc\www\application\views\default\admin\articles\edit.php(9): Kohana_View::factory('admin/articles/...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#4 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(56): Kohana_View->__toString()
#7 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(111): Controller_Admin_Layout_Secure->showAdmin('articles/edit', Array)
#8 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(52): Controller_Admin_Layout_ExtentionGRUD->grudEdit('\xD0\xA0\xD0\xB5\xD0\xB4\xD0\xB0\xD0\xBA\xD1\x82\xD0\xB8\xD1...')
#9 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_edit()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-25 19:54:28 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/news/form could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-25 19:54:28 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('admin/news/form')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/news/form', Array)
#2 Z:\home\ur.loc\www\application\views\default\admin\news\new.php(10): Kohana_View::factory('admin/news/form', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#4 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(56): Kohana_View->__toString()
#7 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(72): Controller_Admin_Layout_Secure->showAdmin('news/new', Array)
#8 Z:\home\ur.loc\www\application\classes\Controller\Admin\News.php(44): Controller_Admin_Layout_ExtentionGRUD->grudNew('\xD0\x94\xD0\xBE\xD0\xB1\xD0\xB0\xD0\xB2\xD0\xB8\xD1\x82\xD1...')
#9 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_new()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145