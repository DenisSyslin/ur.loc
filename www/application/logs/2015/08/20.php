<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-20 09:30:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_New::getCount() ~ APPPATH\classes\Controller\Admin\Layout\ExtentionGRUD.php [ 40 ] in file:line
2015-08-20 09:30:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-20 09:35:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `name`, `type`, `created`, `visible`, `action`, `user` FROM `pages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 09:35:39 --- DEBUG: #0 Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 Z:\home\ur.loc\www\application\classes\Model\Layout\CRUD.php(37): Kohana_Database_Query->execute()
#2 Z:\home\ur.loc\www\application\classes\Model\Page.php(30): Model_Layout_CRUD->getList()
#3 Z:\home\ur.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(44): Model_Page->getList()
#4 Z:\home\ur.loc\www\application\classes\Controller\Admin\Pages.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#5 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Pages->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ur.loc\www\modules\database\classes\Kohana\Database\Query.php:251