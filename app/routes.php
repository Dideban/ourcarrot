<?php
$f3->route('GET|POST /@page', function($f3) 
{
	$Page = new page();
	$Page->display($f3, ''.$f3->get('PARAMS.page').'');	
});

$f3->route('GET|POST /', function($f3) 
{
	$Page = new Page();
	$Page->display($f3, 'home');
});
?>
