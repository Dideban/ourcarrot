﻿<!DOCTYPE html>
<html class="uk-height-1-1">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>صفحه ی ورودی</title>
		<link rel="stylesheet" href="http://localhost/ourcarrot/theme/css/uikit.almost-flat.min.css" />
		<link rel="stylesheet" href="http://localhost/ourcarrot/theme/css/custom.css" />
		<script src="http://localhost/ourcarrot/theme/js/jquery.js"></script>
		<script src="http://localhost/ourcarrot/theme/js/uikit.min.js"></script>
		<meta name="Keywords" content="کلمات کلیدی">
		<meta name="Description" content="توضیحات">
		<meta name="author" content="نام نویسنده">
		<base href=""><!--مهم-->
	</head>
	<body class="uk-container-center uk-height-1-1">
	<div class="uk-container uk-container-center uk-width-1-1 uk-height-1-1">
		<nav class="uk-navbar uk-navbar-attached" style="padding:3px;">
			<div class="uk-navbar-flip uk-margin-right">
				<ul class="uk-navbar-nav uk-display-inline-block uk-float-right">
					<a href="#" class="uk-navbar-brand uk-float-right"><img width="32" src="" alt="logo"></a>
					<a href="#" class="uk-icon-button uk-icon-exclamation"></a>
					<a href="#menu" class="uk-icon-button uk-icon-reorder" data-uk-offcanvas></a>
				</ul>
			</div>
		</nav>
		<div class="uk-grid uk-grid-divider uk-margin" data-uk-grid-margin="">
			<div class="uk-width-medium-3-4 rtl"><div class="uk-panel uk-panel-box">محل فراخوانی نوشته ها</div></div>
			<div class="uk-width-medium-1-4">
				<div class="uk-panel rtl">
					<form class="uk-form uk-width-1-1">
						<fieldset data-uk-margin>
							<legend>ورود</legend>
							<input type="text" class="uk-width-1-1 uk-margin" dir="ltr"placeholder="نام کاربری/ایمیل">
							<input type="password" class="uk-width-1-1 uk-margin" dir="ltr"placeholder="رمزعبور">
							<button class="uk-button uk-button-primary uk-width-1-1 uk-margin">ورود</button>
						</fieldset>
					</form>
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