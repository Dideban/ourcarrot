<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SignUp</title>
</head>

<body>
<?php 
if( isset($db_error) )
{
	if($db_error == '1') echo '<span style="color:Green">Add Success !</span>';
	else echo 'Failed !';
}
?>
<form method="post" action="">
<table cellspacing="5">
<tr>
<td>firt name :</td>
<td><input type="text" name="fname" /></td>
</tr>
<tr>
<td>last name :</td>
<td><input type="text" name="lname" /></td>
</tr>
<tr>
<td>mail :</td>
<td><input type="text" name="mail" /></td>
</tr>
<tr>
<td>password :</td>
<td><input type="text" name="pass" /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="register" name="btn_register" /></td>
</tr>
</table>
</form>
</body>
</html>