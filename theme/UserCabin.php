<?php @session_start(); ?>

<h1> Wellcome <?=$_SESSION['fullname']?> ! </h1>

<?php
if( isset($last_error) )
{
	if( $last_error == '1' ) echo '<h2>Add Success !</h2>';
	else if( $last_error = '0' ) echo '<h2>Faild !</h2>';
}
?>

<form method="post" action="">
<table cellspacing="5">
<tr>
<td valign="top">Massage</td>
<td><textarea name="user_massage" style="width:500px; height:300px"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="btn_massage" style="width:100%" /></td>
</tr>
</table>
</form>
