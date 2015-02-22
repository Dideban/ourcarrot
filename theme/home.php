<!DOCTYPE html>
<html class="uk-height-1-1">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>صفحه ی ورودی</title>
		<link rel="stylesheet" href="theme/css/uikit.almost-flat.min.css" />
		<link rel="stylesheet" href="theme/css/custom.css" />
		<script src="theme/js/jquery-1.11.2.min.js"></script>
		<script src="theme/js/uikit.min.js"></script>
		<meta name="Keywords" content="کلمات کلیدی">
		<meta name="Description" content="توضیحات">
		<meta name="author" content="نام نویسنده">
		<base href=""><!--مهم-->
	</head>
	<body class="uk-container-center uk-height-1-1">
	<!--<img src="Captcha" title="captcha image" alt="captcha"/>-->
	<div class="uk-container uk-container-center uk-width-1-1 uk-height-1-1">
		<nav class="uk-navbar uk-navbar-attached " style="padding:3px;">
			<div class="uk-navbar-flip uk-margin-right">
				<ul class="uk-navbar-nav uk-display-inline-block uk-float-right">
					<a href="#" class="uk-navbar-brand uk-float-right"><img width="32" src="" alt="logo"></a>
					<a href="#" class="uk-icon-button uk-icon-exclamation"></a>
					<a href="#menu" class="uk-icon-button uk-icon-reorder" data-uk-offcanvas></a>
				</ul>
			</div>
		</nav>
		<div class="uk-grid uk-grid-divider uk-margin" data-uk-grid-margin="">
			<div class="uk-width-medium-3-4 rtl">
				<?php for($i=1;$i<=5;$i++) { ?>
				<div class="uk-panel uk-panel-box">
					<article class="uk-article rtl">
						<h1 class="uk-article-lead">عنوان نوشته <?= $i ?></h1>
						<p class="uk-article-meta">توضیحات</p>
						<p class="">متن نوشته</p>
						<hr class="uk-article-divider">
						اطلاعات نوشته (لایک،دیدگاه و...)
					</article>
				</div>
				<?php } ?>
				<button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-primary uk-margin">فراخوانی نوشته های دیگر</button>
			</div>
			<div class="uk-width-medium-1-4">
				<div class="uk-panel rtl">
					<form class="uk-form uk-width-1-1">
						<fieldset data-uk-margin>
							<legend>ورود</legend>
							<input type="text" class="uk-width-1-1 uk-margin" dir="ltr"placeholder="نام کاربری/ایمیل">
							<input type="password" class="uk-width-1-1 uk-margin" dir="ltr"placeholder="رمزعبور">
							<button class="uk-button uk-button-primary uk-width-1-1 uk-margin">ورود</button>
							<a href="#signup" class="uk-button uk-button-danger uk-width-1-1" data-uk-modal>ثبت نام</a>
						</fieldset>
					</form>
					<div id="signup" class="uk-modal">
						<div class="uk-modal-dialog">
							<div class="uk-modal-header">ثبت نام</div>
							<?php include ('SignUp.php'); ?>
							<!--<div class="uk-modal-footer">...</div>-->
						</div>
					</div>
				</div>
				<div class="uk-panel rtl">
					<fieldset data-uk-margin>
						<legend>کاربران برخط</legend>
						<?php for($i=0;$i<20;$i++) { ?>
							<img src="http://localhost/ourcarrot/theme/img/no-avatar.png" width="32"/>
						<?php } ?>
					</fieldset>
				</div>
				<div class="uk-panel rtl">
					<fieldset data-uk-margin>
						<legend>کاربران فعال</legend>
						<?php for($i=0;$i<20;$i++) { ?>
							<img src="http://localhost/ourcarrot/theme/img/no-avatar.png" width="32"/>
						<?php } ?>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>