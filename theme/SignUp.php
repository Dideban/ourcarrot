<?php if( isset($last_error) ) 
{ 	
	if($last_error == '1') echo '<span style="color:Green">Add Success !</span>';
	else if($last_error == '0') echo '<span style="color:Green">Faild !</span>';
	else echo $last_error;
	
}else{?>

<div class="modal fade" id="signupform" tabindex="-1" role="dialog" aria-labelledby="signupformLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="signupformLabel">ثبت نام سریع</h4>
			</div>
			<form>
			<div class="modal-body">
				<div class="form-group">
					<label for="username">نام کاربری</label>
					<input type="text" name="username" placeholder="نام کاربری" class="form-control text-center" id="username" required autofocus>
				</div>
				<div class="form-group">
					<label for="fullname">نام و نام خانوادگی</label>
					<input type="text" name="fullname" placeholder="نام و نام خانوادگی" class="form-control text-center" id="fullname" required autofocus>
				</div>
				<div class="form-group">
					<label for="Email1">رایانامه</label>
					<input type="email" name="email" class="form-control text-center" id="Email1" placeholder="آدرس ایمیل یا نام کاربری خود را وارد نمایید." required autofocus>
				</div>
				<div class="form-group">
					<label for="Password1">گذرواژه</label>
					<input type="password" name="userpass" class="form-control text-center" id="Password1" placeholder="رمز عبور خود را بنویسید.">
				</div>
				<div class="checkbox">
					<label><input type="checkbox"> به خاطر بسپار</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" name="btn_register" class="btn btn-success col-xs-12 col-sm-12 col-md-12">ورود</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php } ?>