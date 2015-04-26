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
					<h1>2015 年</h1>
					<ul>
						@foreach( $auctions as $auction)
							<li>
								<h4>{{ $auction['auction_name'] }}</h4>
								<hr>
								@foreach( $auction->auctionGroup() as $group)
									<div>
										<h3>
											{{ date('m月d', strtotime($group['beginDate'])) }}-{{ date('d日', strtotime($group['endDate'])) }}
										</h3>
										<ul>
											@foreach( $auction->asasByGroup($group['asa_group']) as $asa)
												<li><a href="/auction/preview/asa/{{ $asa['id'] }}">{{ $asa['asa_name'] }}</a></li>
											@endforeach
										</ul>
									</div>
								@endforeach
							</li>
						@endforeach
					</ul>
					<hr>
					<h1><a href="/auction/history">歷史拍賣</a></h1>
					<hr>
				</div>
				<div class="col-md-8 content">
					@foreach($asas as $asa)
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
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection