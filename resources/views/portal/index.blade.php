<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>横滨</title>

		<!-- Bootstrap CSS -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container page-index">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="/imgs/logo.jpg" alt="logo">
						</a>
						<img src="/imgs/logo-text.png" alt="logo">
					</div>
				
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">首頁</a></li>
							<li><a href="#">拍賣日曆</a></li>
							<li><a href="#">網上拍賣</a></li>
							<li><a href="#">拍賣須知</a></li>
							<li><a href="#">關於我們</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#">繁體</a>
							</li>
							<li>
								<a href="#">English</a>
							</li>
							<!-- <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li> -->
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>
		
		<div class="container">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
			        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
			        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			    </ol>
			    <div class="carousel-inner">
			        <div class="item">
			            <img src="/imgs/carousel.jpg">
			        </div>
			        <div class="item">
			            <img src="/imgs/carousel.jpg">
			        </div>
			        <div class="item active">
			            <img src="/imgs/carousel.jpg">
			        </div>
			    </div>
			    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
		<!-- jQuery -->
		<script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>