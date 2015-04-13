<header>
	<nav class="navbar navbar-default navbar-logo" role="navigation">
		<div class="container page-index">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
					<img src="/imgs/logo.jpg" alt="logo" class="logo">
					<img src="/imgs/logo-text.png" alt="logo" class="logo-text">
				</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				
				<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" role="search">
						<div class="input-group">
							<input type="text" id="email" name="email" class="form-control" placeholder="{{ trans('header.search') }}">
							<a type="submit" class="btn input-group-addon">
								&nbsp;&nbsp;<i class="fa fa-search"></i>&nbsp;&nbsp;
							</a>
						</div>
					</form>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<nav class="navbar navbar-default navbar-menu" role="navigation">
		<div class="container">
			<ul class="nav navbar-nav navbar-left">
				<li class="active"><a href="/">{{ trans('header.home') }}</a></li>
				<li class="dropdown">
					<a href="#">
						拍賣日曆&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/auction/preview">拍賣預展</a></li>
						<li><a href="/auction/history">歷史拍賣</a></li>
					</ul>
				</li>
				<li><a href="#">網上拍賣</a></li>
				<li class="dropdown">
					<a href="#">
						拍賣須知&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/buy-service">購買服務</a></li>
						<li><a href="/auction-guide">拍賣指南</a></li>
						<li><a href="/transaction-read">成交必讀</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#">
						關於我們&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/introduction">橫濱香港簡介</a></li>
						<li><a href="/contact">聯繫方式</a></li>
						<li><a href="/new">新聞中心</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="/lang/zh-TW" class="{{ session('locale') == 'zh-TW' ? 'active' : '' }}">繁體</a>
					|
					<a href="/lang/en" class="{{ session('locale') == 'en' ? 'active' : '' }}" >English</a>
				</li>
			</ul>
		</div>
	</nav>

</header>