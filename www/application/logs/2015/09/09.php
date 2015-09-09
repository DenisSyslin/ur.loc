<?php defined('SYSPATH') OR die('No direct script access.'); ?>


2015-09-09 16:54:20 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL aaa was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php:79
2015-09-09 16:54:20 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php:79
2015-09-09 16:54:46 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL aaa was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php:79
2015-09-09 16:54:46 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php:79
2015-09-09 16:57:07 --- CRITICAL: HTTP_Exception_503 [ 503 ]: Сайт не работает ~ APPPATH\classes\Controller\Pages.php [ 50 ] in Z:\home\ur.loc\www\system\classes\Kohana\Controller.php:84
2015-09-09 16:57:07 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#3 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Controller.php:84