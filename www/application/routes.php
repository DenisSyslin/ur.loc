<?php

	Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+')) 
		-> defaults(array(
			'controller' => 'Error_Handler'
		));
	
	Route::set('default-admin', 'admin(/<controller>(/<action>(/<id>)))')
		 -> defaults(array(
			'directory'  => 'admin',
			'controller' => 'dashboard',
			'action'     => 'index',
		));
	
	Route::set('account-forgot', 'account/forgot(/<hash>)', array('hash' => '[\w\d]+',)) -> defaults(array('controller' => 'account', 'action' => 'forgot'));

	Route::set('default', '(<controller>(/<action>(/<id>)))') -> defaults(array('controller' => 'Pages','action' => 'index'));

	