<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-19 09:09:19 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_Article::getList() should be compatible with Model_Layout_CRUD::getList(array $columns = Array) ~ APPPATH\classes\Model\Article.php [ 12 ] in Z:\home\ur.loc\www\application\classes\Model\Article.php:12
2015-08-19 09:09:19 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Model\Article.php(12): Kohana_Core::error_handler(2048, 'Declaration of ...', 'Z:\\home\\ur.loc\\...', 12, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\Core.php(511): require('Z:\\home\\ur.loc\\...')
#2 [internal function]: Kohana_Core::auto_load('Model_Article')
#3 Z:\home\ur.loc\www\system\classes\Kohana\Model.php(26): spl_autoload_call('Model_Article')
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(35): Kohana_Model::factory('Article')
#5 [internal function]: Controller_Admin_Articles->__construct(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\application\classes\Model\Article.php:12
2015-08-19 09:09:31 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_Article::getList() should be compatible with Model_Layout_CRUD::getList(array $columns = Array) ~ APPPATH\classes\Model\Article.php [ 12 ] in Z:\home\ur.loc\www\application\classes\Model\Article.php:12
2015-08-19 09:09:31 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Model\Article.php(12): Kohana_Core::error_handler(2048, 'Declaration of ...', 'Z:\\home\\ur.loc\\...', 12, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\Core.php(511): require('Z:\\home\\ur.loc\\...')
#2 [internal function]: Kohana_Core::auto_load('Model_Article')
#3 Z:\home\ur.loc\www\system\classes\Kohana\Model.php(26): spl_autoload_call('Model_Article')
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(35): Kohana_Model::factory('Article')
#5 [internal function]: Controller_Admin_Articles->__construct(Object(Request), Object(Response))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ur.loc\www\application\classes\Model\Article.php:12
2015-08-19 09:20:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\admin\articles\list.php [ 41 ] in Z:\home\ur.loc\www\application\views\admin\articles\list.php:41
2015-08-19 09:20:20 --- DEBUG: #0 Z:\home\ur.loc\www\application\views\admin\articles\list.php(41): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\ur.loc\\...', 41, Array)
#1 Z:\home\ur.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\ur.loc\\...')
#2 Z:\home\ur.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\ur.loc\\...', Array)
#3 Z:\home\ur.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\Secure.php(50): Kohana_View->__toString()
#5 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(62): Controller_Admin_Layout_Secure->showAdmin('articles/list', Array)
#6 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#9 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\ur.loc\www\application\views\admin\articles\list.php:41