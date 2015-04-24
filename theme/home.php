<?php if(!session_id()) session_start(); ?>

<?php include ('header.php'); ?>


		<!-- فهرست کناری شروع -->
				<?php include ('Sidebar.php'); ?>
		<!-- فهرست کناری پایان -->
		<!-- فرم ورود شروع -->
				<?php include ('Loginform.php'); ?>
		<!-- فرم ورود پایان -->
		<!-- فرم ثبت نام شروع -->
				<?php include ('SignUp.php'); ?>
		<!-- فرم ثبت نام پایان -->
		
		<div class="col-sm-9 col-md-10 main rtl">
        <?php if($isLogin()): ?>
			<form method="post" action="" class="col-xs-12 col-sm-12 col-md-12 pull-right dash">
				<div class="form-group">
					<textarea id="sendbox" name="content" data-provide="markdown" rows="5" placeholder="متن خود را بنویسید"></textarea>
				</div>
				<button type="submit" name="submit_post" class="col-xs-12 col-sm-12 col-md-12 btn btn-success">ارسال</button>
			</form>
         <?php endif; ?>
			<hr/>
			<div class="row placeholders">
			 <?php $i=0; foreach( $GetPost() as $post ): $i++ ?>
				<div class="col-xs-12 col-sm-12 col-md-12 pull-right dash" id="post_<?= $i ?>">
					<div class="text-right">
						<img class="pull-right img-responsive img-rounded" style="margin: 0px 0px 0px 15px;" src="theme/img/avatar.jpg">
						<span class="name"><?=$post['fullname']?>&nbsp;&nbsp;<small><?=$post['date']?></small></span>
						<p>
                        	<?=$post['massage']?>
							<pre dir="ltr" class="text-left"><code>&lt;div class="uk-alert"&gt;...&lt;/div&gt;</code></pre>
						</p>
						<img class="attch_img img-responsive" src="theme/img/attach_img.jpg" alt="تصویر پیوستی"/>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#comment_<?= $i ?>" aria-expanded="false" aria-controls="comment_<?= $i ?>"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button>
						<button type="button" class="btn btn-success">موافقم</button>
						<div class="collapse" id="comment_<?= $i ?>" style="margin: 5px;">
							<div class="well">
							 <?php foreach( $GetComment($post['PID']) as $comment ): ?>
								<div class="media rtl dash">
									<a class="pull-right" href="#"><img class="media-object" src="theme/img/no-avatar.png" alt="تصویر نمایه" width="50"></a>
									<div class="media-body">
										<span class="media-heading name"><?=$comment['fullname']?> <small><?=$comment['date']?></small></span>
										<?=$comment['massage']?>
									</div>
								</div>
							<?php endforeach; ?>
							<div class="input-group ltr">
								<span class="input-group-addon btn btn-success" id="send_comment">ارسال</span>
								<textarea class="form-control rtl" rows="3" placeholder="نظر شما چیست؟" aria-describedby="send_comment"></textarea>
							</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
	</div>
	<?php include ('footer.php'); ?>
