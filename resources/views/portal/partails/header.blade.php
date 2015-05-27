<header>
	<nav class="navbar navbar-default navbar-logo" role="navigation">
		<div class="container page-index">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" style="width:1170px;display:inline-block;">
				<a class="navbar-brand" href="/" style="padding:0px;">
					<img src="/imgs/logo.jpg" alt="logo" class="logo">
					<img src="/imgs/logo-text.png" alt="logo" class="logo-text">
					<p style="margin-left: 7px;margin-top: -10px;"><img src="/imgs/logo-t.jpg" alt="logo"></p>
				</a>

				<ul class="nav navbar-nav navbar-right" style="padding-right:15px;">
					<li>
					<form class="navbar-form navbar-left" role="search" action="/search" style="width: 228px;">
						<div class="input-group">
							<input type="text" id="email" name="kw" class="form-control" placeholder="{{ trans('portal.header.search') }}">
							<a href="javascript:void(0);" class="btn input-group-addon" onclick="$('form').submit();">
								&nbsp;&nbsp;<i class="fa fa-search"></i>&nbsp;&nbsp;
							</a>
						</div>
					</form>
					</li>
				</ul>
			</div>
			
		</div>
	</nav>
	
	<nav class="navbar navbar-default navbar-menu" role="navigation">
		<div class="container" style="">
			<ul class="nav navbar-nav navbar-left" style="width:1170px;">
				<li class="menu {{ isset($subnav) && $subnav == 'home' ? 'active' : '' }}" ><a href="/">{{ trans('portal.header.home') }}</a></li>
				<li class="menu dropdown {{ isset($subnav) && $subnav == 'auction' ? 'active' : '' }}">
					<a href="#">
						{{ trans('portal.header.auction-calendar') }}&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/auction/preview">{{ trans('portal.header.auction-preview') }}</a></li>
						<li><a href="/auction/history">{{ trans('portal.header.auction-history') }}</a></li>
					</ul>
				</li>
				<li class="menu {{ isset($subnav) && $subnav == 'online' ? 'active' : '' }}"><a href="/online">{{ trans('portal.header.auction-online') }}</a></li>
				<li class="menu dropdown {{ isset($subnav) && $subnav == 'auctionNotice' ? 'active' : '' }}">
					<a href="#">
						{{ trans('portal.header.auction-notice') }}&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/auction-guide">{{ trans('portal.header.auction-guide') }}</a></li>
						<li><a href="/transaction-read">{{ trans('portal.header.transaction-read') }}</a></li>
						<li><a href="/auction-reference">{{ trans('portal.header.auction-reference') }}</a></li>
						<li><a href="/auction-book">{{ trans('portal.header.auction-book') }}</a></li>
					</ul>
				</li>
				<li class="menu dropdown {{ isset($subnav) && $subnav == 'about' ? 'active' : '' }}">
					<a href="#">
						{{ trans('portal.header.about') }}&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/introduction">{{ trans('portal.header.introduction') }}</a></li>
						<li><a href="/contact">{{ trans('portal.header.contact') }}</a></li>
						<li><a href="/new">{{ trans('portal.header.new') }}</a></li>
					</ul>
				</li>
				<li class="lang" style="float:right;color:#ffcc00;padding-right: 15px;" id="lang">
					<a href="/lang/zh-TW" class="{{ session('locale') == 'zh-TW' ? 'active' : '' }}" style="padding: 3px 15px;" id="chinese">中文</a>
					|
					<a href="/lang/en" class="{{ session('locale') == 'en' ? 'active' : '' }}" style="padding: 3px 15px;" id="english">English</a>
				</li>
			</ul>
			
			<style type="text/css">
				#lang a.active{
					color: white!important;
				}
				#lang a{
					color: #ffcc00!important;
				}
				#chinese:hover{
					color: white!important;
				}
				#english:hover{
					color: white!important;
				}
				li.lang a{
					font-size: 12px;
					padding:0px;
				}
				li.lang a.active{
					background-color: inherit !important;
					padding: 3px 15px;
					margin: 12px 0;
					border-radius: 5px;
					color: white;
					background-color: #4F4F4F !important;					
				}
			</style>
<!-- 	
			header nav.navbar-menu ul.navbar-right {
    padding-right: 15px; }
    header nav.navbar-menu ul.navbar-right li {
      color: #ffcc00; }
      header nav.navbar-menu ul.navbar-right li a {
        font-size: 12px;
        padding: 3px 0px;
        margin: 12px 10px;
        color: #ffcc00;
        display: inline-block; }
        header nav.navbar-menu ul.navbar-right li a:hover {
          color: white; }
        header nav.navbar-menu ul.navbar-right li a.active {
          background-color: inherit !important;
          padding: 3px 15px;
          margin: 12px 0;
          border-radius: 5px;
          color: white;
          background-color: #4F4F4F !important; }
          header nav.navbar-menu ul.navbar-right li a.active:hover {
            color: white; } -->
		</div>
	</nav>

</header>