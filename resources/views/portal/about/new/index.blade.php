@extends('portal.app')

@section('content')
<style type="text/css">
.aaa{
height:181;
border:1px solid red;
}
.zx_sc ul li {
  float: left;
  margin-right: 11px;
  display: inline;
  margin-bottom: 32px;
}
.pdy_zx_sc_img {
  width: 180px;
max-height: 200px;

  overflow: hidden;
  <!--border: 1px solid #e4e4e4;-->
  position: relative;
  text-align: center;
}
.bSpan {
  display: inline-block;
  width: 0;
  height: 100%;
  overflow: hidden;
  margin-left: -1px;
  font-size: 0;
  line-height: 0;
  vertical-align: middle;
}
.pdy_zx_sc_img img {
  max-width: 175px;
  max-height: 175px;
  position: relative;
  vertical-align: middle;
}
.left-menu{
	width: 165px!important;
}
.content{
	width: 975px!important;
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
				<div class="col-xs-2">
					<ul class="left-menu">
						<li><a href="/introduction">{{ trans('portal.header.introduction') }}</a></li>
						<li><a href="/contact">{{ trans('portal.header.contact') }}</a></li>
						<li class="active"><a href="">{{ trans('portal.header.new') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
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
<div class="zx_sc">
                    	<ul id="new_art"> 
										@foreach ($new->imgList as $img)
<li>
<div class="pdy_zx_sc_img">
<span class="bSpan"></span>
												{!!$img !!}
</div>
</li>

										@endforeach
</ul>
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
