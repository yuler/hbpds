@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        参考资料管理
	        <small>参考资料管理</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li class="active">参考资料管理</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box">
	      	  		{!! Form::open(['url' => 'admin/batchDestroy/material', 'method' => 'delete']) !!}
	      	  		
	                <div class="box-header">
	                  	<h3 class="box-title">列表</h3>
					  	<br><br>
					  	<div>
			                <a href="/admin/material/create" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>  新建</a>
			                <!-- <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i>  批量删除</button> -->
			                <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="删除新闻" data-message="确认删除选中的新闻？">
						        <i class="glyphicon glyphicon-trash"></i> 批量删除
						    </button>
	                  	</div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
						<table class="table table-bordered table-striped table-hover">
						    <thead>
						      <tr>
						      	<th><input type="checkbox" class="minimal"></th>
						        <th>id</th>
						        <th>标题</th>
						        <th>内容</th>
						        <th>语言</th>
						        <th>发布状态</th>
						        <th>发布时间</th>
						        <th>创建时间</th>
						        <th>修改时间</th>
						        <th></th>
						      </tr>
						    </thead>
						    <tbody>
						    @foreach ($materials as $material)
						        <tr>
								    <td><input type="checkbox" class="minimal" name="ids[]" value="{{ $material->id }}"></td>
						            <td>{{ $material->id }}</td>
						            <td>{{ str_limit($material->title,$limit = 20, $end = '...') }}</td>
						            <td>{{ str_limit($material->content,$limit = 40, $end = '...') }}</td>
						            <td>{{ $material->lang }}</td>
						            <td>{{ $material->published }}</td>
						            <td>{{ $material->published_at }}</td>
						            <td>{{ $material->created_at }}</td>
						            <td>{{ $material->updated_at }}</td>
						            <td>
						            	<a href="/admin/material/{{ $material->id }}/edit" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>  编辑</a>
						            </td>
						        </tr>
							@endforeach 
						    </tbody>
						</table>
						{!! $materials->render() !!}
	                </div><!-- /.box-body -->

	                {!! Form::close() !!} 
              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->

	    <br><br>
	</div><!-- /.content-wrapper -->
@endsection