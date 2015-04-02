<?php
@session_start();
if( isset($last_error) )
{
	echo $last_error;
}
else if( isset($_SESSION['ID']) )
{
	ob_start();
	header('Location: ' . 'UserCabin');
	ob_get_clean();
}
?>