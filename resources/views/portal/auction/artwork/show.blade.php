@extends('portal.app')

@section('content')
	<div id="artworkShow">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/auction/preview">{{ trans('portal.header.auction-calendar') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active"><a href='/auction/preview'>{{ trans('portal.header.auction-preview') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/auction/preview/asa/{{$artwork->asa['id']}}">{{ $artwork->asa['asa_name'] }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ $artwork['art_name'] }}</li>
				</ol>
			</div>
		</div>
		<div class="container content">
			<p>編號： LOT {{ $artwork['art_lot'] }}</p>
			@if(sizeof($artwork->atts) > 0)
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				    	@foreach($artwork->atts as $key => $att)
					        <li data-target="#carousel-id" data-slide-to="{{ $key }}" class=""></li>
				    	@endforeach
				    </ol>
				    <div class="carousel-inner">
				    	@foreach($artwork->atts as $key => $att)
				    		<div class="item {{ $key == 0 ? 'active' : ''}}" style="max-width:100%;height:500px;line-height: 500px;overflow: hidden;">
				    			<center>
					    			<a href="{{ $att['att_path']}}" target="_blank">
						            	<img src="{{ $att['att_path']}}" style="max-height:500px;max-width:95%;">
						            </a>
					            </center>
					        </div>
				    	@endforeach
				    </div>
					@if(sizeof($artwork->prev()) > 0)
				    	<a class="left carousel-control sm-hide" href="/artwork/{{$artwork->prev()[0]['id']}}" data-slide="prev">
				    		<span style="font-size:12px;right: -5%;">LOT&nbsp;&nbsp;{{$artwork->prev()[0]['art_lot']}}</span>
				    		<i class="fa fa-angle-left fa-4x"></i>
				    	</a>
					@endif
					@if(sizeof($artwork->next()) > 0)
				    	<a class="right carousel-control sm-hide" href="/artwork/{{$artwork->next()[0]['id']}}" data-slide="next">
				    		<i class="fa fa-angle-right fa-4x"></i>
				    		<span style="font-size:12px;left: 10%;">LOT&nbsp;&nbsp;{{$artwork->next()[0]['art_lot']}}</span>
				    	</a>
				    @endif
				</div>
			@endif
			<div class="row info">
				<div class="col-md-10 col-md-offset-1 col-sm-12" style="padding:0px;">
					<hr class="sm-hide">
					<div class="row">
						<div class="col-md-4" style="margin-top:35px;">
							<h2 style="display:inline-block;">{{ $artwork['art_name'] }}</h2>  
							&nbsp;&nbsp;&nbsp;&nbsp;LOT {{ $artwork['art_lot'] }}
						</div>
						@if(sizeof($artwork->atts) > 0)
							<div class="col-md-8 sm-hide">
								<ul class="clearfix" id="picList">
									@foreach($artwork->atts as $key => $att)
										@if($key < 3)
											<li>
												<a href="#" data-target="#carousel-id" data-slide-to="{{$key}}"style="display:block;color:white;">
													<div style="width:100%;height:229px;overflow: hidden;position: relative;text-align: center;border:3px solid #eee;padding:0px;">
														<span style="display: inline-block;width: 0;height: 100%;overflow: hidden;margin-left: -1px;font-size: 0;line-height: 0;vertical-align: middle;"></span>
														<img src="{{ $att['att_path']}}" alt="" style="width: auto;max-width: 95%;max-height: 202px;position: relative;vertical-align: middle;">
													</div>
												</a>
											</li>
										@else
											<li class="hide">
												<a href="#" data-target="#carousel-id" data-slide-to="{{$key}}"style="display:block;color:white;">
													<div style="width:100%;height:229px;overflow: hidden;position: relative;text-align: center;border:3px solid #eee;padding:0px;">
														<span style="display: inline-block;width: 0;height: 100%;overflow: hidden;margin-left: -1px;font-size: 0;line-height: 0;vertical-align: middle;"></span>
														<img src="{{ $att['att_path']}}" alt="" style="width: auto;max-width: 95%;max-height: 202px;position: relative;vertical-align: middle;">
													</div>
												</a>
												<!-- <a href="#" data-target="#carousel-id" data-slide-to="{{$key}}" style="width:100%;height:229px;overflow: hidden;position: relative;text-align: center;border:3px solid #eee;padding:0px;display: block;line-height: 229px;">
													<img src="{{ $att['att_path']}}" alt="" style="  width: auto;padding:5px;height: 202px;position: relative;vertical-align: middle;">
												</a> -->
											</li>
										@endif
									@endforeach
								</ul>
								<a class="left carousel-control" id="toLeft" style="cursor: pointer;" data-page="1"><i class="fa fa-angle-left fa-2x"></i></a>
				    			<a class="right carousel-control" id="toRight" style="cursor: pointer;" data-page="1"><i class="fa fa-angle-right fa-2x"></i></a>
							</div>
						@endif
					</div>
					<hr>
					<div class="row" style="padding-left:15px;font-family: 华文细黑;">
						<h3 style="margin:0;line-height:40px;">{{ $artwork['art_age'] }}</h3>
						<h3 style="margin:0;line-height:40px;">{{ $artwork['art_author'] }}</h3>
						<br>
						<p style="line-height:30px;">{{ $artwork['art_name'] }}
							@if($artwork['art_name'] && $artwork['art_material'])
							<br>
							@endif
							{{ $artwork['art_material'] }}
						</p>
						<p style="line-height:30px;">{{ $artwork['art_size'] }} 
							@if( $artwork['art_code'] )
							({{ $artwork['art_code'] }})
							@endif
						</p>
						<br>
						<p style="line-height:24px;">{{ $artwork['art_seal'] }}
							@if($artwork['art_seal'] && $artwork['art_tizhi'])
							<br>
							@endif
							{{ $artwork['art_tizhi'] }}
						</p>
						<p style="line-height:24px;">{{ $artwork['art_annotation']}}</p>
						<br>
						<p style="line-height:30px;">{{ $artwork['art_source']}}</p>
						<p style="line-height:30px;">{{ $artwork['art_publish']}}</p>
						<br>
						@if( $artwork['begin_price_hkd'] && $artwork['begin_price_rmb'] )
						<p style="line-height:30px;">估價：</p>
						<p style="line-height:15px;">HKD: {{ number_format($artwork['begin_price_hkd']) }}-{{ number_format($artwork['end_price_hkd']) }}</p>
						<p style="line-height:15px;">CNY: {{ number_format($artwork['begin_price_rmb']) }}-{{ number_format($artwork['end_price_rmb']) }}</p>
						<br>
						@endif

						@if( $artwork['art_price_hkd'] != 0 && $artwork['art_price_rmb'] != 0 )
						<p style="line-height:30px;">成交價</p>
						<p style="line-height:15px;">HKD: {{ number_format($artwork['art_price_hkd']) }}</p>
						<p style="line-height:15px;">CNY: {{ number_format($artwork['art_price_rmb']) }}</p>
						@endif
					</div>
					<br>
					<div class="row description" style="padding-left:15px;line-height:30px;">
						{!! $artwork['art_sumarry'] !!}
					</div>
					<hr class="sm-hide">
					<div class="row other-link sm-hide">
						<a href="/auction/preview/asa/{{$artwork->asa['id']}}" style="padding-right:15px;float:right;color:black;text-decoration: none;font-family: 华文细黑;">查看同专场其他商品</a>
					</div>
					<hr class="sm-hide">
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		.description{
			font-family: 华文细黑;
		}
	</style>


@endsection
