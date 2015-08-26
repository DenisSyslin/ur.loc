<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-21 19:19:20 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `name`, `created`, `visible`, `action`, `user` FROM `articles` JOIN `users` ON (`users`.`id` = `articles`.`user`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-21 19:19:20 --- DEBUG: #0 Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 Z:\home\ur.loc\www\application\classes\Model\Layout\CRUD.php(38): Kohana_Database_Query->execute()
#2 Z:\home\ur.loc\www\application\classes\Model\Article.php(30): Model_Layout_CRUD->getList()
#3 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(44): Model_Article->getList()
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#5 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-21 19:21:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _table_name ~ APPPATH\classes\Model\Article.php [ 29 ] in Z:\home\ur.loc\www\application\classes\Model\Article.php:29
2015-08-21 19:21:31 --- DEBUG: #0 Z:\home\ur.loc\www\application\classes\Model\Article.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\ur.loc\\...', 29, Array)
#1 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(44): Model_Article->getList()
#2 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\application\classes\Model\Article.php:29
2015-08-21 19:21:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'articlesid' in 'field list' [ SELECT `articlesid`, `articlesname`, `articlescreated`, `articlesvisible`, `articlesaction`, `articlesuser` FROM `articles` JOIN `users` ON (`users`.`id` = `articles`.`user`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-21 19:21:42 --- DEBUG: #0 Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `article...', false, Array)
#1 Z:\home\ur.loc\www\application\classes\Model\Layout\CRUD.php(38): Kohana_Database_Query->execute()
#2 Z:\home\ur.loc\www\application\classes\Model\Article.php(37): Model_Layout_CRUD->getList()
#3 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(44): Model_Article->getList()
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Articles.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#5 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251