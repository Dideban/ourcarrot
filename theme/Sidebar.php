		<div class="col-sm-3 col-md-2 sidebar coloor">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">پیشخوان اصلی <span class="sr-only">(current)</span></a></li>
				<li><a href="#">دوستان</a></li>
			</ul>
			<ul class="nav nav-sidebar dash_top" role="tablist">
				<li role="presentation"><a href="#">نظرات <span class="label label-danger">+۹۹</span></a></li>
				<li role="presentation"><a href="#">اشاره به شما <span class="label label-danger">۲</span></a></li>
				<li role="presentation"><a href="#">مکالمات</a></li>
			</ul>
			<ul class="nav nav-sidebar dash_top" role="tablist"><!-- قبل از ورود فرم تماس نمایش داده بشه و بعد از ورود دوتا لیست بالایی! -->
				<li role="presentation"><a href="#" data-toggle="modal" data-target="#loginform">ورود</a></li>
				<li role="presentation"><a href="#" data-toggle="modal" data-target="#signupform">ثبت نام سریع</a></li>
			</ul>
			<ul class="nav nav-sidebar dash_top">
				<h4 class="page-header2">کاربران آنلاین</h4>
				<?php for($i=0;$i<10;$i++) { ?>
					<img src="theme/img/no-avatar.png" width="32"/>
				<?php } ?>
			</ul>
		</div>
