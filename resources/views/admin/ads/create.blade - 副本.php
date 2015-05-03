@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        新增广告
	        <small>新增一个广告</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li><a href="/admin/ad"><i class="fa fa-newspaper-o"></i> 广告管理</a></li>
	        <li class="active">新建</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	      <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box box-primary">
	                <div class="box-header">
	                  	<h3 class="box-title">新建</h3>
	                </div><!-- /.box-header -->

	                <!-- form start -->
	                
	                
		                <div class="box-body">

							<div class="row">

								<div class="col-md-6">
									{!! Form::open(['route' => 'admin.ad.store', 'method' => 'post']) !!}

				                	<div class="form-group">
				                    	{!! Form::label('name', '广告名称') !!}
				                    	{!! Form::text('name', null, ['class' => 'form-control ', 'placeholder' => '输入广告名称']) !!}
				                    </div>
				                    <div class="form-group">
				                    	{!! Form::label('target_url', '跳转页面') !!}
				                    	{!! Form::text('target_url', null, ['class' => 'form-control', 'placeholder' => '输入跳转页面']) !!}
				                    </div>

				                    <div class="form-group">
				                    	{!! Form::label('image_url', '主图') !!}
				                    	{!! Form::text('image_url', null, ['class' => 'form-control','placeholder' => '上传主图']) !!}
				                    </div>
				                     <div class="form-group">
				                    	{!! Form::label('order', '顺序') !!}
				                    	{!! Form::text('order', null, ['class' => 'form-control','placeholder' => '输入序号']) !!}
				                    </div>
				                    <div class="form-group">
				                    	{!! Form::label('enable', '是否可用') !!}
				                      	{!! Form::select('enable', ['1' => '是','0' => '否'], null, ['class' => 'form-control']) !!}
				                    </div>

				                   <button type="submit" class="btn btn-primary">提交</button>
									{!! Form::close() !!}
								</div><!-- end md-6-->

								<div class="col-sm-6">
								    <div class="thumbnail">
								      <img id="yulan" data-src="holder.js/100%x300" alt="上传宣" >
								      <div class="caption">
								      	<form action="/admin/attachment" id="uploadAvatarForm" method="post">
			                        			
											<a id="dianji" href="javascript:void(0);" class="btn btn-primary" onclick="$('#uploadAvatar').trigger('click');">上传主图</a>
											<input name="upload" type="file" class="hide" id="uploadAvatar">
										</form>
								      </div>
								    </div>
								</div>

			                 </div><!--end box-->

		                </div><!-- /.box-body -->

		             
	                

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

		$("#image_url").val(result.file_path);
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


