<?php 
echo $this->Html->script(array(
			'https://js.braintreegateway.com/v2/braintree.js'
		));

?>

<?php 
echo $this->Form->create(null); 
echo $this->Form->input('firstName');
echo $this->Form->input('lastName');
echo $this->Form->input('phone');
?>
 <div id="dropin"></div>
<?php //echo $this->Form->submit(); ?>
<?php //echo $this->Form->end(); ?>
 
<?php 
/*

braintree.setup("<?php //echo $clientToken; ?>", 'dropin', {
  container: 'dropin'
});
*/
$script = <<<EOF
	
braintree.setup("eyJ2ZXJzaW9uIjoxLCJhdXRob3JpemF0aW9uRmluZ2VycHJpbnQiOiI3ZTQ4NjE5ODMzY2VhMTEwOWFiMjkzNWE0YjcxMDhiNzQ4MzA0MTJlMzllMzIzZDQ1YmQyZTRhNDQ5MmZhZWUzfGNyZWF0ZWRfYXQ9MjAxNC0wOC0xNVQxMTozMTowNC43MTI1ODI4NzQrMDAwMFx1MDAyNm1lcmNoYW50X2lkPWRjcHNweTJicndkanIzcW5cdTAwMjZwdWJsaWNfa2V5PTl3d3J6cWszdnIzdDRuYzgiLCJjaGFsbGVuZ2VzIjpbImN2diJdLCJjbGllbnRBcGlVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvZGNwc3B5MmJyd2RqcjNxbi9jbGllbnRfYXBpIiwiYXNzZXRzVXJsIjoiaHR0cHM6Ly9hc3NldHMuYnJhaW50cmVlZ2F0ZXdheS5jb20iLCJhdXRoVXJsIjoiaHR0cHM6Ly9hdXRoLnZlbm1vLnNhbmRib3guYnJhaW50cmVlZ2F0ZXdheS5jb20iLCJwYXltZW50QXBwU2NoZW1lcyI6W10sInRocmVlRFNlY3VyZUVuYWJsZWQiOmZhbHNlLCJwYXlwYWxFbmFibGVkIjp0cnVlLCJwYXlwYWwiOnsiZGlzcGxheU5hbWUiOiJBY21lIFdpZGdldHMsIEx0ZC4gKFNhbmRib3gpIiwiY2xpZW50SWQiOm51bGwsInByaXZhY3lVcmwiOiJodHRwOi8vZXhhbXBsZS5jb20vcHAiLCJ1c2VyQWdyZWVtZW50VXJsIjoiaHR0cDovL2V4YW1wbGUuY29tL3RvcyIsImJhc2VVcmwiOiJodHRwczovL2Fzc2V0cy5icmFpbnRyZWVnYXRld2F5LmNvbSIsImFzc2V0c1VybCI6Imh0dHBzOi8vY2hlY2tvdXQucGF5cGFsLmNvbSIsImRpcmVjdEJhc2VVcmwiOm51bGwsImFsbG93SHR0cCI6dHJ1ZSwiZW52aXJvbm1lbnROb05ldHdvcmsiOnRydWUsImVudmlyb25tZW50Ijoib2ZmbGluZSJ9LCJhbmFseXRpY3MiOnsidXJsIjoiaHR0cHM6Ly9hcGkuc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbTo0NDMvbWVyY2hhbnRzL2RjcHNweTJicndkanIzcW4vY2xpZW50X2FwaS9hbmFseXRpY3MifX0=", 'dropin', {
  container: 'dropin'
});
EOF;

if ($this->request->params['action'] == 'admin_add' || $this->request->params['action']=='admin_edit'):
	$this->Js->buffer($script);
endif;
?>