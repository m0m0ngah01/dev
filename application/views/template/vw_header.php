<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>AdminLTE | Dashboard</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- bootstrap 3.0.2 -->
<link href="{base_url}adminLTE/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- font Awesome -->
<link href="{base_url}adminLTE/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="{base_url}adminLTE/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="{base_url}adminLTE/css/morris/morris.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="{base_url}adminLTE/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
<!-- fullCalendar -->
<link href="{base_url}adminLTE/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="{base_url}adminLTE/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="{base_url}adminLTE/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="{base_url}adminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>
<body class="skin-blue">
	<!-- header logo: style can be found in header.less -->
	<header class="header">
		<a href="top" class="logo">
			<!-- Add the class icon to your logo image or logo icon to add the margining -->
			TradeWorks Security
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</a>
			<div class="navbar-left">
				<ul class="nav nav-pills ">
					<li><a href="top"><i class="glyphicon glyphicon-home"></i> Home</a></li>
					<li><a href="top"><i class="glyphicon glyphicon-tasks"></i> 診断</a></li>
					<li><a href="#contact"><i class="glyphicon glyphicon-file"></i> クライアント管理</a></li>
					<li><a href="#contact"><i class="glyphicon glyphicon-user"></i> ユーザー管理</a></li>
					<li><a href="#contact"><i class="glyphicon glyphicon-question-sign"></i> HELP</a></li>
				</ul>
			</div>
			<div class="navbar-right">
				<ul class="nav nav-pills">
					<!-- Setting  -->
					<li><a href="#Setting">
							<i class="glyphicon glyphicon-cog"></i> <span>Setting</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="wrapper row-offcanvas row-offcanvas-left">