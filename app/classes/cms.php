<?php
class CMS extends db
{
	function Show($f3, $args)
	{
		$PageName = $args[0];
		$view = new View();
		switch( $PageName )
		{
			case '/':
			echo $view->render('home.php');
			break;
			case '/SignUp':
			echo $view->render('sign-up.php');
			break;
		}
	}
	
	function SignUp($f3, $args)
	{
		$db = $this->db;
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mail = $_POST['mail'];
		$pass = md5($_POST['pass']);
		if( isset($_POST['btn_register']) )
		{
			$result = $db->exec(' INSERT INTO oc_users(fname, lname, mail, pass) VALUES(:fname, :lname, :mail, :pass) ',
			array(':fname'=>$fname, ':lname'=>$lname, ':mail'=>$mail, ':pass'=>$pass)
			);
			$f3->set('db_error', $result);
		}
		$this->Show($f3, $args);
	}
	
	function captcha($f3)
	{
		require('lib/image.php');
		$img = new Image();
		$img->captcha('fonts/Arial.ttf',16,5,'SESSION.captcha_code');
		$img->render();
	}
}
?>