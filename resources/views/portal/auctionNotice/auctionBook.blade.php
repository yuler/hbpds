@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">{{ trans('portal.header.auction-notice') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.auction-book') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<ul class="left-menu">
						<li><a href="/auction-guide">{{ trans('portal.header.auction-guide') }}</a></li>
						<li><a href="/transaction-read">{{ trans('portal.header.transaction-read') }}</a></li>
						<li><a href="/auction-reference">{{ trans('portal.header.auction-reference') }}</a></li>
						<li class="active"><a href="/auction-book">{{ trans('portal.header.auction-book') }}</a></li>
					</ul>
				</div>
				<div class="col-md-10 content">
					<h1>拍卖委托书</h1>
					<p style="text-align: right;"><a href="/download-book">下載委託書</a></p>
					<img src="/imgs/auctionBook.png" alt="" style="width:100%;">
				</div>
			</div>
		</div>
	</div>
@endsection