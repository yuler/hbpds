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
					<form class="navbar-form navbar-left" role="search" action="/search">
						<div class="input-group">
							<input type="text" id="email" name="kw" class="form-control" placeholder="{{ trans('portal.header.search') }}">
							<a href="javascript:void(0);" class="btn input-group-addon" onclick="$('form').submit();">
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
				<li class="{{ isset($subnav) && $subnav == 'home' ? 'active' : '' }}" ><a href="/">{{ trans('portal.header.home') }}</a></li>
				<li class="dropdown {{ isset($subnav) && $subnav == 'auction' ? 'active' : '' }}">
					<a href="#">
						{{ trans('portal.header.auction-calendar') }}&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/auction/preview">{{ trans('portal.header.auction-preview') }}</a></li>
						<li><a href="/auction/history">{{ trans('portal.header.auction-history') }}</a></li>
					</ul>
				</li>
				<li class="{{ isset($subnav) && $subnav == 'online' ? 'active' : '' }}"><a href="/online">{{ trans('portal.header.auction-online') }}</a></li>
				<li class="dropdown {{ isset($subnav) && $subnav == 'auctionNotice' ? 'active' : '' }}">
					<a href="#">
						{{ trans('portal.header.auction-notice') }}&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/buy-service">{{ trans('portal.header.buy-service') }}</a></li>
						<li><a href="/auction-guide">{{ trans('portal.header.auction-guide') }}</a></li>
						<li><a href="/transaction-read">{{ trans('portal.header.transaction-read') }}</a></li>
						<li><a href="/auction-book">{{ trans('portal.header.auction-book') }}</a></li>
					</ul>
				</li>
				<li class="dropdown {{ isset($subnav) && $subnav == 'about' ? 'active' : '' }}">
					<a href="#">
						{{ trans('portal.header.auction-calendar') }}&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/introduction">{{ trans('portal.header.auction-calendar') }}</a></li>
						<li><a href="/contact">{{ trans('portal.header.auction-calendar') }}</a></li>
						<li><a href="/new">{{ trans('portal.header.auction-calendar') }}</a></li>
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