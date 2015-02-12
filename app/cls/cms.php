<?php
class CMS
{
	function Show($f3, $args)
	{
		$view = new View();
		echo $view->render('home.php');
	}
	
	function captcha($f3)
	{
		require('lib/image.php');
		$img = new Image();
		$img->captcha('fonts/Yekan.ttf',16,5,'SESSION.captcha_code');
		$img->render();
	}
}
?>