<!DOCTYPE html>
<html dir="rtl" lang="fa-IR" prefix="og: http://ogp.me/ns#" >
<head><!-- متاها آخر کار تصحیح شود!-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
	<?php $pagetitle='شبکه ساز هویج';//در هر دو محلی ک قرار گرفته دستور عنوان صفحه لود شود. ?>
	<title><?=$pagetitle?></title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap-markdown.min.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top coloor">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">فهرست کشوی</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href=""><img src="img/logo.png" alt="لوگو"/></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">پیشخوان</a></li>
				<li><a href="#">تنظیمات</a></li>
				<li><a href="#">نمایه</a></li>
				<li><a href="#">راهنما</a></li>
			</ul>
			<form class="navbar-form navbar-right">
				<input type="text" class="form-control" placeholder="جستجو...">
			</form>
		</div>
	</div>
	</nav>

	<div class="container-fluid">
	<div class="row">
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
			<ul class="nav nav-sidebar dash_top">
				<h4 class="page-header2">کاربران آنلاین</h4>
				<?php for($i=0;$i<20;$i++) { ?>
					<img src="img/no-avatar.png" width="32"/>
				<?php } ?>
			</ul>
		</div>
		<div class="col-sm-9 col-md-10 main rtl">
			<!--<h1 class="page-header"><?=$pagetitle?></h1>-->
			<form class="col-xs-12 col-sm-12 col-md-12 pull-right dash">
				<div class="form-group">
					<textarea id="sendbox" name="content" data-provide="markdown" rows="5" placeholder="متن خود را بنویسید"></textarea>
				</div>
				<button type="submit" class="col-xs-12 col-sm-12 col-md-12 btn btn-success">ارسال</button>
			</form>
			<hr/>
			<div class="row placeholders">
			 <?php $i=0; for($i;$i<3;$i++) { ?>
				<div class="col-xs-12 col-sm-12 col-md-12 pull-right dash" id="post_<?= $i ?>">
					<div class="text-right">
						<img class="pull-right img-responsive img-rounded" style="margin: 0px 0px 0px 15px;" src="img/avatar.jpg">
						<span class="name">نام نویسنده <small>دو روز قبل</small></span>
						<p>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
							<pre dir="ltr" class="text-left"><code>&lt;div class="uk-alert"&gt;...&lt;/div&gt;</code></pre>
						</p>
						<img class="attch_img img-responsive" src="img/attach_img.jpg" alt="تصویر پیوستی"/>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#comment_<?= $i ?>" aria-expanded="false" aria-controls="comment_<?= $i ?>"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button>
						<button type="button" class="btn btn-success">موافقم</button>
						<div class="collapse" id="comment_<?= $i ?>" style="margin: 5px;">
							<div class="well">
							 <?php $j=0; for($j;$j<3;$j++) { ?>
								<div class="media rtl dash">
									<a class="pull-right" href="#"><img class="media-object" src="img/no-avatar.png" alt="تصویر نمایه" width="50"></a>
									<div class="media-body">
										<span class="media-heading name">نام نویسنده  <small>دو روز قبل</small></span>
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
			<?php } ?>
			</div>
		</div>
	</div>
	</div>

	<!-- فوتر -->
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/markdown.js"></script>
	<script src="js/to-markdown.js"></script>
	<script src="js/bootstrap-markdown.js"></script>
	<script src="js/bootstrap-markdown.fr.js"></script>
	<script>function fixeditor() {$("#sendbox").markdown({language:'fr'});}fixeditor();</script>
</body>
</html>
