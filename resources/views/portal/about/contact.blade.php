@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">{{ trans('portal.header.home') }}&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li><a href="#">{{ trans('portal.header.about') }}&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li class="active">{{ trans('portal.header.contact') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<ul class="left-menu">
						<li><a href="/introduction">{{ trans('portal.header.introduction') }}</a></li>
						<li class="active"><a href="/contact">{{ trans('portal.header.contact') }}</a></li>
						<li><a href="/new">{{ trans('portal.header.new') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
					<h1>聯繫方式</h1>

					<h3>横滨国际拍卖（香港）有限公司 </h3>
					<p>地址： 中国香港湾仔轩尼诗道302-308号集成中心2305 </p>
					<p>电话： (852) 2786 3648 </p>
					<p>传真： (852) 2786 3877</p>
					<p>網站： <a href='http://www.ykauction.com' target='_blank' style='color:#0000FF'>www.ykauction.com</a></p>
					<p>郵箱： <a href='mailto:info@ykauction.com' style='color:#0000FF'>info@ykauction.com</a></p>
					<br>
					
					<h3>日本株式会社横滨国际拍卖</h3>
					<p>地址： 〒231-0023  日本国神奈川県横浜市中区山下町84番5 メトロタワー山下町５階B</p>
					<p>电话： (81) 45 228 8639</p>
					<p>传真： (81) 45 228 8638</p>
					<p>網站： <a href='http://www.ykauction.com' target='_blank' style='color:#0000FF'>www.ykauction.com</a></p>
					<p>郵箱： <a href='mailto:info@ykauction.com' style='color:#0000FF'>info@ykauction.com</a></p>
					<br>

					<h3>日本株式会社横滨国际拍卖北京代表处</h3>
					<p>地址： 中国北京朝阳区光华路8号北京和乔丽致酒店公寓1505</p>
					<p>电话： (86) 6581 5088</p>
					<p>传真： (86) 6581 5088</p>
					<br>

					<h2>中國聯絡方式</h2>
					<br>
					
					<p>■香港聯絡處</p>
					<p>地址：香港灣仔軒尼詩道302-308號集成中心23樓2305號室</p>
					<p>聯繫人：耿先生</p>
					<p>電話： (852)2786-3778， (86)1391-008-8523</p>
					<br>
					
					<p>■北京代表處（可提供赴日邀請函）</p>
					<p>地址：郵編 100026，北京市朝陽區光華路甲8號和喬麗致公寓1505</p>
					<p>聯繫人：祁先生</p>
					<p>電話： (86)10-6581-5088，（86）1861-058-8488</p>
					<br>

					<p>■北京支社</p>
					<p>地址：郵編 100122，北京市朝陽區十里河橋東程田古玩城A區101號</p>
					<p>聯繫人：張先生</p>
					<p>電話：(86)1390-105-1831，(86)10-8736-6578</p>
					<br>

					<p>■北京聯絡處</p>
					<p>地址：郵編 100012，北京市朝陽區東三環南路21號北京古玩城三層53號</p>
					<p>聯絡人：尹女士</p>
					<p>電話：(86)1370-102-231</p>
					<br>

					<p>■天津聯絡處</p>
					<p>地址：郵編 300090，天津市南開區城廂中路天街古玩藝術廣場C105號</p>
					<p>聯繫人：李先生(86)1862-219-0609</p>
					<p>電話： (86)22-8319-5178</p>
					<br>

					<p>■大連聯絡處</p>
					<p>地址：郵編 116001，大連市中山區學士路105號1-1海藝樓藝術會館</p>
					<p>聯繫人：楊先生</p>
					<p>電話： (86)411-8279-9959，(86)1384-089-6865</p>
					<br>

					<p>■南昌聯絡處</p>
					<p>地址：郵編 330008，江西省南昌市仿古街91號滕王閣古玩城201室</p>
					<p>聯繫人：諶先生</p>
					<p>電話：(86)1397-910-1508</p>
					<br>

					<p>■杭州聯絡處</p>
					<p>地址：郵編 310002，浙江省杭州市延安南路1號吳山通寶城1樓B-1</p>
					<p>聯繫人：陳先生</p>
					<p>電話： (86)571-8707-3628，(86)1395-811-8188</p>
					<br>

					<p>■西安聯絡處</p>
					<p>地址：郵編 710032，陝西省西安市長樂西路15號621棟17室</p>
					<p>聯繫人：何先生</p>
					<p>電話： (86)29-8322-4896，(86)1399-284-8365</p>
					<br>

					<p>地址：郵編 710075，陝西省西安市高新區高新路88號尚品國際A座103商鋪「大道堂」</p>
					<p>聯繫人：楊先生</p>
					<p>電話 ：(86)29-8881-1011</p>
					<br>

					<p>■廈門聯絡處</p>
					<p>地址：廈門市思明區斗西路209號</p>
					<p>聯繫人：陳先生(86)1330-602-2111</p>
					<p>電話 ：(86)59-2877-7666</p>
					<br>

					<p>地址：廈門市思明區斗西路唐頌古玩城嘉庚樓201號</p>
					<p>聯繫人：黄先生</p>
					<p>電話：(86)1596-021-9797</p>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		h3 {
			padding-bottom: 20px;
		}
		h3:after { 
			display: block;
		   	content: '';
		   	width: 200px;
		   	height: 1px;
		   	background: #ffcc00;
		   	margin-top: 20px;
		}
		.left-menu{
	  		width: 165px!important;
	  	}
	  	.content{
	  		width: 975px!important;
	  	}
	</style>
@endsection

