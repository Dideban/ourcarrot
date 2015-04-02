<div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-labelledby="loginformLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="loginformLabel">ورود</h4>
			</div>
			<form>
			<div class="modal-body">
				<div class="form-group">
					<label for="Email1">رایانامه</label>
					<input type="email" name="username" class="form-control text-center" id="Email1" placeholder="آدرس ایمیل یا نام کاربری خود را وارد نمایید." required autofocus>
				</div>
				<div class="form-group">
					<label for="Password1">گذرواژه</label>
					<input type="password" name="userpass" class="form-control text-center" id="Password1" placeholder="رمز عبور خود را بنویسید." required>
				</div>
				<div class="checkbox">
					<label><input type="checkbox"> به خاطر بسپار</label>
				</div>
			</div>
			<div class="modal-footer">
				<button name="btn_login" type="button" class="btn btn-success col-xs-7 col-sm-7 col-md-7 rtl pull-right">ورود</button>
				<a class="btn btn-danger col-xs-3 col-sm-3 col-md-3 rtl pull-left">فراموشی رمز عبور</a>
			</div>
			</form>
		</div>
	</div>
</div>