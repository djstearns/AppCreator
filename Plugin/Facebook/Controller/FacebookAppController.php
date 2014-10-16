<?php
App::uses('FacebookInfo', 'Facebook.Lib');
class FacebookAppController extends AppController {
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('*');
	}
	
}