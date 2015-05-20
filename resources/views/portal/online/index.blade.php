@extends('portal.app')

@section('content')
	<div id="onlineIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.auction-online') }}</li>
				</ol>
			</div>
		</div>
		<div class="container content">
			<p>下列拍卖会均可以参与网上竞拍，点击下面 <a href="" class="hb-btn">参加网上拍卖</a> 既可参与竞投</p>

			<ul class="prodcut-list">
				@foreach($asas as $asa)
					<li class="clearfix">
						<div class="col-md-2 date">
							<h2>{{ date('y年', strtotime($asa['begin_time'])) }}</h2>
							<p>{{ date('m月d日', strtotime($asa['begin_time'])) }} 开始</p>
						</div>
						<div class="col-md-4 img">
							<img src="{{ $asa['asa_image'] }}" alt="" style="height:208px;">
						</div>
						<div class="col-md-6 info">
							<h2>{{ $asa['asa_name'] }}</h2>
							<br>
							<p>
								<span>拍卖时间: </span>
								{{ date('m月d日', strtotime($asa['begin_time'])) }}-{{ date('m月d日', strtotime($asa['end_time'])) }}
							</p>
							<br>
							<a href="{{ $asa['asa_online_url'] }}" class="hb-btn" target="_blank">参加网上拍卖</a>
							<a href="{{ $asa['asa_online_logo'] }}" class="yp-logo" target="_blank">
								<img src="/imgs/yp-logo.png" alt="" style="width:100px;height:35px;">	
							</a>
						</div>
					</li>
				@endforeach
			</ul>

			{!! $asas->render() !!}
		</div>
	</div>
@endsection