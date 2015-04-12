@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        专场管理
	        <small>专场管理</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li class="active">专场管理</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box">
	      	  		{!! Form::open(['url' => 'admin/batchDestroy/asas', 'method' => 'delete']) !!}
	      	  		
	                <div class="box-header">
	                  	<h3 class="box-title">专场列表</h3>
					  	<br><br>
					  	<div>
			                <a href="/admin/asa/create" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>  新建</a>
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
						        
						        <th>专场名称</th>
						        <th>预展时间开始时间</th>
						        <th>预展结束时间</th>
						        <th>拍卖开始时间</th>
						        <th>拍卖结束时间</th>
						        <th>拍卖低点</th>
						        <th>仅网拍</th>
						        <th>网拍地址</th>
						        <th>语言</th>
						        
						        <th></th>
						      </tr>
						    </thead>
						    <tbody>
						    @foreach ($asas as $asa)
						        <tr>
								    <td><input type="checkbox" class="minimal" name="ids[]" value="{{ $asa->id }}"></td>
						            <td>{{ str_limit($asa->asa_name,$limit = 20, $end = '...') }}</td>
						            <td>{{ $asa->preview_begin_time}}</td>
						            <td>{{ $asa->preview_end_time }}</td>
						            <td>{{ $asa->begin_time }}</td>
						            <td>{{ $asa->end_time }}</td>
						            <td>{{ $asa->asa_addr }}</td>
						            <td>{{ $asa->asa_only_online }}</td>
						            <td>{{ $asa->asa_online_url}}</td>
						            <td>{{ $asa->lang}}</td>
						            <td>
						            	<a href="/admin/asa/{{ $asa->id }}/edit" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>  编辑</a>
						            </td>
						        </tr>
							@endforeach 
						    </tbody>
						</table>
						{!! $asas->render() !!}
	                </div><!-- /.box-body -->

	                {!! Form::close() !!} 
              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->

	    <br><br>
	</div><!-- /.content-wrapper -->
@endsection