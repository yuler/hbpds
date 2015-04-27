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
		    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		
		<div class="container product-list">
			@foreach($ads as $key => $ad)
				<div class="col-md-4">
					<a href="{{$ad['target_url']}}" target="_blank">
						<img src="{{ $ad['image_url'] }}" alt="">
					</a>
				</div>
			@endforeach
		</div>
	</div>
@endsection