@extends('admin.app')

@section('content')

<script type="text/javascript">
	$(function(){
		var pageNo = getQueryString('page');
		if(pageNo!=null&&pageNo!=""){
			$('#myTab a:last').tab('show')
		}
	})
</script>


	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        修改拍卖专场
	        <small></small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li><a href="/admin/auction"><i class="fa fa-newspaper-o"></i> 拍卖会管理</a></li>
	        <li><a href="/admin/auction/{{$asa->auction_id}}/edit"><i class="fa fa-newspaper-o"></i> 编辑拍卖会</a></li>
	        <li class="active">编辑专场</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box box-primary">
	               <div role="tabpanel">
					<ul class="nav nav-tabs" role="tablist" id="myTab">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">拍卖专场</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">拍品</a></li>
					</ul>
					<div class="tab-content">
		   		 		<div role="tabpanel" class="tab-pane active" id="home"> 
	                
				                <div class="box-body">
				                	<div class="row">
				                		<div class="col-md-6">
   					   		 			 {!! Form::model($asa, ['route' => ['admin.asa.update', $asa->id ], 'method' => 'put']) !!}

						                    <div class="form-group">
						                    	{!! Form::label('asa_name', '专场名称') !!}
						                    	{!! Form::text('asa_name', null, ['class' => 'form-control', 'placeholder' => '输入专场名称']) !!}

						                    </div>
						                    
				 							<div class="form-group">
						                    	{!! Form::label('preview_begin_time', '预展开始时间') !!}
						                    	{!! Form::text('preview_begin_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择预展开始时间']) !!}
						                    </div>

						                    <div class="form-group">
						                    	{!! Form::label('preview_begin_time', '预展结束时间') !!}
						                    	{!! Form::text('preview_end_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择预展结束时间']) !!}
						                    </div>

				 							<div class="form-group">
						                    	{!! Form::label('begin_time', '拍卖开始时间') !!}
						                    	{!! Form::text('begin_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择拍卖开始时间']) !!}
						                    </div>
						                    <div class="form-group">
						                    	{!! Form::label('end_time', '拍卖结束时间') !!}
						                    	{!! Form::text('end_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择拍卖结束时间']) !!}
						                    </div>
						                    <div class="form-group">
						                    	{!! Form::label('asa_addr', '拍卖地点') !!}
						                    	{!! Form::text('asa_addr', null, ['class' => 'form-control', 'placeholder' => '输入拍卖地点']) !!}
						                    </div>
						                    <div class="form-group">
						                    	{!! Form::label('asa_only_online', '仅限网拍') !!}
						                    	{!! Form::select('asa_only_online', ['0' => '否', '1' => '是'], null, ['class' => 'form-control']) !!}
						                    </div>

						                    <div class="form-group">
						                    	{!! Form::label('asa_online_url', '网拍地址') !!}
						                    	{!! Form::text('asa_online_url', null, ['class' => 'form-control', 'placeholder' => '输入网拍地址']) !!}
						                    </div>

						                    <div class="form-group">
						                    	{!! Form::label('asa_online_logo', '网拍LOGO') !!}
						                    	{!! Form::text('asa_online_logo', null, ['class' => 'form-control', 'placeholder' => '']) !!}
						                    </div>
											<div class="form-group">
						                    	{!! Form::label('asa_group', '拍卖会分组') !!}
						                      	{!! Form::text('asa_group', null, ['class' => 'form-control']) !!}
						                    </div>
						                    <div class="form-group">
						                    	{!! Form::label('lang', '语言种类') !!}
						                      	{!! Form::select('lang', ['0' => '中文繁体', '1' => '英文'], null, ['class' => 'form-control']) !!}
						                    </div>
						                    <div class="form-group">
				                                {!! Form::label('asa_image', '宣传图') !!}
				                                {!! Form::text('asa_image', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				                            </div>	
	       				                    <input  name="auction_id"  type="hidden" id="auction_id" value="{{$asa->auction_id}}"/>
					                    	<button type="submit" class="btn btn-primary">提交</button>
			                				{!! Form::close() !!}

			                        	</div>

			                        	<div class="col-sm-6">
										    <div class="thumbnail">
										    	@if(isset($asa['asa_image']))
										      		<img id="yulan" src="{{$asa->asa_image}}}" >
										      	@else
										      		<img id="yulan" data-src="holder.js/100%x300" >
										      	@endif
										      <div class="caption">
										      	<form action="/admin/attachment" id="uploadAvatarForm" method="post">
					                        			
													<a id="dianji" href="javascript:void(0);" class="btn btn-primary" onclick="$('#uploadAvatar').trigger('click');">上传宣传图</a>
													<input name="upload" type="file" class="hide" id="uploadAvatar">
												</form>
										      </div>
										    </div>
										</div>
			                        </div>
		                              

				                </div><!-- /.box-body -->

				                <div class="box-footer">
				                </div>
		   		 		</div>
	   					 <div role="tabpanel" class="tab-pane" id="profile">
	   					 	<div class="tab-pane" id="tabs-2">
	   					 		{!! Form::open(['url' => 'admin/batchDestroy/artworks', 'method' => 'delete']) !!}
	      	  		
				                <div class="box-header">
								  	<div>
						                <a href="/admin/artwork/create?asa_id={{$asa->id}}&auction_id={{$asa->auction_id}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>  新建</a>
						                <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="删除" data-message="确认删除选中？">
									        <i class="glyphicon glyphicon-trash"></i> 批量删除
									    </button>
				                  	</div>
				                </div><!-- /.box-header -->
				                <div class="box-body">

		                        <table class="table table-bordered table-striped table-hover">
								    <thead>
								      <tr>
								      	<th><input type="checkbox" class="minimal"></th>
								        
								        <th>拍品名称</th>
								        <th>编号</th>
								        <th>作者</th>
								        <th>尺寸</th>
								        <th>材质</th>
								        <th>年代</th>
								        <th>价格HKD</th>
								        <th>价格RMB</th>
								       <!--  <th>作者简介</th>
								        <th>款识</th>
								        <th>题识</th>
								        <th>题签</th>
								        <th>钤印</th>
								        <th>收藏印</th>
								        <th>出版</th>
								        <th>释文</th>
								        <th>签名</th>

								        <th>品相</th>
								        <th>参阅</th>

								        <th>著录</th>
								        <th>展览</th>
								        <th>来源</th>
								        <th>lot号</th>
								        <th>起始估价HKD</th>
								        <th>最高估价HKD</th>
								        <th>起始估价RMB</th>
								        <th>最高估价RMB</th>
								        <th>朝代</th>
								        <th>作品描述</th> -->



								        <th>语言</th>
								        
								        <th></th>
								      </tr>
								    </thead>
								    <tbody>
								    @foreach ($artworks as $artwork)
								        <tr>
										    <td><input type="checkbox" class="minimal" name="ids[]" value="{{ $artwork->id }}"></td>
								            <td>{{ str_limit($artwork->art_name,$limit = 20, $end = '...') }}</td>
								            <td>{{ $artwork->art_code}}</td>
								            <td>{{ $artwork->art_author }}</td>
								            <td>{{ $artwork->art_size }}</td>
								            <td>{{ $artwork->art_material }}</td>
								            <td>{{ $artwork->art_age }}</td>
								            <td>{{ $artwork->art_price_hkd }}</td>
								            <td>{{ $artwork->art_price_rmb}}</td>
								            
								            <!-- <td>{{ $artwork->author_sumarry}}</td>
								            <td>{{ $artwork->art_inscription}}</td>
								            <td>{{ $artwork->art_tizhi}}</td>
								            <td>{{ $artwork->art_mark}}</td>
								            <td>{{ $artwork->art_seal}}</td>
								            <td>{{ $artwork->art_collection_seal}}</td>
								            <td>{{ $artwork->art_publish}}</td>
								            <td>{{ $artwork->art_annotation}}</td>
								            <td>{{ $artwork->art_signature}}</td>
								            <td>{{ $artwork->art_phase}}</td>
								            <td>{{ $artwork->art_reference}}</td>
								            <td>{{ $artwork->art_record}}</td>
								            <td>{{ $artwork->art_exhibition}}</td>
								            <td>{{ $artwork->art_source}}</td>
								            <td>{{ $artwork->art_lot}}</td>

								            <td>{{ $artwork->begin_price_hkd}}</td>
								            <td>{{ $artwork->end_price_hkd}}</td>
								            <td>{{ $artwork->begin_price_rmb}}</td>
								            <td>{{ $artwork->end_price_rmb}}</td>
								            <td>{{ $artwork->art_dynasty}}</td>
								            <td>{{ $artwork->art_sumarry}}</td>
 -->
								            <td>{{ $artwork->lang}}</td>
								            <td>
								            	<a href="/admin/artwork/{{ $artwork->id }}/edit?auction_id={{$asa->auction_id}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>  编辑</a>
								            </td>
								        </tr>
									@endforeach 
								    </tbody>
								</table>
								
							{!! $artworks->render() !!}
	                		</div><!-- /.box-body -->
	                		{!! Form::close() !!} 
	               		</div>
	            	</div>  

	                <!-- form start -->
	               

              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->
	   
	</div><!-- /.content-wrapper -->
	<br>
	<br>

<script type="text/javascript">
$('#uploadAvatar').fileupload({
        url: '/admin/attachment?_token={{ Session::token() }}',
        dataType: 'json',
        forceIframeTransport: true,
        progress: function (e, data) {
        	$('#uploadAvatarProgress').fadeIn(1000);
    		var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#uploadAvatarProgress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        success: function(result, textStatus, jqXHR){

		$("#asa_image").val(result.file_path);
		$("#yulan").attr('src',result.file_path);
		        },
        error: function (jqXHR, textStatus, errorThrown) {
        	console.log(jqXHR);
        	console.log(textStatus);
        	console.log(errorThrown);
        },
        complete: function(e,data) {
        	setTimeout( function(){
    			$('#uploadAvatarProgress').fadeOut(1000);
    			setTimeout(function(){
    				$('#uploadAvatarProgress .progress-bar').css(
	                    'width',
	                    '0%'
	                )
    			},1000)
    		},2000);
        },
    })
	/*$(document).on('change','#uploadAvatar',function(){
		$.ajax({
			url :'/admin/attachment?_token={{ Session::token() }}',
			method:'Post',
			dateType:'JSON',
			data: $('#uploadAvatarForm').serialize(),
			success:function(data){
				console.log(data);
			}
		})
	});*/
</script>
@endsection