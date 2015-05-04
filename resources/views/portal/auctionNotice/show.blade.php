@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">首頁</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">拍賣須知</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">購買服務</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<ul class="left-menu">
						<li><a href="/auction-guide">拍賣規則</a></li>
						<li><a href="/transaction-read">成交必讀</a></li>
						<li class="active"><a href="/auction-reference">參考資料</a></li>
						<li><a href="/auction-book">拍卖委托书</a></li>
					</ul>
				</div>
				<div class="col-md-10 content">
					<h2>{{ $material->title }}</h2>
					<div class="data">{{ date('Y-m-d', strtotime($material->published_at)) }}</div>
					<br>
					<div>
						{!! $material->content !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection