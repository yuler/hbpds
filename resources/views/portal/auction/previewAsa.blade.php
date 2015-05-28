@extends('portal.app')

@section('content')
	<div id="asaPreview">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
                                  <li><a href="/auction/preview">{{ trans('portal.header.auction-calendar') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
                                  <li class="active"><a href='/auction/preview'>{{ trans('portal.header.auction-preview') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
                                  <li>&nbsp;&nbsp;</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-4 left-menu">
					<h1>2015 年</h1>
					<ul>
						@foreach( $auctions as $auction)
							<li>
								<h4>{{ $auction['auction_name'] }}</h4>
								<h6 style="color:#999;">拍賣會場：{{ $auction['auction_addr'] }}</h6>
								<h6 style="color:#999;">預展會場：{{ $auction['auction_preview_addr'] }}</h6>
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
														<span style="float:left;background-image:url('/imgs/today_bg.png');height:35px;width:35px;">
															<span style="line-height: 35px;color:white;font-size:14px;">今天&nbsp;</span>
														</span>
													@endif
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="/auction/preview/asa/{{ $asa['id'] }}" style="display: inline-block;">{{ $asa['asa_name'] }}</a>
												</li>
											@endforeach
										</ul>
									</div>
								@endforeach
							</li>
						@endforeach
					</ul>
				</div>
				<div class="col-xs-8 content">
					<h1>{{ $preview_asa['asa_name'] }}</h1>
					
					@if(strlen($preview_asa['asa_preview_addr']) == 0 || 
						strlen($preview_asa['asa_addr']) == 0 || 
						['asa_addr'] == $preview_asa['asa_preview_addr'])
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

					<!-- <h3>拍卖顺序</h3>
					<ul>
						@foreach($preview_asa->auction->asasByGroup($preview_asa['asa_group']) as $asa)
							<li>{{ $asa['asa_name'] }}</li>
						@endforeach
					</ul> -->

					@if(strlen($preview_asa['asa_online_url'] > 0))
						<h3 class="goOnline"><a href="{{ $preview_asa['asa_online_url'] }}" target="_blank">参加网上拍卖  <i class="fa fa-arrow-right"></i></a></h3>
					@endif
					<hr>

					<div class="row productList">
						@foreach($preview_asa->artworks() as $artwork)
							<div class="col-xs-4">
								<a href="/artwork/{{$artwork['id']}}" style="display:block;">
									<div style="width:100%;height:229px;overflow: hidden;position: relative;text-align: center;border-top:3px solid #eee;padding:0px;">
										@if(sizeof($artwork->atts) > 0)
											<span style="display: inline-block;width: 0;height: 100%;overflow: hidden;margin-left: -1px;font-size: 0;line-height: 0;vertical-align: middle;"></span>
											<img src="{{ $artwork->atts[0]['att_path'] }}" alt="" style="max-width:208px;max-height: 202px;position: relative;vertical-align: middle;">
										@else
											<center style="line-height: 228px;">
												<img src="/imgs/n1.png" alt="" style="max-width:100%;height: 200px;width:inherit;" onload="AutoResizeImage(222,222,this)">
											</center>
										@endif
									</div>
									<div style="">
										<p>LOT {{ $artwork['art_lot'] }}</p>
										<p style="height:44px;">HKD {{number_format($artwork['begin_price_hkd'])}} - {{number_format($artwork['end_price_hkd'])}}</p>
									</div>
								</a>
								<div class="info" style="margin:3px;height: 92px;width: 86%;">
									<p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{ $artwork['art_dynasty'] }}</p>
									<p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{ $artwork['art_author'] }}</p>
									<p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{ $artwork['art_name'] }}</p>
								</div>
							</div>
						@endforeach
					</div>
					{!! $preview_asa->artworks()->render() !!}
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function AutoResizeImage(maxWidth,maxHeight,objImg){
			var img = new Image();
			img.src = objImg.src;
			var hRatio;
			var wRatio;
			var Ratio = 1;
			var w = img.width;
			var h = img.height;
			ratio = w / h;
			// console.log(maxWidth);
			w = 222 / ratio;
			h = 222 * ratio;
			console.log(w,h);
			objImg.height = h;
			objImg.width = w;
		}
	</script>
@endsection
