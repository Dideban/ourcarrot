<?php 
if( isset($db_error) ) 
{ 	
	if($db_error == '1') echo '<span style="color:Green">Add Success !</span>'; else echo 'Failed !';
}
else
{
?>
	<form class="uk-form" method="post" action="SignUp">
		<fieldset>
			<div class="uk-form-row"><input class="uk-width-1-1" type="text" name="fname" placeholder="نام"/></div>
			<div class="uk-form-row"><input class="uk-width-1-1" type="text" name="lname" placeholder="نام خانوادگی"/></div>
			<div class="uk-form-row"><input class="uk-width-1-1" type="text" name="mail" placeholder="رایانامه"/></div>
			<div class="uk-form-row"><input class="uk-width-1-1" type="password" name="pass" placeholder="رمز"/></div>
			<div class="uk-form-row"><input class="uk-button uk-button-primary uk-width-1-1" type="submit" name="btn_register" value="ثبت"/></div>
		</fieldset>
</form>
<?php } ?>