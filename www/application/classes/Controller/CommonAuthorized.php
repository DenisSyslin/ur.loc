<?php defined('SYSPATH') or die('No direct script access.');
 
	abstract class Controller_CommonAuthorized extends Controller_Template {
	 
		public $template = 'template';
	 
		public function before() {
			
			parent::before();
			
			if (!Auth::instance() -> get_user()) {
				
				$session = Session::instance();
				$session -> set('redirectAfterLogin', $_SERVER[ 'REQUEST_URI' ]);
				HTTP::redirect('/account/registration');
			}
		}
	}