<?php include ('header.php'); ?>
<style>
.timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        right: 50%;
        margin-right: -1.5px;
    }

    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li > .timeline-panel {
            width: 46%;
            float: right;
            border: 1px solid #d4d4d4;
            border-radius: 2px;
            padding: 20px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }

            .timeline > li > .timeline-panel:before {
                position: absolute;
                top: 26px;
                left: -15px;
                display: inline-block;
                border-top: 15px solid transparent;
                border-right: 15px solid #ccc;
                border-left: 0 solid #ccc;
                border-bottom: 15px solid transparent;
                content: " ";
            }

            .timeline > li > .timeline-panel:after {
                position: absolute;
                top: 27px;
                left: -14px;
                display: inline-block;
                border-top: 14px solid transparent;
                border-right: 14px solid #fff;
                border-left: 0 solid #fff;
                border-bottom: 14px solid transparent;
                content: " ";
            }

        .timeline > li > .timeline-badge {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            right: 50%;
            margin-right: -25px;
            background-color: #999999;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline > li.timeline-inverted > .timeline-panel {
            float: left;
        }

            .timeline > li.timeline-inverted > .timeline-panel:before {
                border-right-width: 0;
                border-left-width: 15px;
                right: -15px;
                left: auto;
            }

            .timeline > li.timeline-inverted > .timeline-panel:after {
                border-right-width: 0;
                border-left-width: 14px;
                right: -14px;
                left: auto;
            }

.timeline-badge.primary {
    background-color: #4FC1E9 !important;
}

.timeline-badge.success {
    background-color: #A0D468 !important;
}

.timeline-badge.warning {
    background-color: #f0ad4e !important;
}

.timeline-badge.danger {
    background-color: #FC6E51 !important;
}

.timeline-badge.info {
    background-color: #AC92EC !important;
}

.timeline-title {
    margin-top: 0;
    color: inherit;
}

.timeline-body > p,
.timeline-body > ul {
    margin-bottom: 0;
}

    .timeline-body > p + p {
        margin-top: 5px;
    }

@media (max-width: 767px) {
    ul.timeline:before {
        right: 40px;
    }

    ul.timeline > li > .timeline-panel {
        width: calc(100% - 90px);
        width: -moz-calc(100% - 90px);
        width: -webkit-calc(100% - 90px);
    }

    ul.timeline > li > .timeline-badge {
        right: 15px;
        margin-right: 0;
        top: 16px;
    }

    ul.timeline > li > .timeline-panel {
        float: left;
    }

        ul.timeline > li > .timeline-panel:before {
            border-right-width: 0;
            border-left-width: 15px;
            right: -15px;
            left: auto;
        }

        ul.timeline > li > .timeline-panel:after {
            border-right-width: 0;
            border-left-width: 14px;
            right: -14px;
            left: auto;
        }
}
</style>
<div class="container">
    <div class="span3 well" style="background-image:url('img/cover.jpg');height:250px;">
        <div style="height:250px;width:150px;background-color: rgba(255, 255, 255, 0.69);border-radius: 5px;">
        <center>
        <a><img src="img/avatar.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3>کاربر نمونه</h3>
        <em>درباره کاربر نمونه</em>
		</center>
		</div>
    </div>
    <ul class="timeline">
	<?php $i=0;$ca=array('success','primary','info','warning','danger',);
		for($i;$i<6;$i++) { ?>
        <li <?php if ($i%2) echo ' class="timeline-inverted"' ?>>
          <div class="timeline-badge <?= $ca[$i%5] ?>"><i class="glyphicon glyphicon-comment"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
				<img class="pull-right img-responsive img-rounded" style="margin: 0px 0px 0px 15px;" width="80" height="80" src="img/avatar.jpg">
              <h4 class="timeline-title">نام نویسنده</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> دو روز قبل</small></p>
            </div>
            <div class="timeline-body">
				<p>
					این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
					این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
					این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
					این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
					این یک متن نمونه صرفا جهت بررسی و آزمایش است 012345678 !@#$%^&*)(.<br>
				</p>
				<img class="text-center attch_img img-responsive" src="img/attach_img.jpg" alt="تصویر پیوستی"/>
				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#comment_<?= $i ?>" aria-expanded="false" aria-controls="comment_<?= $i ?>"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button>
				<button type="button" class="btn btn-success">موافقم</button>
				<div class="collapse" id="comment_<?= $i ?>" style="margin: 5px;">
					<div class="well">
					 <?php $j=0; for($j;$j<3;$j++) { ?>
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
        </li>
		<?php } ?>
    </ul>
</div>



<?php include ('footer.php'); ?>