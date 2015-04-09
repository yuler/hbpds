@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        拍卖会管理
	        <small>拍卖会管理</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li class="active">拍卖会管理</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box">
	      	  		{!! Form::open(['url' => 'admin/batchDestroy/auctions', 'method' => 'delete']) !!}
	      	  		
	                <div class="box-header">
	                  	<h3 class="box-title">拍卖会列表</h3>
					  	<br><br>
					  	<div>
			                <a href="/admin/auction/create" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>  新建</a>
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
						        <th>id</th>
						        <th>名称</th>
						        <th>语言</th>
						        <th>预展开始时间</th>
						        <th>预展结束时间</th>
						        <th>拍卖开始时间</th>
						        <th>拍卖结束时间</th>
						        <th></th>
						      </tr>
						    </thead>
						    <tbody>
						    @foreach ($auctions as $auction)
						        <tr>
								    <td><input type="checkbox" class="minimal" name="ids[]" value="{{ $new->id }}"></td>
						            <td>{{ $auction->id }}</td>
						            <td>{{ str_limit($auction->auction_name,$limit = 20, $end = '...') }}</td>
						            <td>{{ $auction->lang }}</td>
						            <td>{{ $auction->preview_begin_time }}</td>
						            <td>{{ $auction->preview_end_time }}</td>
						            <td>{{ $auction->auction_begin_time }}</td>
						            <td>{{ $auction->auction_end_time }}</td>
						            <td>
						            	<a href="/admin/auction/{{ $auction->id }}/edit" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>  编辑</a>
						            	<!-- <a href="{{ route('admin.new.destroy',array($new->id)) }}" class="btn btn-danger btn-xs" data-token="{{ csrf_token() }}" data-method="delete" data-confirm="你确定删除这条记录吗？"><i class="fa fa-trash"></i>  删除</a> -->
						            </td>
						        </tr>
							@endforeach 
						    </tbody>
						</table>
						{!! $auctions->render() !!}
	                </div><!-- /.box-body -->

	                {!! Form::close() !!} 
              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->

	    <br><br>
	</div><!-- /.content-wrapper -->
@endsection
