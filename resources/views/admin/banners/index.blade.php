@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        广告管理
	        <small></small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li class="active">广告管理</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box">
	      	  		{!! Form::open(['url' => 'admin/batchDestroy/banners', 'method' => 'delete']) !!}
	      	  		
	                <div class="box-header">
	                  	<h3 class="box-title">广告列表</h3>
					  	<br><br>
					  	<div>
			                <a href="/admin/banner/create" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>  新建</a>
			                <!-- <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i>  批量删除</button> -->
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
						        <th>名称</th>
						        <th>跳转地址</th>
						        <th>主图</th>
						        <th>排序</th>
						        <th>是否可用</th>
						        <th></th>
						      </tr>
						    </thead>
						    <tbody>
						    @foreach ($banners as $banner)
						        <tr>
								    <td><input type="checkbox" class="minimal" name="ids[]" value="{{ $banner->id }}"></td>
						            <td>{{ str_limit($banner->name,$limit = 20, $end = '...') }}</td>
						            <td>{{ $banner->target_url }}</td>
						            <td>{{ $banner->image_url }}</td>
						            <td>{{ $banner->order }}</td>
						            <td>{{ $banner->enable }}</td>
						            <td>
						            	<a href="/admin/banner/{{ $banner->id }}/edit" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>  编辑</a>
						            </td>
						        </tr>
							@endforeach 
						    </tbody>
						</table>
						{!! $banners->render() !!}
	                </div><!-- /.box-body -->

	                {!! Form::close() !!} 
              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->

	    <br><br>
	</div><!-- /.content-wrapper -->
@endsection
