@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">首頁&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li><a href="#">關於我們&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li class="active">新聞中心</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<ul class="left-menu">
						<li><a href="">橫濱香港簡介</a></li>
						<li><a href="">聯繫方式</a></li>
						<li class="active"><a href="">新聞中心</a></li>
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
									<p>{{ $new->title }}</p>
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