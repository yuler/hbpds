@extends('portal.app')

@section('content')
	<div id="auctionPreview">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">首頁</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/">拍賣日曆</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">拍賣預展</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 left-menu">
					@foreach($history_auction as $history)
						<br>
						<h1> {{ $history['year'] }} 年</h1>
						<br>
						<hr>
					@endforeach
				</div>
				<div class="col-md-8 content">
					@forelse($asas as $asa)
					    <div class="row">
							<div class="col-md-6">
								<a href="/auction/preview/asa/{{ $asa['id'] }}">
									<img src="{{ $asa['asa_image'] }}" alt="">
								</a>
							</div>
							<div class="col-md-6">
								<h3>{{ $asa['asa_name'] }}</h3>
								<p>預展\拍賣會</p>
								<p>{{ $asa['asa_addr']}}</p>
								<p>{{ $asa['begin_time']}} 開拍</p>
								<p>{{ $asa['preview_begin_time']}} 預覽</p>
							</div>
						</div>
					@empty
					    <div class="row" style="border:0px;min-height:300px;">
					    	<h1>暂无历史拍卖记录</h1>
					    </div>
					@endforelse
						

					{!! $asas->render() !!}
				</div>
			</div>
		</div>
	</div>
@endsection