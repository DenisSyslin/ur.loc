<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-07 12:39:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-07 12:39:49 --- DEBUG: #0 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\ur.loc\www\system\classes\Kohana\Request.php:986
2015-10-07 17:01:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\Trident-master\init.php [ 8 ] in file:line
2015-10-07 17:01:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-07 17:06:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\Trident-master\classes\controller\forum\front\base\core.php [ 17 ] in file:line
2015-10-07 17:06:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-07 17:07:26 --- CRITICAL: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH\Trident-master\classes\controller\forum\front\base\core.php [ 27 ] in file:line
2015-10-07 17:07:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-07 17:18:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Acl' not found ~ MODPATH\A2\classes\A2\Core.php [ 33 ] in file:line
2015-10-07 17:18:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-07 17:19:49 --- CRITICAL: ReflectionException [ 0 ]: Class A1 does not exist ~ MODPATH\A2\classes\A2\Core.php [ 73 ] in Z:\home\ur.loc\www\modules\A2\classes\A2\Core.php:73
2015-10-07 17:19:49 --- DEBUG: #0 Z:\home\ur.loc\www\modules\A2\classes\A2\Core.php(73): ReflectionMethod->__construct('A1', 'instance')
#1 Z:\home\ur.loc\www\modules\A2\classes\A2\Core.php(56): A2_Core->__construct('forum/a2')
#2 Z:\home\ur.loc\www\modules\Trident\classes\controller\forum\front\base\core.php(27): A2_Core::instance('forum/a2')
#3 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(69): Controller_Forum_Front_Base_Core->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forum_Front_Forum))
#6 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ur.loc\www\modules\A2\classes\A2\Core.php:73
2015-10-07 17:20:43 --- CRITICAL: Database_Exception [ 1146 ]: Table 'ur.forum_groups' doesn't exist [ SHOW FULL COLUMNS FROM `forum_groups` ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in Z:\home\ur.loc\www\modules\database\classes\Database\MySQLi.php:338
2015-10-07 17:20:43 --- DEBUG: #0 Z:\home\ur.loc\www\modules\database\classes\Database\MySQLi.php(338): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Database_MySQLi->list_columns('forum_groups')
#2 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\ur.loc\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\ur.loc\www\modules\Trident\classes\acl\forum\public.php(35): Kohana_ORM::factory('forum_group')
#7 Z:\home\ur.loc\www\modules\A2\classes\A2\Core.php(141): Acl_Forum_Public->__construct()
#8 Z:\home\ur.loc\www\modules\A2\classes\A2\Core.php(88): A2_Core->load()
#9 Z:\home\ur.loc\www\modules\A2\classes\A2\Core.php(56): A2_Core->__construct('forum/a2')
#10 Z:\home\ur.loc\www\modules\Trident\classes\controller\forum\front\base\core.php(27): A2_Core::instance('forum/a2')
#11 Z:\home\ur.loc\www\system\classes\Kohana\Controller.php(69): Controller_Forum_Front_Base_Core->before()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forum_Front_Forum))
#14 Z:\home\ur.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\ur.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\ur.loc\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\ur.loc\www\modules\database\classes\Database\MySQLi.php:338