<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-15 19:37:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Config::delParam() ~ APPPATH\classes\Controller\Admin\Configs.php [ 168 ] in file:line
2015-08-15 19:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 19:45:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Config::delParam() ~ APPPATH\classes\Controller\Admin\Configs.php [ 168 ] in file:line
2015-08-15 19:45:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 19:50:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Admin_Configs::$nameFiled ~ APPPATH\classes\Controller\Admin\Configs.php [ 178 ] in Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Configs.php:178
2015-08-15 19:50:56 --- DEBUG: #0 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Configs.php(178): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\\home\\basekoh...', 178, Array)
#1 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Configs->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Configs))
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Configs.php:178
2015-08-15 20:13:18 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-08-15 20:13:18 --- DEBUG: #0 Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php(140): Kohana_ORM->save()
#3 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\basekohana.loc\www\modules\orm\classes\Kohana\ORM.php:1302
2015-08-15 20:26:30 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\Session.php:125
2015-08-15 20:26:30 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\basekohana.loc\www\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\basekohana.loc\www\application\classes\Controller\Layout\Default.php(57): Kohana_Session::instance()
#3 Z:\home\basekohana.loc\www\application\classes\Controller\Layout\Secure.php(51): Controller_Layout_Default->before()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(69): Controller_Layout_Secure->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\Session.php:125
2015-08-15 20:26:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::loaded() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 26 ] in file:line
2015-08-15 20:26:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 20:35:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2015-08-15 20:35:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 20:36:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2015-08-15 20:36:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 20:36:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2015-08-15 20:36:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 20:36:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2015-08-15 20:36:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 20:48:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admin\Users.php [ 208 ] in file:line
2015-08-15 20:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 20:49:30 --- CRITICAL: ReflectionException [ 0 ]: Class User_Model does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 407 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php:407
2015-08-15 20:49:30 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php(407): ReflectionMethod->__construct('User_Model', 'unique_username')
#1 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php(125): Kohana_Validation->check()
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php:407
2015-08-15 20:49:50 --- CRITICAL: ReflectionException [ 0 ]: Class Validate_Model does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 407 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php:407
2015-08-15 20:49:50 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php(407): ReflectionMethod->__construct('Validate_Model', 'unique_username')
#1 Z:\home\basekohana.loc\www\application\classes\Controller\Admin\Users.php(125): Kohana_Validation->check()
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\Validation.php:407
2015-08-15 20:56:48 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\Validate.php [ 31 ] in file:line
2015-08-15 20:56:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line