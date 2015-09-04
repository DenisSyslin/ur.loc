<?php

	Route::set('default-admin', 'admin(/<controller>(/<action>(/<id>)))')
		 -> defaults(array(
			'directory'  => 'admin',
			'controller' => 'dashboard',
			'action'     => 'index',
		));
	
	Route::set('account-forgot', 'account/forgot(/<hash>)', array('hash' => '[\w\d]+',)) -> defaults(array('controller' => 'account', 'action' => 'forgot'));

	Route::set('default', '(<controller>(/<action>(/<id>)))') -> defaults(array('controller' => 'Pages','action' => 'index'));

	