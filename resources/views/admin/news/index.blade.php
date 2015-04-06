@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        新闻管理
	        <small>新闻管理</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li class="active">新闻管理</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box">
	      	  		{!! Form::open(['url' => 'admin/batchDestroy/news', 'method' => 'delete']) !!}
	      	  		
	                <div class="box-header">
	                  	<h3 class="box-title">新闻列表</h3>
					  	<br><br>
					  	<div>
			                <a href="/admin/new/create" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>  新建</a>
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
						    @foreach ($news as $new)
						        <tr>
								    <td><input type="checkbox" class="minimal" name="ids[]" value="{{ $new->id }}"></td>
						            <td>{{ $new->id }}</td>
						            <td>{{ str_limit($new->title,$limit = 20, $end = '...') }}</td>
						            <td>{{ str_limit($new->content,$limit = 40, $end = '...') }}</td>
						            <td>{{ $new->lang }}</td>
						            <td>{{ $new->published }}</td>
						            <td>{{ $new->published_at }}</td>
						            <td>{{ $new->created_at }}</td>
						            <td>{{ $new->updated_at }}</td>
						            <td>
						            	<a href="/admin/new/{{ $new->id }}/edit" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>  编辑</a>
						            	<!-- <a href="{{ route('admin.new.destroy',array($new->id)) }}" class="btn btn-danger btn-xs" data-token="{{ csrf_token() }}" data-method="delete" data-confirm="你确定删除这条记录吗？"><i class="fa fa-trash"></i>  删除</a> -->
						            </td>
						        </tr>
							@endforeach 
						    </tbody>
						</table>
						{!! $news->render() !!}
	                </div><!-- /.box-body -->

	                {!! Form::close() !!} 
              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->

	    <br><br>
	</div><!-- /.content-wrapper -->
@endsection