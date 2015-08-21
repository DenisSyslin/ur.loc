<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-20 09:30:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_New::getCount() ~ APPPATH\classes\Controller\Admin\Layout\ExtentionGRUD.php [ 40 ] in file:line
2015-08-20 09:30:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-20 09:35:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `name`, `type`, `created`, `visible`, `action`, `user` FROM `pages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 09:35:39 --- DEBUG: #0 Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 Z:\home\ur.loc\www\application\classes\Model\Layout\CRUD.php(37): Kohana_Database_Query->execute()
#2 Z:\home\ur.loc\www\application\classes\Model\Page.php(30): Model_Layout_CRUD->getList()
#3 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(44): Model_Page->getList()
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Pages.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#5 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Pages->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251
<<<<<<< HEAD
2015-08-20 19:37:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF), expecting ',' or ';' ~ APPPATH\views\admin\pages\form.php [ 13 ] in file:line
2015-08-20 19:37:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-20 19:38:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\views\admin\pages\form.php [ 14 ] in Z:\home\ur.loc\www\application\views\admin\pages\form.php:14
2015-08-20 19:38:45 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\admin\pages\form.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 14, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\admin\pages\new.php(10): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(50): Kohana_View->__toString()
#9 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(72): Controller_Admin_Layout_Secure->showAdmin('pages/new', Array)
#10 Z:\home\ur.loc\www\application\classes\Controller\Admin\Pages.php(44): Controller_Admin_Layout_ExtentionGRUD->grudNew('\xD0\x94\xD0\xBE\xD0\xB1\xD0\xB0\xD0\xB2\xD0\xB8\xD1\x82\xD1...')
#11 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Pages->action_new()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#14 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\ur.loc\www\application\views\admin\pages\form.php:14
=======
2015-08-20 17:34:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\base\layout.php [ 45 ] in Z:\home\ur.loc\www\application\views\base\layout.php:45
2015-08-20 17:34:39 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\base\layout.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 45, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\application\views\base\layout.php:45
2015-08-20 17:34:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\base\layout.php [ 45 ] in Z:\home\ur.loc\www\application\views\base\layout.php:45
2015-08-20 17:34:57 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\base\layout.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 45, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\application\views\base\layout.php:45
2015-08-20 17:35:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\base\layout.php [ 45 ] in Z:\home\ur.loc\www\application\views\base\layout.php:45
2015-08-20 17:35:59 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\base\layout.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 45, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\application\views\base\layout.php:45
2015-08-20 17:49:19 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/new could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-20 17:49:19 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('pages/new')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/new', Array)
#2 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(98): Kohana_View::factory('pages/new', Array)
#3 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(46): Controller_Layout_Default->showPage('pages/new', Array)
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-20 18:08:28 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\block\menu.php [ 4 ] in file:line
2015-08-20 18:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-20 18:21:55 --- CRITICAL: View_Exception [ 0 ]: The requested view articles/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-20 18:21:55 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('articles/main')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('articles/main', Array)
#2 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(98): Kohana_View::factory('articles/main', Array)
#3 Z:\home\ur.loc\www\application\classes\Controller\Articles.php(40): Controller_Layout_Default->showPage('articles/main', Array)
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Articles->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-20 18:25:58 --- CRITICAL: View_Exception [ 0 ]: The requested view block/footer.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-08-20 18:25:58 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('block/footer.ph...')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('block/footer.ph...', NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(103): Kohana_View::factory('block/footer.ph...')
#3 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(71): Controller_Layout_Default->showPage('pages/about', Array)
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_about()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
>>>>>>> c7c17a31efd5ff3d5add0e8e420310aad9a93e5f
