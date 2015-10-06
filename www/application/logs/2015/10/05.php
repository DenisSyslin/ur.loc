<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-05 16:52:01 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in Z:\home\ur.loc\www\system\classes\Kohana\Session.php:125
2015-10-05 16:52:01 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\ur.loc\www\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(86): Kohana_Session::instance()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(69): Controller_Layout_Default->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Session.php:125
2015-10-05 16:52:02 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 16:52:02 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 16:52:51 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in Z:\home\ur.loc\www\system\classes\Kohana\Session.php:125
2015-10-05 16:52:51 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\ur.loc\www\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(86): Kohana_Session::instance()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(69): Controller_Layout_Default->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Session.php:125
2015-10-05 16:52:51 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 16:52:51 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 16:55:40 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 16:55:40 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 16:56:02 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 16:56:02 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 17:11:32 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 17:11:32 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 17:56:44 --- CRITICAL: ErrorException [ 2 ]: include_once(Z:\home\ur.loc\www\asserts/default/js_plagins/ckeditor/ckeditor.php): failed to open stream: No such file or directory ~ APPPATH\classes\MyCKEditor.php [ 35 ] in Z:\home\ur.loc\www\application\classes\MyCKEditor.php:35
2015-10-05 17:56:44 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\MyCKEditor.php(35): Kohana_Core::error_handler(2, 'include_once(Z:...', 'Z:\\home\\ur.loc\\...', 35, Array)
#1 Z:\home\ur.loc\www\application\classes\MyCKEditor.php(35): MyCKEditor::wysiwyg()
#2 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(78): MyCKEditor::wysiwyg('content', NULL)
#3 Z:\home\ur.loc\www\application\classes\Controller\Admin\News.php(44): Controller_Admin_Layout_ExtentionGRUD->grudNew('\xD0\x94\xD0\xBE\xD0\xB1\xD0\xB0\xD0\xB2\xD0\xB8\xD1\x82\xD1...')
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\application\classes\MyCKEditor.php:35
2015-10-05 18:01:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\MyCKEditor.php [ 32 ] in file:line
2015-10-05 18:01:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 18:09:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin\Layout\ExtentionGRUD.php [ 116 ] in file:line
2015-10-05 18:09:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 18:15:03 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:15:03 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:15:26 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:15:26 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:15:34 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:15:34 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:15:44 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:15:44 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:16:00 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:16:00 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:16:13 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:16:13 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:16:29 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:16:29 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:16:51 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:16:51 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-05 18:24:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contentAria ~ APPPATH\views\default\admin\articles\form.php [ 31 ] in Z:\home\ur.loc\www\application\views\default\admin\articles\form.php:31
2015-10-05 18:24:00 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\admin\articles\form.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 31, Array)
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