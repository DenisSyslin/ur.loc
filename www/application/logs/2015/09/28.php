<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-28 12:55:54 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-09-28 12:55:54 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-09-28 13:25:45 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php on line 117 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 280 ] in Z:\home\ur.loc\www\system\classes\Kohana\Arr.php:280
2015-09-28 13:25:45 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Arr.php(280): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\ur.loc\\...', 280, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(117): Kohana_Arr::get(Array)
#2 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(52): Controller_Admin_Layout_ExtentionGRUD->grudEdit('\xD0\xA0\xD0\xB5\xD0\xB4\xD0\xB0\xD0\xBA\xD1\x82\xD0\xB8\xD1...')
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Arr.php:280
2015-09-28 13:35:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contentAria ~ APPPATH\views\default\admin\articles\form.php [ 31 ] in Z:\home\ur.loc\www\application\views\default\admin\articles\form.php:31
2015-09-28 13:35:45 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\admin\articles\form.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 31, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\admin\articles\edit.php(9): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(56): Kohana_View->__toString()
#9 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(125): Controller_Admin_Layout_Secure->showAdmin('articles/edit', Array)
#10 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(52): Controller_Admin_Layout_ExtentionGRUD->grudEdit('\xD0\xA0\xD0\xB5\xD0\xB4\xD0\xB0\xD0\xBA\xD1\x82\xD0\xB8\xD1...')
#11 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_edit()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\ur.loc\www\application\views\default\admin\articles\form.php:31
2015-09-28 13:38:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contentAria ~ APPPATH\views\default\admin\articles\form.php [ 31 ] in Z:\home\ur.loc\www\application\views\default\admin\articles\form.php:31
2015-09-28 13:38:10 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\admin\articles\form.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 31, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\admin\articles\edit.php(9): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(56): Kohana_View->__toString()
#9 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(125): Controller_Admin_Layout_Secure->showAdmin('articles/edit', Array)
#10 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(52): Controller_Admin_Layout_ExtentionGRUD->grudEdit('\xD0\xA0\xD0\xB5\xD0\xB4\xD0\xB0\xD0\xBA\xD1\x82\xD0\xB8\xD1...')
#11 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_edit()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\ur.loc\www\application\views\default\admin\articles\form.php:31
2015-09-28 13:53:25 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-09-28 13:53:25 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-09-28 13:53:25 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-09-28 13:53:25 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-09-28 14:16:12 --- CRITICAL: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH\classes\Kohana\Validation.php [ 65 ] in Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php:110
2015-09-28 14:16:12 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(110): Kohana_Validation->offsetSet('show_on_main_pa...', 'no')
#1 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(143): Controller_Admin_Articles->_getPostValidation()
#2 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(60): Controller_Admin_Layout_ExtentionGRUD->grudSave('\xD0\xA1\xD0\xBE\xD1\x85\xD1\x80\xD0\xB0\xD0\xBD\xD0\xB8\xD1...')
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php:110
2015-09-28 14:22:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'show_on_main_page' in 'where clause' [ SELECT `id`, `type`, `name`, `title`, `description`, `keywords`, `content`, `created`, `visible` FROM `pages` WHERE `show_on_main_page` = 'yes' AND `visible` = 'yes' ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-09-28 14:22:00 --- DEBUG: #0 Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `id`, `t...', false, Array)
#1 Z:\home\ur.loc\www\application\classes\Model\Page.php(110): Kohana_Database_Query->execute()
#2 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(60): Model_Page->getMainPagePages()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251