<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-03 15:04:41 --- CRITICAL: View_Exception [ 0 ]: The requested view default/account could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-09-03 15:04:41 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('default/account')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/account', Array)
#2 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(183): Kohana_View::factory('default/account', Array)
#3 Z:\home\ur.loc\www\application\classes\Controller\Account.php(91): Controller_Layout_Default->showPage('account', Array)
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-09-03 15:24:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$fp' (T_VARIABLE) ~ APPPATH\classes\Controller\Account.php [ 366 ] in file:line
2015-09-03 15:24:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-03 15:24:40 --- CRITICAL: View_Exception [ 0 ]: The requested view default/account could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-09-03 15:24:40 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('default/account')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/account', Array)
#2 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(183): Kohana_View::factory('default/account', Array)
#3 Z:\home\ur.loc\www\application\classes\Controller\Account.php(84): Controller_Layout_Default->showPage('account', Array)
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-09-03 15:25:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: current_page ~ APPPATH\classes\Controller\Layout\Default.php [ 186 ] in Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php:186
2015-09-03 15:25:05 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(186): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 186, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Account.php(84): Controller_Layout_Default->showPage('account/account', Array)
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php:186
2015-09-03 15:26:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: current_page ~ APPPATH\classes\Controller\Layout\Default.php [ 186 ] in Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php:186
2015-09-03 15:26:59 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(186): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 186, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Account.php(219): Controller_Layout_Default->showPage('account/login', Array)
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php:186
2015-09-03 15:27:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH\views\default\account\login.php [ 43 ] in file:line
2015-09-03 15:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-03 16:19:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH\classes\Controller\Account.php [ 128 ] in file:line
2015-09-03 16:19:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-03 16:22:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\default\account\login.php [ 15 ] in Z:\home\ur.loc\www\application\views\default\account\login.php:15
2015-09-03 16:22:22 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\account\login.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 15, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\base\layout.php(62): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\ur.loc\www\application\views\default\account\login.php:15
2015-09-03 16:22:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\default\account\login.php [ 58 ] in Z:\home\ur.loc\www\application\views\default\account\login.php:58
2015-09-03 16:22:58 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\account\login.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 58, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\base\layout.php(62): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\ur.loc\www\application\views\default\account\login.php:58
2015-09-03 16:44:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-09-03 16:44:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-03 16:46:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\Kohana\Ulogin.php [ 72 ] in Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php:72
2015-09-03 16:46:06 --- DEBUG: #0 Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php(72): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 72, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Account.php(33): Kohana_Ulogin->login()
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php:72
2015-09-03 16:47:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\Kohana\Ulogin.php [ 72 ] in Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php:72
2015-09-03 16:47:53 --- DEBUG: #0 Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php(72): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 72, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Account.php(33): Kohana_Ulogin->login()
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php:72
2015-09-03 16:51:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\Kohana\Ulogin.php [ 72 ] in Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php:72
2015-09-03 16:51:22 --- DEBUG: #0 Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php(72): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 72, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Account.php(33): Kohana_Ulogin->login()
#2 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ur.loc\www\modules\ulogin\classes\Kohana\Ulogin.php:72
2015-09-03 16:51:56 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(): Unable to find the wrapper &quot;https&quot; - did you forget to enable it when you configured PHP? ~ APPPATH\classes\Controller\Account.php [ 363 ] in file:line
2015-09-03 16:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\\home\\ur.loc\\...', 363, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Account.php(363): file_get_contents('https://lh3.goo...')
#2 Z:\home\ur.loc\www\application\classes\Controller\Account.php(39): Controller_Account->_photoWrite('https://lh3.goo...')
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-09-03 16:52:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\default\account\login.php [ 15 ] in Z:\home\ur.loc\www\application\views\default\account\login.php:15
2015-09-03 16:52:58 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\account\login.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 15, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\base\layout.php(62): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\ur.loc\www\application\views\default\account\login.php:15
2015-09-03 18:08:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Account.php [ 174 ] in file:line
2015-09-03 18:08:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-03 18:08:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Account.php [ 391 ] in file:line
2015-09-03 18:08:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-03 18:10:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\classes\Controller\Account.php [ 178 ] in file:line
2015-09-03 18:10:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-03 18:11:18 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:11:18 --- DEBUG: #0 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Account.php(169): Kohana_ORM->save()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:18:25 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:18:25 --- DEBUG: #0 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Account.php(167): Kohana_ORM->save()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:18:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:18:33 --- DEBUG: #0 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Account.php(167): Kohana_ORM->save()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:20:49 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:20:49 --- DEBUG: #0 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Account.php(167): Kohana_ORM->save()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:21:07 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:21:07 --- DEBUG: #0 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Account.php(167): Kohana_ORM->save()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:36:55 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:36:55 --- DEBUG: #0 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Account.php(171): Kohana_ORM->save()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:39:01 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-09-03 18:39:01 --- DEBUG: #0 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\ur.loc\www\application\classes\Controller\Account.php(171): Kohana_ORM->save()
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php:1302