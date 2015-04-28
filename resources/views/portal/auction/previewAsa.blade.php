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
											{{ date('m月d日', strtotime($group['beginDate'])) }}-{{ date('m月d日', strtotime($group['endDate'])) }}
										</h3>
										<ul>
											@foreach( $auction->asasByGroup($group['asa_group']) as $asa)
												<li class="{{ $asa['id'] === $preview_asa['id'] ? 'active':''}}">
													@if( date('Y-m-d H:i:s') > $asa['preview_begin_time'] && 
														date('Y-m-d H:i:s') < $asa['preview_end_time'] )
														<span style="float:left;margin-left:100px;background-image:url('/imgs/today_bg.png');height:35px;width:35px;">
															<span style="line-height: 35px;color:white;font-size:14px;">今天&nbsp;</span>
														</span>
													@endif
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
					
					@if(strlen($preview_asa['asa_preview_addr']) == 0 || 
						strlen($asa['asa_addr']) == 0 || 
						['asa_addr'] == $asa['asa_preview_addr'])
						<p>預展\拍賣会场</p>
						<p>{{ $preview_asa['asa_addr']}}</p>
					@else
						<p class="address"><span>拍卖会场: </span> {{ $preview_asa['asa_addr'] }}</p>
						<p class="address"><span>预览会场: </span> {{ $preview_asa['asa_preview_addr'] }}</p>
					@endif

					<p class="time">
						{{ date('m月d日', strtotime($preview_asa['begin_time'])) }}-{{ date('m月d日', strtotime($preview_asa['end_time'])) }} 开拍
					</p>
					<p class="time">
						{{ date('m月d日', strtotime($preview_asa['preview_begin_time'])) }}-{{ date('m月d日', strtotime($preview_asa['preview_end_time'])) }} 预展
					</p>

					<hr>

					<h3>拍卖顺序</h3>
					<ul>
						@foreach($preview_asa->auction->asasByGroup($preview_asa['asa_group']) as $asa)
							<li>{{ $asa['asa_name'] }}</li>
						@endforeach
					</ul>

					@if(strlen($preview_asa['asa_online_url'] > 0))
						<h3 class="goOnline"><a href="{{ $preview_asa['asa_online_url'] }}" target="_blank">参加网上拍卖  <i class="fa fa-arrow-right"></i></a></h3>
					@endif
					<hr>

					<div class="row productList">
						@foreach($preview_asa->artworks() as $artwork)
							<div class="col-md-4">
								<a href="/artwork/{{$artwork['id']}}">
									@if(sizeof($artwork->atts) > 0)
										<img src="{{ $artwork->atts[0]['att_path'] }}" alt="">
									@else
										<img src="/imgs/n1.png" alt="">
									@endif
									<div>
										<p>LOT {{ $artwork['art_lot'] }}</p>
										<p>估值： 900，000 HKD</p>
									</div>
								</a>
								<div class="info">
									<p>朝代： {{ $artwork['art_dynasty'] }}</p>
									<p>作者： {{ $artwork['art_author'] }}</p>
									<p>名称： {{ $artwork['art_name'] }}</p>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection