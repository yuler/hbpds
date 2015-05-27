@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">{{ trans('portal.header.home') }}&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li><a href="#">{{ trans('portal.header.about') }}&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li class="active">{{ trans('portal.header.new') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<ul class="left-menu">
						<li><a href="/introduction">{{ trans('portal.header.introduction') }}</a></li>
						<li><a href="/contact">{{ trans('portal.header.contact') }}</a></li>
						<li class="active"><a href="">{{ trans('portal.header.new') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
					<h2>{{ $new->title }}</h2>
					<div class="data">{{ date('Y-m-d', strtotime($new->published_at)) }}</div>
					<br>
					<div>
						{!! $new->content !!}
					</div>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		.left-menu{
	  		width: 165px!important;
	  	}
	  	.content{
	  		width: 975px!important;
	  	}
	</style>
@endsection