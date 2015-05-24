@extends('portal.app')

@section('content')
	<div id="index">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		    	@foreach($banners as $key => $banner)
			        <li data-target="#carousel-id" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : ''}}"></li>
		        @endforeach
		    </ol>
		    <div class="carousel-inner">
		    	@foreach($banners as $key => $banner)
			        <div class="item {{ $key == 0 ? 'active' : ''}}">
			        	<a href="{{$banner['target_url']}}" target="_blank">
			            	<img src="{{$banner['image_url']}}" style="height:600px;">
			            </a>
			        </div>
		        @endforeach
		    </div>
		    <a class="left carousel-control" href="#carousel-id" data-slide="prev">
		    	<img src="/imgs/banner-left.gif" alt="" style="position: absolute;top: 50%;  filter: alpha(opacity=50);-moz-opacity: 0.5;-khtml-opacity: 0.5;opacity: 0.5;">
		    </a>
		    <a class="right carousel-control" href="#carousel-id" data-slide="next">
		    	<img src="/imgs/banner-right.gif" alt="" style="position: absolute;top: 50%;  filter: alpha(opacity=50);-moz-opacity: 0.5;-khtml-opacity: 0.5;opacity: 0.5;">
		    </a>
		</div>
		
		<div class="container product-list">
			@foreach($ads as $key => $ad)
				<div class="col-md-4">
					<a href="{{$ad['target_url']}}" target="_blank" style="height:270px;">
						<img src="{{ $ad['image_url'] }}" alt="">
					</a>
				</div>
			@endforeach
		</div>
	</div>
@endsection