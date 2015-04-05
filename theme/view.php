<?php include ('header.php'); ?>


		<!-- فهرست کناری شروع -->
		<div class="col-sm-3 col-md-2 sidebar coloor">
			<ul class="nav nav-sidebar" role="tablist"><!-- اگر آنلاین نشده بود -->
				<li role="presentation"><a href="#" data-toggle="modal" data-target="#loginform">ورود</a></li>
				<li role="presentation"><a href="#" data-toggle="modal" data-target="#signupform">ثبت نام سریع</a></li>
			</ul>
			<ul class="nav nav-sidebar dash_top">
				<h4 class="page-header2">موافقان:</h4>
				<?php for($i=0;$i<10;$i++) { ?>
					<img src="img/no-avatar.png" width="32"/>
				<?php } ?>
			</ul>
			<ul class="nav nav-sidebar dash_top">
				<h4 class="page-header2">شرکت کنندگان:</h4>
				<?php for($i=0;$i<10;$i++) { ?>
					<img src="img/no-avatar.png" width="32"/>
				<?php } ?>
			</ul>
			<ul class="nav nav-sidebar dash_top">
				<h4 class="page-header2">توصیه کنندگان:</h4>
				<?php for($i=0;$i<10;$i++) { ?>
					<img src="img/no-avatar.png" width="32"/>
				<?php } ?>
			</ul>
		</div>

		<!-- فهرست کناری پایان -->
		<!-- فرم ورود شروع -->
				<?php include ('Loginform.php'); ?>
		<!-- فرم ورود پایان -->
		<!-- فرم ثبت نام شروع -->
				<?php include ('SignUp.php'); ?>
		<!-- فرم ثبت نام پایان -->
		
		<div class="col-sm-9 col-md-10 main rtl">
			<div class="row placeholders">
				<div class="col-xs-12 col-sm-12 col-md-12 pull-right dash" id="post_1">
					<div class="text-right">
						<img class="pull-right img-responsive img-rounded" style="margin: 0px 0px 0px 15px;" width="80" height="80" src="img/avatar.jpg">
						<span class="name">نام نویسنده <small>دو روز قبل</small></span>
						<p>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
						</p>
						<img class="attch_img img-responsive" src="img/attach_img.jpg" alt="تصویر پیوستی"/>
						<button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-comment"></span></button>
						<button type="button" class="btn btn-success">موافقم</button>
						<div class="collapse in" id="comment_1" style="margin: 5px;">
							<div class="well">
							 <?php $j=0; for($j;$j<12;$j++) { ?>
								<div class="media rtl dash">
									<a class="pull-right" href="#"><img class="media-object" src="img/no-avatar.png" alt="تصویر نمایه" width="50"></a>
									<div class="media-body">
										<span class="media-heading name">نام نویسنده	<small>دو روز قبل</small></span>
										این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
										این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
									</div>
								</div>
							<?php } ?>
							<div class="input-group ltr">
								<span class="input-group-addon btn btn-success" id="send_comment">ارسال</span>
								<textarea class="form-control rtl" rows="3" placeholder="نظر شما چیست؟" aria-describedby="send_comment"></textarea>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php include ('footer.php'); ?>
