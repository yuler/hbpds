@extends('portal.app')

@section('content')
	<div id="onlineIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">首頁</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">搜: {{ $kw }}</li>
				</ol>
			</div>
		</div>
		<div class="container content">
			<p>为你搜到&nbsp;&nbsp;{{ $kw }}&nbsp;&nbsp;结果&nbsp;{{ ($hb_artworks->total()) }}&nbsp;条</p>
			<div class="row productList">
				@foreach($artworks as $artwork)
					<div class="col-md-3">
						<a href="/artwork/123">
							@if(sizeof($artwork->atts) > 0)
								<img src="{{ $artwork->atts[0]['att_path'] }}" alt="">
							@else
								<img src="/imgs/n1.png" alt="">
							@endif
							<div>
								<p>LOT {{ $artwork['art_lot'] }}</p>
								<p>估值： 900，000 HKD</p>
							</div>
						</a>
						<div class="info">
							<p>朝代： {{ $artwork['art_dynasty'] }}</p>
							<p>作者： {{ $artwork['art_author'] }}</p>
							<p>名称： {{ $artwork['art_name'] }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection