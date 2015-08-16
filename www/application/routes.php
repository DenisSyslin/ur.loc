<?php

	Route::set('default-admin', 'admin(/<controller>(/<action>(/<id>)))')
		 -> defaults(array(
			'directory'  => 'admin',
			'controller' => 'dashboard',
			'action'     => 'index',
		));
	
	Route::set('default', '(<controller>(/<action>(/<id>)))') -> defaults(array('controller' => 'Pages','action' => 'index'));

	