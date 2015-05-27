@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">{{ trans('portal.header.auction-notice') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.auction-reference') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<ul class="left-menu">
						<li><a href="/auction-guide">{{ trans('portal.header.auction-guide') }}</a></li>
						<li><a href="/transaction-read">{{ trans('portal.header.transaction-read') }}</a></li>
						<li class="active"><a href="/auction-reference">{{ trans('portal.header.auction-reference') }}</a></li>
						<li><a href="/auction-book">{{ trans('portal.header.auction-book') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
					<h1>參考資料</h1>
					<ul>
						@foreach ($materials as $material)
							<li>
								<div class="data">
									{{ date('Y-m-d', strtotime($material->published_at)) }}
								</div>
								<div class="html" style="  min-width: 800px;">
									<p><a href="/material/{{ $material->id }}">{{ $material->title }}</a></p>
									<article>
									{{ str_limit($material->article, $limit = 100, $end = '...') }}
									</article>
									<div class="pic-list">
										@foreach ($material->imgList as $img)
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
						{!! $materials->render() !!}
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