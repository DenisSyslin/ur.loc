<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-14 11:31:23 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/base/layout could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\basekohana.loc\www\system\classes\Kohana\View.php:145
2015-08-14 11:31:23 --- DEBUG: #0 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('admin/base/layo...')
#1 Z:\home\basekohana.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/base/layo...', NULL)
#2 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('admin/base/layo...')
#3 Z:\home\basekohana.loc\www\application\classes\Controller\Layout\Default.php(45): Kohana_Controller_Template->before()
#4 Z:\home\basekohana.loc\www\application\classes\Controller\Layout\Secure.php(51): Controller_Layout_Default->before()
#5 Z:\home\basekohana.loc\www\system\classes\Kohana\Controller.php(69): Controller_Layout_Secure->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#8 Z:\home\basekohana.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\basekohana.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\basekohana.loc\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\basekohana.loc\www\system\classes\Kohana\View.php:145
