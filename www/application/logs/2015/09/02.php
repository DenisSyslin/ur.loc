<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-02 14:20:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\default\admin\pages\list.php [ 43 ] in Z:\home\ur.loc\www\application\views\default\admin\pages\list.php:43
2015-09-02 14:20:27 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\admin\pages\list.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 43, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(56): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(63): Controller_Admin_Layout_Secure->showAdmin('pages/list', Array)
#6 Z:\home\ur.loc\www\application\classes\Controller\Admin\Pages.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#7 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Pages->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\ur.loc\www\application\views\default\admin\pages\list.php:43
2015-09-02 14:20:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\default\admin\pages\list.php [ 43 ] in Z:\home\ur.loc\www\application\views\default\admin\pages\list.php:43
2015-09-02 14:20:43 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\admin\pages\list.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 43, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(56): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(63): Controller_Admin_Layout_Secure->showAdmin('pages/list', Array)
#6 Z:\home\ur.loc\www\application\classes\Controller\Admin\Pages.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#7 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Pages->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\ur.loc\www\application\views\default\admin\pages\list.php:43
2015-09-02 14:27:19 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'title' ~ APPPATH\views\default\pages\main.php [ 8 ] in Z:\home\ur.loc\www\application\views\default\pages\main.php:8
2015-09-02 14:27:19 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\pages\main.php(8): Kohana_Core::error_handler(2, 'Illegal string ...', 'Z:\\home\\ur.loc\\...', 8, Array)
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
#14 {main} in Z:\home\ur.loc\www\application\views\default\pages\main.php:8
2015-09-02 14:32:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\Layout\SiteGRUD.php [ 92 ] in Z:\home\ur.loc\www\application\classes\Controller\Layout\SiteGRUD.php:92
2015-09-02 14:32:47 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Controller\Layout\SiteGRUD.php(92): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 92, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(145): Controller_Layout_SiteGRUD->grudShow()
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ur.loc\www\application\classes\Controller\Layout\SiteGRUD.php:92
2015-09-02 15:06:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '':developer'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\views\default\block\footer.php [ 7 ] in file:line
2015-09-02 15:06:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-02 16:50:25 --- CRITICAL: ErrorException [ 2 ]: trim() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Pages.php [ 157 ] in file:line
2015-09-02 16:50:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'trim() expects ...', 'Z:\\home\\ur.loc\\...', 157, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(157): trim(Array)
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-09-02 16:51:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: query ~ APPPATH\classes\Controller\Pages.php [ 157 ] in Z:\home\ur.loc\www\application\classes\Controller\Pages.php:157
2015-09-02 16:51:00 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(157): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 157, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\ur.loc\www\application\classes\Controller\Pages.php:157
2015-09-02 16:51:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: query ~ APPPATH\classes\Controller\Pages.php [ 157 ] in Z:\home\ur.loc\www\application\classes\Controller\Pages.php:157
2015-09-02 16:51:35 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Controller\Pages.php(157): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 157, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\ur.loc\www\application\classes\Controller\Pages.php:157
2015-09-02 18:02:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DB::quote_column() ~ APPPATH\classes\Controller\Pages.php [ 160 ] in file:line
2015-09-02 18:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-02 18:02:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DB::escape() ~ APPPATH\classes\Controller\Pages.php [ 160 ] in file:line
2015-09-02 18:02:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line