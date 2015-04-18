@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">首頁</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">拍賣須知</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">拍賣指南</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<ul class="left-menu">
						<li><a href="/buy-service">購買服務</a></li>
						<li class="active"><a href="/auction-guide">拍賣指南</a></li>
						<li><a href="/transaction-read">成交必讀</a></li>
					</ul>
				</div>
				<div class="col-md-10 content">
					拍賣指南
				</div>
			</div>
		</div>
	</div>
@endsection