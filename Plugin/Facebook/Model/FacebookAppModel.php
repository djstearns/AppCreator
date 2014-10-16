<?php
App::uses('FacebookInfo', 'Facebook.Lib');
class FacebookAppModel extends AppModel {
	public function currentUser() {
	  	$user = SessionComponent::read('Auth.User.id');
	  return array('id'=>$user); # Return the complete user array
	}
}