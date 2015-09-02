<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-02 09:10:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\default\articles\list.php [ 23 ] in Z:\home\ur.loc\www\application\views\default\articles\list.php:23
2015-09-02 09:10:17 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\default\articles\list.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 23, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\views\default\base\layout.php(62): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#6 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#7 Z:\home\ur.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\ur.loc\www\application\views\default\articles\list.php:23
2015-09-02 09:17:12 --- CRITICAL: View_Exception [ 0 ]: The requested view default/articles/new could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145
2015-09-02 09:17:12 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('default/article...')
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/article...', Array)
#2 Z:\home\ur.loc\www\application\classes\Controller\Layout\Default.php(159): Kohana_View::factory('default/article...', Array)
#3 Z:\home\ur.loc\www\application\classes\Controller\Articles.php(94): Controller_Layout_Default->showPage('articles/new', Array)
#4 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Articles->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\system\classes\Kohana\View.php:145