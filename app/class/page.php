<?php
class PAGE extends db
{
	function __construct(){
	}
	public function display($f3,$page) {
		$this->SetTitle($f3,'شبکه ساز هویج');
		//var_dump($page);
		//echo $f3->get('CTL').$page.'.php';
		require_once( $f3->get('DIR').'controller/'.$page.'.php' );
		$view = new View();
		echo $view->render($page.'.php');
	}
	public function SetTitle($f3,$title) {
		$result = $title;
		$f3->set('SiteTitle', $result);
	}
}
?>