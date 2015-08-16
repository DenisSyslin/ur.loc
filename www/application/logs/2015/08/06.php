<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-06 12:12:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Admin\Test.php [ 10 ] in Z:\home\kohana\www\application\classes\Controller\Admin\Test.php:10
2015-08-06 12:12:20 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Admin\Test.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana\\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Test))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Admin\Test.php:10
2015-08-06 12:12:48 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, none given, called in Z:\home\kohana\www\application\classes\Controller\Admin\Test.php on line 10 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 19 ] in Z:\home\kohana\www\system\classes\Kohana\Validation.php:19
2015-08-06 12:12:48 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\\home\\kohana\\...', 19, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Test.php(10): Kohana_Validation::factory()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Test))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Validation.php:19
2015-08-06 12:54:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH\views\admin\users\form.php [ 11 ] in file:line
2015-08-06 12:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 13:32:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\classes\Controller\Admin\Users.php [ 43 ] in Z:\home\kohana\www\application\classes\Controller\Admin\Users.php:43
2015-08-06 13:32:47 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Admin\Users.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana\\...', 43, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Users.php(22): Controller_Admin_Users->_getItems()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\Admin\Users.php:43
2015-08-06 13:43:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\classes\Controller\Admin\Tags.php [ 27 ] in Z:\home\kohana\www\application\classes\Controller\Admin\Tags.php:27
2015-08-06 13:43:31 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Admin\Tags.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana\\...', 27, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(68): Controller_Admin_Tags->_getItems()
#2 Z:\home\kohana\www\application\classes\Controller\Admin\Tags.php(17): Controller_Admin_Layout_Secure->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x82...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Tags->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tags))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\application\classes\Controller\Admin\Tags.php:27
2015-08-06 13:55:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Admin_Tags::$orm ~ APPPATH\classes\Controller\Admin\Layout\Secure.php [ 94 ] in Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php:94
2015-08-06 13:55:44 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\\home\\kohana\\...', 94, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Tags.php(25): Controller_Admin_Layout_Secure->grudNew('\xD0\x94\xD0\xBE\xD0\xB1\xD0\xB0\xD0\xB2\xD0\xB8\xD1\x82\xD1...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Tags->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tags))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php:94
2015-08-06 14:36:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\Admin\Layout\Secure.php [ 207 ] in Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php:207
2015-08-06 14:36:48 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(207): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana\\...', 207, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Tags.php(63): Controller_Admin_Layout_Secure->grudDelete()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Tags->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tags))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php:207
2015-08-06 14:37:37 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1302
2015-08-06 14:37:37 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\kohana\www\application\classes\Controller\Admin\Users.php(134): Kohana_ORM->save()
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1302
2015-08-06 15:51:41 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 15 bytes ~ MODPATH\database\classes\Kohana\Config\Database\Reader.php [ 64 ] in file:line
2015-08-06 15:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 64, Array)
#1 [internal function]: unserialize('Kohana 3.3 Blog')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Reader.php(64): array_map('unserialize', Array)
#3 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Writer.php(35): Kohana_Config_Database_Reader->load('site')
#4 Z:\home\kohana\www\system\classes\Kohana\Config.php(130): Kohana_Config_Database_Writer->load('site')
#5 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Config->load('site')
#6 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#7 {main} in file:line
2015-08-06 15:52:52 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 15 bytes ~ MODPATH\database\classes\Kohana\Config\Database\Reader.php [ 64 ] in file:line
2015-08-06 15:52:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 64, Array)
#1 [internal function]: unserialize('Kohana 3.3 Blog')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Reader.php(64): array_map('unserialize', Array)
#3 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Writer.php(35): Kohana_Config_Database_Reader->load('site')
#4 Z:\home\kohana\www\system\classes\Kohana\Config.php(130): Kohana_Config_Database_Writer->load('site')
#5 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Config->load('site')
#6 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#7 {main} in file:line
2015-08-06 15:53:36 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 15 bytes ~ MODPATH\database\classes\Kohana\Config\Database\Reader.php [ 64 ] in file:line
2015-08-06 15:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 64, Array)
#1 [internal function]: unserialize('Kohana 3.3 Blog')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Reader.php(64): array_map('unserialize', Array)
#3 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Writer.php(35): Kohana_Config_Database_Reader->load('site')
#4 Z:\home\kohana\www\system\classes\Kohana\Config.php(130): Kohana_Config_Database_Writer->load('site')
#5 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Config->load('site')
#6 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#7 {main} in file:line
2015-08-06 15:53:46 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 15 bytes ~ MODPATH\database\classes\Kohana\Config\Database\Reader.php [ 64 ] in file:line
2015-08-06 15:53:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 64, Array)
#1 [internal function]: unserialize('Kohana 3.3 Blog')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Reader.php(64): array_map('unserialize', Array)
#3 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Writer.php(35): Kohana_Config_Database_Reader->load('site')
#4 Z:\home\kohana\www\system\classes\Kohana\Config.php(130): Kohana_Config_Database_Writer->load('site')
#5 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Config->load('site')
#6 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#7 {main} in file:line
2015-08-06 16:00:45 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 15 bytes ~ MODPATH\database\classes\Kohana\Config\Database\Reader.php [ 64 ] in file:line
2015-08-06 16:00:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 64, Array)
#1 [internal function]: unserialize('Kohana 3.3 Blog')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Reader.php(64): array_map('unserialize', Array)
#3 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Writer.php(35): Kohana_Config_Database_Reader->load('site')
#4 Z:\home\kohana\www\system\classes\Kohana\Config.php(130): Kohana_Config_Database_Writer->load('site')
#5 Z:\home\kohana\www\application\classes\Controller\Admin\Test.php(19): Kohana_Config->load('site.name')
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Test->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Test))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2015-08-06 16:21:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_settings' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-08-06 16:21:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 16:22:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_config' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-08-06 16:22:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 16:22:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_config' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-08-06 16:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 16:24:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_config' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-08-06 16:24:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 16:30:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_config' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-08-06 16:30:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 16:34:42 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.config' doesn't exist [ SELECT `config_key`, `config_value` FROM `config` WHERE `group_name` = 'site' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-06 16:34:42 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `config_...', false, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Reader.php(62): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Writer.php(35): Kohana_Config_Database_Reader->load('site')
#3 Z:\home\kohana\www\system\classes\Kohana\Config.php(130): Kohana_Config_Database_Writer->load('site')
#4 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Config->load('site')
#5 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#6 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-06 16:35:10 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 15 bytes ~ MODPATH\database\classes\Kohana\Config\Database\Reader.php [ 64 ] in file:line
2015-08-06 16:35:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 64, Array)
#1 [internal function]: unserialize('Kohana 3.3 Blog')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Reader.php(64): array_map('unserialize', Array)
#3 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Writer.php(35): Kohana_Config_Database_Reader->load('site')
#4 Z:\home\kohana\www\system\classes\Kohana\Config.php(130): Kohana_Config_Database_Writer->load('site')
#5 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Config->load('site')
#6 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#7 {main} in file:line
2015-08-06 16:38:10 --- CRITICAL: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 15 bytes ~ MODPATH\database\classes\Kohana\Config\Database\Reader.php [ 64 ] in file:line
2015-08-06 16:38:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', 'Z:\\home\\kohana\\...', 64, Array)
#1 [internal function]: unserialize('Kohana 3.3 Blog')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Reader.php(64): array_map('unserialize', Array)
#3 Z:\home\kohana\www\modules\database\classes\Kohana\Config\Database\Writer.php(35): Kohana_Config_Database_Reader->load('site')
#4 Z:\home\kohana\www\system\classes\Kohana\Config.php(130): Kohana_Config_Database_Writer->load('site')
#5 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Config->load('site')
#6 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#7 {main} in file:line
2015-08-06 16:40:22 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Config::setSiteSettings() should not be called statically ~ APPPATH\bootstrap.php [ 151 ] in Z:\home\kohana\www\application\bootstrap.php:151
2015-08-06 16:40:22 --- DEBUG: #0 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\\home\\kohana\\...', 151, Array)
#1 Z:\home\kohana\www\application\bootstrap.php(151): Config::setSiteSettings()
#2 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#3 {main} in Z:\home\kohana\www\application\bootstrap.php:151
2015-08-06 16:41:02 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Config::$this ~ SYSPATH\classes\Config.php [ 14 ] in file:line
2015-08-06 16:41:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 16:41:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: as_array ~ APPPATH\bootstrap.php [ 151 ] in Z:\home\kohana\www\application\bootstrap.php:151
2015-08-06 16:41:45 --- DEBUG: #0 Z:\home\kohana\www\application\bootstrap.php(151): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\kohana\\...', 151, Array)
#1 Z:\home\kohana\www\index.php(102): require('Z:\\home\\kohana\\...')
#2 {main} in Z:\home\kohana\www\application\bootstrap.php:151