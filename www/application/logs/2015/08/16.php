<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-16 09:55:26 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_Valid::matches() ~ SYSPATH\classes\Kohana\Valid.php [ 546 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\Valid.php:546
2015-08-16 09:55:26 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\Valid.php(546): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\basekoh...', 546, Array)
#1 [internal function]: Kohana_Valid::matches('password', 'password_confir...')
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php(125): Kohana_Validation->check()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\Valid.php:546
2015-08-16 09:55:39 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_Valid::matches() ~ SYSPATH\classes\Kohana\Valid.php [ 546 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\Valid.php:546
2015-08-16 09:55:39 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\Valid.php(546): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\basekoh...', 546, Array)
#1 [internal function]: Kohana_Valid::matches(Object(Validation), 'password')
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php(125): Kohana_Validation->check()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\Valid.php:546
2015-08-16 09:58:29 --- CRITICAL: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database.php:461
2015-08-16 09:58:29 --- DEBUG: #0 Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\\home\\basekoh...', 461, Array)
#1 Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(Validation))
#2 Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\basekohana.loc\www\application\classes\Model\Validate.php(49): Kohana_Database_Query->execute()
#5 [internal function]: Model_Validate::unique_useremail(Object(Validation), '12')
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#7 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php(125): Kohana_Validation->check()
#8 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_save()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database.php:461
2015-08-16 10:02:32 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, none given, called in Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php on line 207 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 19 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php:19
2015-08-16 10:02:32 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\\home\\basekoh...', 19, Array)
#1 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php(207): Kohana_Validation::factory()
#2 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php(122): Controller_Admin_Users->_getPostValidation()
#3 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php:19
2015-08-16 10:07:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Model\Validate.php [ 33 ] in file:line
2015-08-16 10:07:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 12:13:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Account.php [ 9 ] in file:line
2015-08-16 12:13:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 12:16:58 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-16 12:16:58 --- DEBUG: #0 Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 Z:\home\basekohana.loc\www\application\classes\Controller\Account.php(62): Kohana_ORM->__get('photo')
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-16 12:25:25 --- CRITICAL: Kohana_Exception [ 0 ]: The roles_users property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-16 12:25:25 --- DEBUG: #0 Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('roles_users')
#1 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Auth.php(51): Kohana_ORM->__get('roles_users')
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-16 12:33:56 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-16 12:33:56 --- DEBUG: #0 Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Auth.php(56): Kohana_ORM->__get('role')
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php:603
2015-08-16 13:07:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.ulogins' doesn't exist [ SELECT `identity` FROM `ulogins` WHERE `user_id` = '2' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 13:07:33 --- DEBUG: #0 Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `identit...', false, Array)
#1 Z:\home\basekohana.loc\www\application\classes\Controller\Account.php(75): Kohana_Database_Query->execute()
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\basekohana.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 13:31:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Account::setParam() ~ APPPATH\classes\Controller\Account.php [ 216 ] in file:line
2015-08-16 13:31:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 13:34:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Account::setParam() ~ APPPATH\classes\Controller\Account.php [ 216 ] in file:line
2015-08-16 13:34:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 13:40:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\block\menu.php [ 59 ] in Z:\home\basekohana.loc\www\application\views\admin\block\menu.php:59
2015-08-16 13:40:22 --- DEBUG: #0 Z:\home\basekohana.loc\www\application\views\admin\block\menu.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\basekoh...', 59, Array)
#1 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\basekoh...')
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\basekoh...', Array)
#3 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\basekohana.loc\www\application\classes\Controller\Layout\Default.php(83): Kohana_View->__toString()
#5 Z:\home\basekohana.loc\www\application\classes\Controller\Account.php(218): Controller_Layout_Default->showPage('login', Array)
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#9 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\basekohana.loc\www\application\views\admin\block\menu.php:59
2015-08-16 13:42:11 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception ~ APPPATH\classes\Controller\Layout\Default.php [ 0 ] in file:line
2015-08-16 13:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 13:47:32 --- CRITICAL: View_Exception [ 0 ]: The requested view account/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\View.php:145
2015-08-16 13:47:32 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('account/login')
#1 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('account/login', Array)
#2 Z:\home\basekohana.loc\www\application\classes\Controller\Layout\Default.php(79): Kohana_View::factory('account/login', Array)
#3 Z:\home\basekohana.loc\www\application\classes\Controller\Account.php(221): Controller_Layout_Default->showPage('account/login', Array)
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\View.php:145
2015-08-16 13:57:54 --- CRITICAL: View_Exception [ 0 ]: The requested view forgot could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\View.php:145
2015-08-16 13:57:54 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('forgot')
#1 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('forgot', Array)
#2 Z:\home\basekohana.loc\www\application\classes\Controller\Account.php(343): Kohana_View::factory('forgot', Array)
#3 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Account->action_forgot()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\View.php:145