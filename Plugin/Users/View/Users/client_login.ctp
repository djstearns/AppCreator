<div class="users form">
	<h2><?php echo __d('croogo', 'Login'); ?></h2>
	<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>
		<fieldset>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
		?>
		</fieldset>
	<?php echo $this->Form->end('Submit');?>
    <?php echo $this->Facebook->login(array('perms' => 'email,publish_stream','label'=>'login with Facebook', 'redirect'=>'http://www.derekstearns.com/newappcreator/users/users/add'));?>
    <?php //echo $this->Facebook->registration(array('fields' => 'name,gender,email','width' => 600));//'redirect-uri' => 'http://www.derekstearns.com/newappcreator/users/users/add')); ?>
</div>