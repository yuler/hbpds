@extends('portal.app')

@section('content')
	<div id="index">
		<div id="carousel-id" class="carousel slide container" data-ride="carousel" style="padding:0;">
		    <ol class="carousel-indicators">
		    	@foreach($banners as $key => $banner)
			        <li data-target="#carousel-id" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : ''}}"></li>
		        @endforeach
		    </ol>
		    <div class="carousel-inner">
		    	@foreach($banners as $key => $banner)
			        <div class="item {{ $key == 0 ? 'active' : ''}}">
			        	<a href="{{$banner['target_url']}}" target="_blank">
			            	<img src="{{$banner['image_url']}}" style="min-height:500px;">
			            </a>
			        </div>
		        @endforeach
		    </div>
		    <a class="left carousel-control" href="#carousel-id" data-slide="prev">
		    	<img src="/imgs/banner-left.gif" alt="" style="position: absolute;top: 50%;  filter: alpha(opacity=50);-moz-opacity: 0.5;-khtml-opacity: 0.5;opacity: 0.5;  left: 20%;">
		    </a>
		    <a class="right carousel-control" href="#carousel-id" data-slide="next">
		    	<img src="/imgs/banner-right.gif" alt="" style="position: absolute;top: 50%;  filter: alpha(opacity=50);-moz-opacity: 0.5;-khtml-opacity: 0.5;opacity: 0.5;">
		    </a>
		</div>
		<br><br>
		<div class="container product-list" style="padding:0;">
			<div class="row">
			@foreach($ads as $key => $ad)
				<div class="col-xs-4">
					<a href="{{$ad['target_url']}}" style="display:block;height:229px;color:white;" target="_blank">
						<div style="width:100%;height:229px;overflow: hidden;position: relative;text-align: center;border:3px solid #eee;padding:0px;">
							<span style="display: inline-block;width: 0;height: 100%;overflow: hidden;margin-left: -1px;font-size: 0;line-height: 0;vertical-align: middle;"></span>
							<img src="{{ $ad['image_url'] }}" alt="" style="width: auto;max-width: 95%;max-height: 202px;position: relative;vertical-align: middle;">
						</div>
					</a>
				</div>
			@endforeach
			</div>
		</div>
		<br><br>
	</div>
@endsection