@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        新增拍卖会
	        <small>新增加一个拍卖会</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li><a href="/admin/auction"><i class="fa fa-newspaper-o"></i> 拍卖会管理</a></li>
	        <li class="active">拍卖会管理</li>
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
	                {!! Form::open(['route' => 'admin.auction.store', 'method' => 'post']) !!}
	                
		                <div class="box-body">
		                    <div class="form-group">
		                    	{!! Form::label('auction_name', '拍卖会名称') !!}
		                    	{!! Form::text('auction_name', null, ['class' => 'form-control ', 'placeholder' => '输入拍卖会名称']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('preview_begin_time', '预展开始时间') !!}
		                    	{!! Form::text('preview_begin_time', null, ['class' => 'form-control timepicker', 'placeholder' => '']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('preview_begin_time', '预展结束时间') !!}
		                    	{!! Form::text('preview_end_time', null, ['class' => 'form-control ', 'placeholder' => '']) !!}
		                    </div>

 							<div class="form-group">
		                    	{!! Form::label('auction_begin_time', '拍卖开始时间') !!}
		                    	{!! Form::text('auction_begin_time', null, ['class' => 'form-control ', 'placeholder' => '']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('auction_end_time', '拍卖结束时间') !!}
		                    	{!! Form::text('auction_end_time', null, ['class' => 'form-control ', 'placeholder' => '']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('lang', '语言种类') !!}
		                      	{!! Form::select('lang', ['0' => '中文繁体', '1' => '英文'], null, ['class' => 'form-control']) !!}
		                    </div>
		                    
		                </div><!-- /.box-body -->

		                <div class="box-footer">
		                    <button type="submit" class="btn btn-primary">提交</button>
		                </div>
	                {!! Form::close() !!}

              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->
	</div><!-- /.content-wrapper -->
	<br>
	<br>
@endsection