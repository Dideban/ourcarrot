<?php
class Comment
{
	public function SubmitComment($f3)
	{
		if(isset($_POST['submit_comment']))
		{
			$massage = trim($_POST['post_comment']);
			if($massage != '')
			{
				if(!session_id()) session_start();
				$user_id = $_SESSION['ID'];
				$post_id = $_POST['PID'];
				global $f3db;
				$date = date('Y-m-d H:i:s');
				$cmds = 'INSERT INTO oc_comment(post_id, user_id, massage, date) VALUES(:post_id, :user_id, :massage, :date);';
				$cmds_array = array(':post_id' => $post_id, ':user_id' => $user_id, ':massage' => $massage, ':date' => $date);
				$result = $f3db->db->exec($cmds, $cmds_array);
			}
		}
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
}



