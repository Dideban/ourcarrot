<?php
class Page
{
	public function display($f3, $page) 
	{
		require_once( $f3->get('DIR').'controller/'.$page.'.php' );
		$view = new View();
		echo $view->render($page.'.php');
	}
}
?>