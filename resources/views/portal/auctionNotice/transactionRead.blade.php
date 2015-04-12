@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">首頁&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li><a href="#">拍賣須知&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li class="active">成交必讀</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<ul class="left-menu">
						<li><a href="/buy-service">購買服務</a></li>
						<li><a href="/auction-guide">拍賣指南</a></li>
						<li class="active"><a href="/transaction-read">成交必讀</a></li>
					</ul>
				</div>
				<div class="col-md-10 content">
					成交必讀
				</div>
			</div>
		</div>
	</div>
@endsection