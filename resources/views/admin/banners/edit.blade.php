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
	        修改广告
	        <small>{{$banner->name}}</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li><a href="/admin/banner"><i class="fa fa-newspaper-o"></i> 广告管理</a></li>
	        <li class="active">编辑</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box box-primary">

				
	   		 			{!! Form::model($banner, ['route' => ['admin.banner.update', $banner->id ], 'method' => 'put']) !!}
		                
		                <div class="box-body">
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
		                    	{!! Form::label('enable', '是否可用') !!}
		                      	{!! Form::select('enable', ['1' => '是','0' => '否'], null, ['class' => 'form-control']) !!}
		                    </div>
			                    
			            </div><!-- /.box-body -->

			                <div class="box-footer">
			                    <button type="submit" class="btn btn-primary">提交</button>
			                </div>
		                	{!! Form::close() !!}
		            	
	               		</div>
	            	</div>    
	  			</div>
			</div>
              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->
	</div><!-- /.content-wrapper -->
	<br>
	<br>



@endsection