@extends('portal.app')

@section('content')
	<div id="artworkShow">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">首頁</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/">拍賣日曆</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/">私人珍藏</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">汽车女司机</li>
				</ol>
			</div>
		</div>
		<div class="container content">
			<p>编号：LOT2</p>
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
			        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
			        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			    </ol>
			    <div class="carousel-inner">
			        <div class="item">
			            <img src="/imgs/p1.png">
			        </div>
			        <div class="item">
			            <img src="/imgs/p1.png">
			        </div>
			        <div class="item active">
			            <img src="/imgs/p1.png">
			        </div>
			    </div>
			    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><i class="fa fa-angle-left fa-4x"></i></a>
			    <a class="right carousel-control" href="#carousel-id" data-slide="next"><i class="fa fa-angle-right fa-4x"></i></a>
			</div>
			
			<div class="row info">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-4">
							<h3>汽车女司机</h3> Lot2	
						</div>
						<div class="col-md-8">
							<ul class="clearfix">
								<li><img src="/imgs/n1.png" alt=""></li>
								<li><img src="/imgs/n2.png" alt=""></li>
								<li><img src="/imgs/n3.png" alt=""></li>
							</ul>
							<a class="left carousel-control" href="#carousel-id" data-slide="prev"><i class="fa fa-angle-left fa-2x"></i></a>
			    			<a class="right carousel-control" href="#carousel-id" data-slide="next"><i class="fa fa-angle-right fa-2x"></i></a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h3>估价: 9,100,100 HKD</h3>
					<h3>7,200,000 CNY</h3>
				</div>
			</div>
			<hr>
			<div class="row description">
				<div class="col-md-10 col-md-offset-1">
					<h3>作品描述</h3>
					<article>
						1．作品名称：炫　
						2．作品类型：抽象布面油画
						3．作品形式：单幅可独立成作，多幅相拼可成巨幅。 （尺寸以1.2x1m  1.5x1.2m两规格为主）
						4．作品题材：以大自然飘乎不定和瞬息万变的景观为素材，自然玄空中有形非形﹑无形有形，有色非色、非色即色，动亦非动，静亦非静。有形亦无形，无形即有形，有色即无色，无色亦有色，动中有静，静中寓动的奇幻。本系列看似漫不经心随手着墨，却无意中彰显自然丰沛的色彩在交汇在流动。画面对比强烈，色彩绚丽冲击，景象刺激而和谐，达到强烈的视觉享受。整幅画面的玄妙意像在时空变幻中碰撞着、融合着、协调着、流动着......
						5．作品特点：画面协调明快，色彩明丽玄妙，大气恢宏。
					</article>
				</div>
			</div>
			<hr>
			<div class="row other-link">
				<div class="col-md-10 col-md-offset-1">
					<p>查看同专场其他商品</p>
				</div>
			</div>
			<hr>
		</div>
	</div>
@endsection