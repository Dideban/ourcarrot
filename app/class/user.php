<?php
class User
{
	public function SignIn($f3)
	{
		global $f3db;
		if(isset($_POST['btn_login']))
		{
			$email = $_POST['email'];
			$userpass = md5($_POST['userpass']);
			if($email != '' and $userpass != '')
			{
				$result = $f3db->db->exec(' SELECT * FROM oc_user WHERE email = :email AND userpass = :userpass ',
				array
				(
					':email'=>$email, ':userpass'=>$userpass)
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
	}
	
	function SignUp($f3)
	{
		if( isset($_POST['btn_register']) )
		{
			global $f3db;
			$username = $_POST['username'];
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$userpass = md5($_POST['userpass']);
			if( $username != '' and $fullname != '' and $email != '' and $userpass != '' )
			{
				$result = $f3db->db->exec(' INSERT INTO oc_user(username, fullname, email, userpass)
				VALUES(:username, :fullname, :email, :userpass) ',
						array(':username'=>$username, ':fullname'=>$fullname, ':email'=>$email, ':userpass'=>$userpass)
				);
				$f3->set('last_error', $result);
			}
			else $f3->set('last_error', 'Fill The Blank Part.');
				
		}
	}
	
	public function SignOut($f3)
	{
		if(!session_id()) session_start();
		unset($_SESSION['ID']);
		session_unset();
	}
	
	public function isLogin($f3)
	{
		$f3->set('isLogin', function()
		{ 
			if(!session_id()) session_start();
			if( isset($_SESSION['ID']) ) return true;
			return false;
		});
	}
}
?>



