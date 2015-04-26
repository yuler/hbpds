@extends('portal.app')

@section('content')
	<div id="asaPreview">
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
												<li class="{{ $asa['id'] === $preview_asa['id'] ? 'active':''}}">
													<a href="/auction/preview/asa/{{ $asa['id'] }}">{{ $asa['asa_name'] }}</a>
												</li>
											@endforeach
										</ul>
									</div>
								@endforeach
							</li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-8 content">
					<h1>{{ $preview_asa['asa_name'] }}</h1>

					<p class="address"><span>拍卖会场: </span> {{ $preview_asa['asa_addr'] }}</p>
					<p class="address"><span>预览会场: </span> {{ $preview_asa['asa_addr'] }}</p>

					<p class="time">
						{{ date('y月d', strtotime($preview_asa['begin_time'])) }}-{{ date('d日', strtotime($preview_asa['end_time'])) }} 开拍
					</p>
					<p class="time">
						{{ date('y月d', strtotime($preview_asa['preview_begin_time'])) }}-{{ date('d日', strtotime($preview_asa['preview_end_time'])) }} 预展
					</p>

					<hr>

					<h3>拍卖顺序</h3>
					<ul>
						@foreach($preview_asa->auction->asasByGroup($preview_asa['asa_group']) as $asa)
							<li>{{ $asa['asa_name'] }}</li>
						@endforeach
					</ul>
					<h3 class="goOnline"><a href="/online">参加网上拍卖  <i class="fa fa-arrow-right"></i></a></h3>

					<hr>

					<div class="row productList">
						@foreach($preview_asa->artworks() as $artwork)
							{{dd($artwork)}}
							<div class="col-md-4">
								<a href="/artwork/123">
									<img src="/imgs/n1.png" alt="">
									<div>
										<p>LOT 1</p>
										<p>估值： 900，000 HKD</p>
									</div>
								</a>
								<div class="info">
									<p>朝代：当代</p>
									<p>作者：佚名</p>
									<p>名称：汽车女司机</p>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection