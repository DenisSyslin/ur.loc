<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-13 17:15:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Admin_Settings::$ormName ~ APPPATH\classes\Controller\Admin\Layout\Secure.php [ 73 ] in Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php:73
2015-08-13 17:15:49 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\\home\\kohana\\...', 73, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Settings.php(19): Controller_Admin_Layout_Secure->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD0\xBD...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Settings->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php:73
2015-08-13 17:19:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_setting' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-08-13 17:19:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 17:28:48 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/configs/list could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-08-13 17:28:48 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('admin/configs/l...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/configs/l...', Array)
#2 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(40): Kohana_View::factory('admin/configs/l...', Array)
#3 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(91): Controller_Admin_Layout_Secure->showAdmin('configs/list', Array)
#4 Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php(26): Controller_Admin_Layout_Secure->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD0\xBD...')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Configs->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Configs))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-08-13 17:29:25 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Config class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-13 17:29:25 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 Z:\home\kohana\www\application\views\admin\configs\list.php(40): Kohana_ORM->__get('name')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana\\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana\\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(42): Kohana_View->__toString()
#6 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(91): Controller_Admin_Layout_Secure->showAdmin('configs/list', Array)
#7 Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php(26): Controller_Admin_Layout_Secure->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD0\xBD...')
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Configs->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Configs))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-13 17:31:11 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Config class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-13 17:31:11 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 Z:\home\kohana\www\application\views\admin\configs\list.php(40): Kohana_ORM->__get('name')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana\\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana\\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(42): Kohana_View->__toString()
#6 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(91): Controller_Admin_Layout_Secure->showAdmin('configs/list', Array)
#7 Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php(26): Controller_Admin_Layout_Secure->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD0\xBD...')
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Configs->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Configs))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-13 18:05:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Model\Config.php [ 46 ] in file:line
2015-08-13 18:05:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 18:06:05 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 5 bytes ~ APPPATH\classes\Model\Config.php [ 46 ] in file:line
2015-08-13 18:06:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 46, Array)
#1 [internal function]: unserialize('phone')
#2 Z:\home\kohana\www\application\classes\Model\Config.php(46): array_map('unserialize', Array)
#3 Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php(60): Model_Config->getParam('2')
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Configs->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Configs))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-08-13 18:06:17 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 14 bytes ~ APPPATH\classes\Model\Config.php [ 46 ] in file:line
2015-08-13 18:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 46, Array)
#1 [internal function]: unserialize('\xD0\xA2\xD0\xB5\xD0\xBB\xD0\xB5\xD1\x84\xD0\xBE\xD0\xBD')
#2 Z:\home\kohana\www\application\classes\Model\Config.php(46): array_map('unserialize', Array)
#3 Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php(60): Model_Config->getParam('2')
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Configs->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Configs))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-08-13 18:12:08 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Model\Config.php [ 48 ] in Z:\home\kohana\www\application\classes\Model\Config.php:48
2015-08-13 18:12:08 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\Config.php(48): Kohana_Core::error_handler(2048, 'Only variables ...', 'Z:\\home\\kohana\\...', 48, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php(60): Model_Config->getParam('2')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Configs->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Configs))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\Config.php:48
2015-08-13 18:14:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2015-08-13 18:14:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 18:15:42 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php on line 30 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in Z:\home\kohana\www\system\classes\Kohana\Controller.php:43
2015-08-13 18:15:42 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\\home\\kohana\\...', 43, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php(30): Kohana_Controller->__construct(Object(Request))
#2 [internal function]: Controller_Admin_Configs->__construct(Object(Request), Object(Response))
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\system\classes\Kohana\Controller.php:43
2015-08-13 18:25:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Config::reset() ~ APPPATH\classes\Controller\Admin\Layout\Secure.php [ 73 ] in file:line
2015-08-13 18:25:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 18:31:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\configs\list.php [ 36 ] in file:line
2015-08-13 18:31:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 18:31:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\configs\list.php [ 36 ] in file:line
2015-08-13 18:31:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 18:32:22 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\configs\list.php [ 44 ] in Z:\home\kohana\www\application\views\admin\configs\list.php:44
2015-08-13 18:32:22 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\configs\list.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\\home\\kohana\\...', 44, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana\\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana\\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(42): Kohana_View->__toString()
#5 Z:\home\kohana\www\application\classes\Controller\Admin\Configs.php(59): Controller_Admin_Layout_Secure->showAdmin('configs/list', Array)
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Configs->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Configs))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\kohana\www\application\views\admin\configs\list.php:44
2015-08-13 18:33:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\Model\Config.php [ 47 ] in file:line
2015-08-13 18:33:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 18:34:20 --- CRITICAL: ErrorException [ 1 ]: An iterator cannot be used with foreach by reference ~ APPPATH\classes\Model\Config.php [ 48 ] in file:line
2015-08-13 18:34:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line