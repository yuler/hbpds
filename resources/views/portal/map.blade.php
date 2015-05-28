@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">首頁&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li class="active">{{ trans('portal.footer.map') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<ul class="left-menu">
						<li class="active"><a href="/introduction">{{ trans('portal.footer.map') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
					<img src="/imgs/map.jpg" alt="" style="width: 100%;">
                </div>
			</div>
		</div>
	</div>
	<style type="text/css">
		p{
			line-height: 2em;
		}
		.left-menu{
	  		width: 165px!important;
	  	}
	  	.content{
	  		width: 975px!important;
	  	}
	</style>
@endsection