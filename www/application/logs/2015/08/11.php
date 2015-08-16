<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-11 17:51:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Admin_Settings::$ormName ~ APPPATH\classes\Controller\Admin\Layout\Secure.php [ 73 ] in Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php:73
2015-08-11 17:51:01 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\\home\\kohana\\...', 73, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin\Settings.php(19): Controller_Admin_Layout_Secure->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD0\xBD...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Settings->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\Admin\Layout\Secure.php:73