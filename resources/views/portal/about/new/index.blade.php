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
				<div class="col-md-2">
					<ul class="left-menu">
						<li><a href="/introduction">{{ trans('portal.header.introduction') }}</a></li>
						<li><a href="/contact">{{ trans('portal.header.contact') }}</a></li>
						<li class="active"><a href="">{{ trans('portal.header.new') }}</a></li>
					</ul>
				</div>
				<div class="col-md-10 content">
					<h1>新聞中心</h1>
					<ul>
						@foreach ($news as $new)
							<li>
								<div class="data">
									{{ date('Y-m-d', strtotime($new->published_at)) }}
								</div>
								<div class="html">
									<p><a href="/new/{{ $new->id }}">{{ $new->title }}</a></p>
									<article>
									{{ str_limit($new->article, $limit = 100, $end = '...') }}
									</article>
									<div class="pic-list">
										@foreach ($new->imgList as $img)
											<div class="col-md-3">
												{!!$img !!}
											</div>
										@endforeach
									</div>
								</div>
							</li>
						@endforeach
					</ul>
						
					<div style="float:right;">
						{!! $news->render() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection