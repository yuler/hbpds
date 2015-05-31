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
			<p style="text-align:left;">
				为你找到&nbsp;&nbsp;<span style="background-color:#FF0">{{ $kw }}</span>&nbsp;&nbsp;结果&nbsp;{{ ($artworks->total()) }}&nbsp;个
			</p>
			<div class="row productList">
				@foreach($artworks as $artwork)
					<div class="col-md-3">
						<a href="/artwork/{{$artwork['id']}}" style="display:block;">
							<div style="width:100%;height:229px;overflow: hidden;position: relative;text-align: center;border-top:3px solid #eee;padding:0px;">
								@if(sizeof($artwork->atts) > 0)
									<span style="display: inline-block;width: 0;height: 100%;overflow: hidden;margin-left: -1px;font-size: 0;line-height: 0;vertical-align: middle;"></span>
									<img src="{{ $artwork->atts[0]['att_path'] }}" alt="" style="max-width:208px;max-height: 202px;position: relative;vertical-align: middle;">
								@else
									<center style="line-height: 228px;">
										<img src="/imgs/n1.png" alt="" style="max-width:100%;height: 200px;width:inherit;" onload="AutoResizeImage(222,222,this)">
									</center>
								@endif
							</div>
							<div style="">
								<p>LOT {{ $artwork['art_lot'] }}</p>
								<p style="height:44px;">HKD {{number_format($artwork['begin_price_hkd'])}} - {{number_format($artwork['end_price_hkd'])}}</p>
							</div>
						</a>
						<div class="info" style="margin:3px;height: 92px;width: 88%;">
							<p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{ $artwork['art_dynasty'] }}</p>
							<p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{ $artwork['art_author'] }}</p>
							<p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{ $artwork['art_name'] }}</p>
						</div>
					</div>
				@endforeach
			</div>

			{!! $artworks->render() !!}
		</div>
	</div>
@endsection