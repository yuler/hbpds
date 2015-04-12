@extends('portal.app')

@section('content')
	<div id="index">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
		        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
		        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		    </ol>
		    <div class="carousel-inner">
		        <div class="item">
		            <img src="/imgs/carousel.jpg">
		        </div>
		        <div class="item">
		            <img src="/imgs/carousel.jpg">
		        </div>
		        <div class="item active">
		            <img src="/imgs/carousel.jpg">
		        </div>
		    </div>
		    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		
		<div class="container product-list">
			<div class="col-md-4">
				<img src="/imgs/p1.png" alt="">
			</div>
			<div class="col-md-4">
				<img src="/imgs/p2.png" alt="">
			</div>
			<div class="col-md-4">
				<img src="/imgs/p3.png" alt="">
			</div>
		</div>
	</div>
@endsection