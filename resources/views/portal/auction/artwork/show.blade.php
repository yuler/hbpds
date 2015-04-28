@extends('portal.app')

@section('content')
	<div id="artworkShow">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">首頁</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/">拍賣日曆</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/">私人珍藏</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ $artwork['art_name'] }}</li>
				</ol>
			</div>
		</div>
		<div class="container content">
			<p>编号： LOT {{ $artwork['art_lot'] }}</p>
			@if(sizeof($artwork->atts) > 0)
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				    	@foreach($artwork->atts as $key => $att)
					        <li data-target="#carousel-id" data-slide-to="{{ $key }}" class=""></li>
				    	@endforeach
				    </ol>
				    <div class="carousel-inner">
				    	@foreach($artwork->atts as $key => $att)
				    		<div class="item {{ $key == 0 ? 'active' : ''}}">
					            <img src="{{ $att['att_path']}}" style="height:500px;">
					        </div>
				    	@endforeach
				    </div>
					@if(sizeof($artwork->prev()) > 0)
				    	<a class="left carousel-control" href="/artwork/{{$artwork->prev()[0]['id']}}" data-slide="prev"><i class="fa fa-angle-left fa-4x"></i></a>
					@endif
					@if(sizeof($artwork->next()) > 0)
				    	<a class="right carousel-control" href="/artwork/{{$artwork->next()[0]['id']}}" data-slide="next"><i class="fa fa-angle-right fa-4x"></i></a>
				    @endif
				</div>
			@endif

			<div class="row info">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-4">
							<h3 style="display:inline-block;">{{ $artwork['art_name'] }}</h3>  
							&nbsp;&nbsp;&nbsp;&nbsp;LOT {{ $artwork['art_lot'] }}
						</div>
						@if(sizeof($artwork->atts) > 0)
							<div class="col-md-8">
								<ul class="clearfix">
									@foreach($artwork->atts as $att)
										<li><img src="{{ $att['att_path']}}" alt="" style="height:150px"></li>
									@endforeach
								</ul>
								<a class="left carousel-control" href="#carousel-id" data-slide="prev"><i class="fa fa-angle-left fa-2x"></i></a>
				    			<a class="right carousel-control" href="#carousel-id" data-slide="next"><i class="fa fa-angle-right fa-2x"></i></a>
							</div>
						@endif
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h3>估价: {{ $artwork['begin_price_hkd'] }} HKD</h3>
					<h3>{{ $artwork['begin_price_rmb'] }} CNY</h3>
				</div>
			</div>
			<hr>
			<div class="row description">
				<div class="col-md-10 col-md-offset-1">
					<h3>作品描述</h3>
					<article>
						{{ $artwork['art_sumarry'] }}
					</article>
				</div>
			</div>
			<hr>
			<div class="row other-link">
				<div class="col-md-10 col-md-offset-1">
					<a href="/auction/preview/asa/{{$artwork->asa['id']}}" style="float:right;color:black;text-decoration: none;">查看同专场其他商品</a>
				</div>
			</div>
			<hr>
		</div>
	</div>
@endsection