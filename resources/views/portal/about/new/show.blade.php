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
					<h1>{{ $new->title }}</h1>
					<div class="data">{{ date('Y-m-d', strtotime($new->published_at)) }}</div>
					<br>
					<div>
						{!! $new->content !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection