<?php if( isset($last_error) ) 
{ 	
	if($last_error == '1') echo '<span style="color:Green">Add Success !</span>';
	else if($last_error == '0') echo '<span style="color:Green">Faild !</span>';
	else echo $last_error;
	
}else{?>
	<form class="uk-form" method="post" action="SignUp">
		<fieldset>
			<div class="uk-form-row"><input class="uk-width-1-1" type="text" name="username" placeholder="نام کاربری"/></div>
			<div class="uk-form-row"><input class="uk-width-1-1" type="text" name="fullname" placeholder="نام و نام خانوادگی"/></div>
			<div class="uk-form-row"><input class="uk-width-1-1" type="text" name="email" placeholder="رایانامه"/></div>
			<div class="uk-form-row"><input class="uk-width-1-1" type="password" name="userpass" placeholder="گذرواژه"/></div>
			<div class="uk-form-row"><input class="uk-button uk-button-primary uk-width-1-1" type="submit" name="btn_register" value="ثبت"/></div>
		</fieldset>
	</form>
<?php } ?>
</form>