@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">{{ trans('portal.header.home') }}&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li><a href="#">{{ trans('portal.header.about') }}&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
				  <li class="active">{{ trans('portal.header.introduction') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<ul class="left-menu">
						<li class="active"><a href="/introduction">{{ trans('portal.header.introduction') }}</a></li>
						<li><a href="/contact">{{ trans('portal.header.contact') }}</a></li>
						<li><a href="/new">{{ trans('portal.header.new') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
					<h1>橫濱國際拍賣（香港）有限公司</h1>
					
					<h3 style="display: inline-block;">成立：</h3>
					<p style="display: inline-block;">橫濱國際拍賣(香港)有限公司于2014年1月在香港成立，從精心籌備到創辦成立歷時近一年。</p>
 					<br><br><br>

 					<h3 style="display: inline-block;">理念：</h3>
					<p style="display: inline-block;  margin-top: 18px;position: absolute;">公司以推進中國古董藝術和文化交流為創業理念，在香港已成功舉行兩次大型拍賣會并在國際古玩展中參展宣傳，廣受各界藏家和專業人士的鼓勵和好評。公司及全體員工今後會更加努力開拓海外古董藝術市場，迴饋廣大供應商、收藏家以及同業人士的支持與需求，對中華古董文化藝術的傳播盡一己之力。</p>
					<br><br><br><br><br><br>

					<h3 style="display: inline-block;">基礎：</h3>
					<p style="display: inline-block;  margin-top: 18px;position: absolute;">橫濱國際拍賣(香港)有限公司憑借對中國古董文化的喜愛和多年不懈的努力，已在日本各地建立起廣泛的供應商網絡，并擁有了固定的中國富裕階層買家群體。</p>
					<br><br><br><br>

					<h3 style="display: inline-block;">目標：</h3>
					<p style="display: inline-block;  margin-top: 18px;position: absolute;">在近年來中國古董與珠寶市場向海外轉移的趨勢下，得以讓流失在日本的中國古典藝術瑰寶迴歸祖國，公司憑藉香港的天時、地利、人和之有力條件，激發市場活力，開拓拍賣版圖，也成為橫濱國際拍賣公司在香港創建分公司的主要目的。</p>
					<br><br><br><br><br><br>
				
					<!-- 
					<div class="baidu-map" style="height: 500px;display: -webkit-box;">
							                <div id="l-map"></div>
							                <style type="text/css">  
							                    #l-map {width: 100%;overflow: hidden;hidden;margin:0;}
							                    .iw_bt{margin-right: 0px!important;}
							                </style>  
							                <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=FIbNia7ZYVSDemIFDOxiYyqh"></script>
							                <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
							                <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
							                <script type="text/javascript">  
							                function loadJScript() {
							                    var script = document.createElement("script");
							                    script.type = "text/javascript";
							                    script.src = "http://api.map.baidu.com/api?v=2.0&ak=FIbNia7ZYVSDemIFDOxiYyqh&callback=init";
							                    document.body.appendChild(script);
							                }
							                function init() {
							                    var map = new BMap.Map("l-map");            // 创建Map实例
							                    var point = new BMap.Point(114.189252,22.280983); // 创建点坐标
							                    map.centerAndZoom(point,19);
							                    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
							                    // '<img src="/img/logo.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:120px;height:100px;margin-left:3px;"/>' +
							                    '地址：香港軒尼詩道集成中心<br/>电话：0852-27862877<br/>简介：橫濱國際拍賣(香港)有限公司于2014年1月在香港成立，從精心籌備到創辦成立歷時近一年。' +
							                    '</div>';
							                    //创建检索信息窗口对象
							                    var searchInfoWindow = null;
							                    searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
							                            title  : "橫濱國際拍賣（香港）有限公司",      //标题
							                            width  : 300,             //宽度
							                            height : 145,              //高度
							                            panel  : "panel",         //检索结果面板
							                            enableAutoPan : true,     //自动平移
							                            searchTypes   :[
							                                BMAPLIB_TAB_SEARCH,   //周边检索
							                                BMAPLIB_TAB_TO_HERE,  //到这里去
							                                BMAPLIB_TAB_FROM_HERE //从这里出发
							                            ]
							                        });
							                    var marker = new BMap.Marker(point); //创建marker对象
							                    // marker.enableDragging(); //marker可拖拽
							                    marker.addEventListener("click", function(e){
							                        searchInfoWindow.open(marker);
							                    })
							                    map.addOverlay(marker); //在地图中添加marker
							                    // map.enableScrollWheelZoom();                 //启用滚轮放大缩小
							                    // var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
							                    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
							                    // var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}); //右上角，仅包含平移和缩放按钮
							                    /*缩放控件type有四种类型:
							                    BMAP_NAVIGATION_CONTROL_SMALL：仅包含平移和缩放按钮；BMAP_NAVIGATION_CONTROL_PAN:仅包含平移按钮；BMAP_NAVIGATION_CONTROL_ZOOM：仅包含缩放按钮*/
							                    // map.addControl(top_left_control);        
							                    map.addControl(top_left_navigation);     
							                    // map.addControl(top_right_navigation); 
							                    // searchInfoWindow.open(marker);
							                }  
							                window.onload = loadJScript;  //异步加载地图
					
							                </script>
					</div> 
					-->
					
					<div>
						<a href="http://map.baidu.com/" target="_blank">
							<img src="/imgs/bd-map.jpg" alt="" style="width:100%;">
						</a>
					</div>
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