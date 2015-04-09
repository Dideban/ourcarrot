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
			$this->GetPost($f3, $args);
			echo $view->render('home.php');
			break;
			case '/Home':
			$this->GetPost($f3, $args);
			echo $view->render('home.php');
			break;
			case '/SignUp':
			echo $view->render('SignUp.php');
			break;
			case '/SignIn':
			echo $view->render('SignIn.php');
			break;
			case '/SignOut':
			echo $view->render('SignOut.php');
			break;
			case '/UserCabin':
			echo $view->render('UserCabin.php');
			break;
		}
	}
	
	function Post($f3, $args)
	{
		$db = $this->db;
		if(isset($_POST['submit_post']))
		{
			if(!session_id()) session_start();
			$massage = trim($_POST['content']);
			$user_id = $_SESSION['ID'];
			$date = date('Y-m-d H:i:s');
			if($massage != '')
			{
				$result = $db->exec(' INSERT INTO oc_post(user_id, massage, date) VALUES(:user_id, :massage, :date); ', 
				array( ':user_id' => $user_id, ':massage' => $massage, ':date' => $date)
				);
			}
		}
		$this->show($f3, $args);
	}
	
	function GetPost($f3, $args)
	{
		$db = $this->db;
		$result = $db->exec(' SELECT * FROM oc_post,oc_user WHERE oc_post.user_id = oc_user.ID ORDER BY oc_post.ID DESC; ');
		$f3->set('post', $result);
	}
	
	function SignUp($f3, $args)
	{
		$db = $this->db;
		$username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$userpass = md5($_POST['userpass']);
		if( isset($_POST['btn_register']) )
		{
			if( $username != '' and $fullname != '' and $email != '' and $userpass != '' )
			{
				$result = $db->exec(' INSERT INTO oc_user(username, fullname, email, userpass) 
				VALUES(:username, :fullname, :email, :userpass) ',
				array(':username'=>$username, ':fullname'=>$fullname, ':email'=>$email, ':userpass'=>$userpass)
				);
				$f3->set('last_error', $result);
			}
			else $f3->set('last_error', 'Fill The Blank Part.');
			
		}
		$this->Show($f3, $args);
	}
	
	function SignIn($f3, $args)
	{
		$db = $this->db;
		if(isset($_POST['btn_login']))
		{
			$email = $_POST['email'];
			$userpass = md5($_POST['userpass']);
			if($email != '' and $userpass != '')
			{
				$result = $db->exec(' SELECT * FROM oc_user WHERE email = :email AND userpass = :userpass ',
				array(':email'=>$email, ':userpass'=>$userpass)
				);
				if(count($result) == 0)
					$f3->set('last_error', 'User Not Found.');
				else
				{
					@session_start();
					$_SESSION['ID'] = $result[0]['ID'];
					$_SESSION['username'] = $result[0]['username'];
					$_SESSION['fullname'] = $result[0]['fullname'];
					$_SESSION['email'] = $result[0]['email'];
				}
			}
			else $f3->set('last_error', 'Fill The Blank Part.');
		}
		$this->Show($f3, $args);
	}
	
	function UserCabin($f3, $args)
	{
		if( isset($_POST['btn_massage']) )
		{
			if( $_POST['user_massage'] != '' )
			{
				@session_start();
				$db = $this->db;
				$massage = $_POST['user_massage'];
				$user_id = $_SESSION['ID'];
				$date = date('Y-m-d H:i:s');
				$result = $db->exec(' INSERT INTO oc_post(user_id, massage, date) 
				VALUES(:user_id, :massage, :date) ',
				array(':user_id'=>$user_id, ':massage'=>$massage, ':date'=>$date)
				);
				
				$f3->set('last_error', $result);
			}
		}
		$this->Show($f3, $args);
	}
	
	function Captcha($f3)
	{
		require('lib/image.php');
		$img = new Image();
		$img->captcha('fonts/Arial.ttf',16,5,'SESSION.captcha_code');
		$img->render();
	}
}
?>