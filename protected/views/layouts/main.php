<!DOCTYPE html>
<html lang="en">
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if IE 10]>
<html lang="en" class="ie10"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="/libs/bootstrap/assets/ico/favicon.png">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<!-- Bootstrap core assets  are  registered by Yii in components/Controller.php -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<title>Conquer Admin Dashboard Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
	<link href="/assets/css/style.css" rel="stylesheet"/>
	<link href="/assets/css/style_responsive.css" rel="stylesheet"/>
	<link href="/assets/css/style_default.css" rel="stylesheet" id="style_color"/>
	<!--	<link href="#" rel="stylesheet" id="style_metro"/>-->
	<link href="/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="/assets/gritter/css/jquery.gritter.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/uniform/css/uniform.default.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap-daterangepicker/daterangepicker.css"/>
	<!-- for index -->
	<link href="/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet"/>
	<link href="/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>
	<!-- end for index -->
	<link href="/assets/css/main.css" media="screen" rel="stylesheet" type="text/css"/>

</head>

<?php
$bu=Yii::app()->request->baseUrl;
?>

<!-- END HEAD -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="navbar-inner">
<div class="container-fluid">
<!-- BEGIN LOGO -->
<a class="brand" href="<?= $bu ?>">
	SGLOT
<!--	<img src="/assets/img/logo.png" alt="Conquer"/>-->
</a>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="arrow"></span>
</a>
<!-- END RESPONSIVE MENU TOGGLER -->
<div class="top-nav">
<!-- BEGIN QUICK SEARCH FORM -->
<form class="navbar-search hidden-phone">
	<div class="search-input-icon">
		<input type="text" class="search-query dropdown-toggle" id="quick_search" placeholder="Search"
			   data-toggle="dropdown"/>
		<i class="icon-search"></i>
		<!-- BEGIN QUICK SEARCH RESULT PREVIEW -->
		<ul class="dropdown-menu extended">
			<li>
				<span class="arrow"></span>

				<p>Found 23 results</p>
			</li>
		</ul>
		<!-- END QUICK SEARCH RESULT PREVIEW -->
	</div>
</form>
<!-- END QUICK SEARCH FORM -->
<!-- BEGIN TOP NAVIGATION MENU -->
<ul class="nav pull-right" id="top_menu">
	<!-- BEGIN NOTIFICATION DROPDOWN -->
	<li class="dropdown" id="header_notification_bar">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="icon-warning-sign"></i>
			<span class="label label-important">15</span>
		</a>
		<ul class="dropdown-menu extended notification">
			<li>
				<p>You have 14 new notifications</p>
			</li>
			<li>
				<a href="#">
					<span class="label label-success"><i class="icon-plus"></i></span>
					New user registered.
					<span class="small italic">Just now</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="label label-important"><i class="icon-bolt"></i></span>
					Server #12 overloaded.
					<span class="small italic">15 mins</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="label label-warning"><i class="icon-bell"></i></span>
					Server #2 not respoding.
					<span class="small italic">22 mins</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="label label-info"><i class="icon-bullhorn"></i></span>
					Application error.
					<span class="small italic">40 mins</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="label label-important"><i class="icon-bolt"></i></span>
					Database overloaded 68%.
					<span class="small italic">2 hrs</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="label label-important"><i class="icon-bolt"></i></span>
					2 user IP addresses blacklisted.
					<span class="small italic">5 hrs</span>
				</a>
			</li>
			<li>
				<a href="#">See all notifications</a>
			</li>
		</ul>
	</li>
	<!-- END NOTIFICATION DROPDOWN -->
	<!-- BEGIN INBOX DROPDOWN -->
	<li class="dropdown" id="header_inbox_bar">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="icon-envelope-alt"></i>
			<span class="label label-success">5</span>
		</a>
		<ul class="dropdown-menu extended inbox">
			<li>
				<p>You have 12 new messages</p>
			</li>
			<li>
				<a href="#">
					<span class="photo"><img src="/assets/img/avatar-mini.png" alt="avatar"/></span>
									<span class="subject">
									<span class="from">Lisa Wong</span>
									<span class="time">Just Now</span>
									</span>
									<span class="message">
									Vivamus sed auctor nibh congue nibh.
									</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="photo"><img src="/assets/img/avatar-mini.png" alt="avatar"/></span>
									<span class="subject">
									<span class="from">Alina Fionovna</span>
									<span class="time">16 mins</span>
									</span>
									<span class="message">
									Vivamus sed auctor nibh congue.
									</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="photo"><img src="/assets/img/avatar-mini.png" alt="avatar"/></span>
									<span class="subject">
									<span class="from">Mila Rock</span>
									<span class="time">2 hrs</span>
									</span>
									<span class="message">
									Vivamus sed auctor nibh congue.
									</span>
				</a>
			</li>
			<li>
				<a href="#">See all messages</a>
			</li>
		</ul>
	</li>
	<!-- END INBOX DROPDOWN -->
	<li class="divider-vertical hidden-phone hidden-tablet"></li>

	<!-- begin user login form -->
	<?php if(app()->user->isGuest): ?>
		<?php
		$model=new LoginForm();
		$form=$this->beginWidget('CActiveForm',array(
			'id'=>'nav-bar_login-form',
			'enableClientValidation'=>true,
			'action'=>$this->createUrl('site/login'),
			//'enableAjaxValidation'=>true,
			'errorMessageCssClass'=>'has-error',
			'htmlOptions'=>array(
				'id'=>'login-form',
				'class'=>'navbar-form navbar-right',
				'role'=>'form',
			),
			'clientOptions'=>array(
				'id'=>'nav-bar_login-form',
				'validateOnSubmit'=>true,
				'errorCssClass'=>'has-error',
				'successCssClass'=>'has-success',
				'inputContainer'=>'.form-group',
				'validateOnChange'=>true
			),
		));
		?>
		<form>
			<div class="form-group">
				<?php echo $form->textField($model,'username',array('max-length'=>'10','class'=>'form-control','placeholder'=>'email or username')); ?>
			</div>
			<div class="form-group">
				<?php echo $form->passwordField($model,'password',array('max-length'=>'10','class'=>'form-control','type'=>'password','placeholder'=>'password')); ?>
			</div>

			<div class="float-left">
				<?php echo CHtml::submitButton('Login',array('id'=>'top-login','class'=>'btn btn-primary btn-sm')); ?>
				<a class="btn btn-primary  btn-sm  btn-warning"
				   href="<?php echo $this->createUrl('site/email_for_reset') ?>">Forgot!</a>
				<a class=" btn btn-primary btn-sm  btn-info"
				   href="<?php echo $this->createUrl('site/register') ?>">Sign Up</a>
			</div>
			<?php $this->endWidget(); ?>
		</form>
		<!-- end user login form -->
	<?php else: ?>
		<!-- BEGIN USER SETTINGS DROPDOWN -->
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-wrench"></i>
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#"><i class="icon-cogs"></i> System Settings</a></li>
				<li><a href="#"><i class="icon-pushpin"></i> Shortcuts</a></li>
				<li><a href="#"><i class="icon-trash"></i> Trash</a></li>
			</ul>
		</li>
		<!-- END USER SETTINGS DROPDOWN -->

		<li class="divider-vertical hidden-phone hidden-tablet"></li>
		<li class="divider-vertical hidden-phone hidden-tablet"></li>
		<!-- BEGIN USER LOGIN DROPDOWN -->
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-user"></i>
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#"><i class="icon-user"></i> <?=Yii::app()->user->name?> </a></li>
				<li class="divider"></li>
				<li><a href="<?=$bu?>/user/logout"><i class="icon-key"></i> Log Out</a></li>
			</ul>
		</li>
		<!-- END USER LOGIN DROPDOWN -->
	<?php
	endif;
	?>
</ul>
<!-- END TOP NAVIGATION MENU -->
</div>
</div>
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div id="container" class="row-fluid">
	<!-- BEGIN SIDEBAR -->
	<div id="sidebar" class="nav-collapse collapse">
		<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
		<div class="navbar-inverse">
			<form class="navbar-search visible-phone">
				<input type="text" class="search-query" placeholder="Search"/>
			</form>
		</div>
		<!-- END RESPONSIVE QUICK SEARCH FORM -->
		<!-- BEGIN SIDEBAR MENU -->
		<ul>
			<li class="active">
				<a href="<?= $bu ?>">
					<i class="icon-home"></i> Home
				</a>
			</li>
			<li class="has-sub">
				<a href="javascript:;" class="">
					<i class="icon-bookmark-empty"></i> Manage
					<span class="arrow"></span>
				</a>
				<ul class="sub">
					<li><a class="" href="<?=$bu?>/user/admin">Users</a></li>
					<li><a class="" href="<?=$bu?>/location/admin">Locations</a></li>
					<li><a class="" href="<?=$bu?>/totoResult/admin">Toto Results</a></li>
					<li><a class="" href="<?=$bu?>/winningGroup/admin">Winning Groups</a></li>
				</ul>
			</li>
			<?php
			if(Yii::app()->user->isGuest):
				?>
				<li><a class="" href="<?= $bu ?>/site/register"><i class="icon-table"></i> Register</a></li>
			<?php endif;
			?>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN PAGE -->
	<div id="body">

		<?php echo $content; ?>

	</div>
	<!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div id="footer">
	2012 &copy; Conquer. Admin Dashboard Template.
	<div class="span pull-right">
		<span class="go-top"><i class="icon-arrow-up"></i></span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="/assets/js/jquery-1.8.2.min.js"></script>
<script src="/assets/jQuery-slimScroll/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/assets/jQuery-slimScroll/slimScroll.min.js"></script>
<script src="/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.blockui.js"></script>
<script src="/assets/js/jquery.cookie.js"></script>
<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="/assets/js/excanvas.js"></script>
<script src="/assets/js/respond.js"></script>
<![endif]-->
<!-- for index -->
<!--<script src="/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>-->
<!--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>-->
<!--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>-->
<!--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>-->
<!--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>-->
<!--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>-->
<!--<script src="/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>-->
<!--<script src="/assets/jquery-knob/js/jquery.knob.js"></script>-->
<!--<script src="/assets/flot/jquery.flot.js"></script>-->
<!--<script src="/assets/flot/jquery.flot.resize.js"></script>-->
<!-- end for index -->
<script src="/assets/js/jquery.peity.min.js"></script>
<script type="text/javascript" src="/assets/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="/assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.pulsate.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/assets/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="/assets/js/app.js"></script>
<script>
	jQuery(document).ready(function () {
		// initiate layout and plugins
//		App.setMainPage(true);
		App.init();
	});
</script>
</body>

</html>
