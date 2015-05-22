@extends('portal.app')
@section('content')
<style type='text/css'>
.kc_fm {
  height: 149px;
}
.ul {
  list-style: none;
}
.li{
float:left;
}
.pdy_zt_img {
  height: 154px;
}
</style>
<script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
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
								<div class="html" style="min-width:800px;">
									<p><a href="/new/{{ $new->id }}">{{ $new->title }}</a></p>
									<article>
									{{ str_limit($new->article, $limit = 100, $end = '...') }}
									</article>
									<div class="pic-list">
			<div class="kc_fm">

                   	<ul class='ul'>
                        </div>
										@foreach ($new->imgList as $img)
										 
			<li class="li">{!!$img!!}</li>

											
										@endforeach

			</ul>
			</div>
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
<script typle="text/javascript">
$(function(){
var imgs = $('.li img');
$.each(imgs,function(i,item){
	$(item).addClass("pdy_zt_img");
});

}
);
</script>

@endsection
