<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-06 14:10:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contentAria ~ APPPATH\views\default\admin\articles\form.php [ 31 ] in Z:\home\ur.loc\www\application\views\default\admin\articles\form.php:31
2015-10-06 14:10:12 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\admin\articles\form.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 31, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\admin\articles\new.php(10): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(56): Kohana_View->__toString()
#9 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(81): Controller_Admin_Layout_Secure->showAdmin('articles/new', Array)
#10 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(44): Controller_Admin_Layout_ExtentionGRUD->grudNew('\xD0\x94\xD0\xBE\xD0\xB1\xD0\xB0\xD0\xB2\xD0\xB8\xD1\x82\xD1...')
#11 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_new()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\ur.loc\www\application\views\default\admin\articles\form.php:31
2015-10-06 14:24:20 --- CRITICAL: ErrorException [ 1 ]: Class 'MyCKEditor' not found ~ APPPATH\classes\Controller\Admin\Layout\ExtentionGRUD.php [ 116 ] in file:line
2015-10-06 14:24:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-06 14:49:26 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asserts/default/js_plagins/ckeditor/ckeditor_config.js ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-06 14:49:26 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-06 14:49:45 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asserts/default/js_plagins/ckeditor/ckeditor_config.js ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-06 14:49:45 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986