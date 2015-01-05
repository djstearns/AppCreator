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
	
braintree.setup("eyJ2ZXJzaW9uIjoxLCJhdXRob3JpemF0aW9uRmluZ2VycHJpbnQiOiI2MjhhY2RhMTk0ZjI2ZWRiMTJmMTE5ZDY2MTZlNWZkYzUwZDk2OTJiNzUxYmVmYzgzZTU2ZmJkZDhjMzA4M2E3fGNyZWF0ZWRfYXQ9MjAxNS0wMS0wMVQxNToxOTowNS41MDM2NTQzNzErMDAwMFx1MDAyNm1lcmNoYW50X2lkPWRjcHNweTJicndkanIzcW5cdTAwMjZwdWJsaWNfa2V5PTl3d3J6cWszdnIzdDRuYzgiLCJjb25maWdVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvZGNwc3B5MmJyd2RqcjNxbi9jbGllbnRfYXBpL3YxL2NvbmZpZ3VyYXRpb24iLCJjaGFsbGVuZ2VzIjpbXSwicGF5bWVudEFwcHMiOltdLCJjbGllbnRBcGlVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvZGNwc3B5MmJyd2RqcjNxbi9jbGllbnRfYXBpIiwiYXNzZXRzVXJsIjoiaHR0cHM6Ly9hc3NldHMuYnJhaW50cmVlZ2F0ZXdheS5jb20iLCJhdXRoVXJsIjoiaHR0cHM6Ly9hdXRoLnZlbm1vLnNhbmRib3guYnJhaW50cmVlZ2F0ZXdheS5jb20iLCJhbmFseXRpY3MiOnsidXJsIjoiaHR0cHM6Ly9jbGllbnQtYW5hbHl0aWNzLnNhbmRib3guYnJhaW50cmVlZ2F0ZXdheS5jb20ifSwidGhyZWVEU2VjdXJlRW5hYmxlZCI6dHJ1ZSwidGhyZWVEU2VjdXJlIjp7Imxvb2t1cFVybCI6Imh0dHBzOi8vYXBpLnNhbmRib3guYnJhaW50cmVlZ2F0ZXdheS5jb206NDQzL21lcmNoYW50cy9kY3BzcHkyYnJ3ZGpyM3FuL3RocmVlX2Rfc2VjdXJlL2xvb2t1cCJ9LCJwYXlwYWxFbmFibGVkIjp0cnVlLCJwYXlwYWwiOnsiZGlzcGxheU5hbWUiOiJBY21lIFdpZGdldHMsIEx0ZC4gKFNhbmRib3gpIiwiY2xpZW50SWQiOm51bGwsInByaXZhY3lVcmwiOiJodHRwOi8vZXhhbXBsZS5jb20vcHAiLCJ1c2VyQWdyZWVtZW50VXJsIjoiaHR0cDovL2V4YW1wbGUuY29tL3RvcyIsImJhc2VVcmwiOiJodHRwczovL2Fzc2V0cy5icmFpbnRyZWVnYXRld2F5LmNvbSIsImFzc2V0c1VybCI6Imh0dHBzOi8vY2hlY2tvdXQucGF5cGFsLmNvbSIsImRpcmVjdEJhc2VVcmwiOm51bGwsImFsbG93SHR0cCI6dHJ1ZSwiZW52aXJvbm1lbnROb05ldHdvcmsiOnRydWUsImVudmlyb25tZW50Ijoib2ZmbGluZSIsIm1lcmNoYW50QWNjb3VudElkIjoic3RjaDJuZmRmd3N6eXR3NSIsImN1cnJlbmN5SXNvQ29kZSI6IlVTRCJ9LCJjb2luYmFzZUVuYWJsZWQiOmZhbHNlfQ==", 'dropin', {
  container: 'dropin'
});
EOF;

if ($this->request->params['action'] == 'admin_add' || $this->request->params['action']=='admin_edit'):
	$this->Js->buffer($script);
endif;
?>