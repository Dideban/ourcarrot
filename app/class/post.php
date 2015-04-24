<?php
class Post
{
	public function GetPost($f3)
	{
		$f3->set('GetPost', function()
		{
			global $f3db;
			$result = $f3db->db->exec(' SELECT oc_post.ID as PID, oc_post.date, oc_post.massage, oc_user.fullname FROM oc_post, oc_user WHERE oc_user.ID = oc_post.user_id ORDER BY PID DESC; ');
			return $result;
		});
	}
	
	public function GetComment($f3)
	{
		$f3->set('GetComment', function($id)
		{
			global $f3db;
			$result = $f3db->db->exec(' SELECT * FROM oc_comment, oc_user WHERE oc_user.ID = oc_comment.user_id AND oc_comment.post_id = '.$id.'; ');
			return $result;
		});
	}
	
	public function SubmitPost($f3)
	{
		if(isset($_POST['submit_post']))
		{
			if(!session_id()) session_start();
			$massage = trim($_POST['content']);
			$user_id = $_SESSION['ID'];
			$date = date('Y-m-d H:i:s');
			if($massage != '')
			{
				global $f3db;
				$result = $f3db->db->exec(' INSERT INTO oc_post(user_id, massage, date) VALUES(:user_id, :massage, :date); ', 
				array
				( 
					':user_id' => $user_id, ':massage' => $massage, ':date' => $date)
				);
			}
		}
	}
}
?>