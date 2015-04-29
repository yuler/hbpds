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
	        <li><a href="/admin/material"><i class="fa fa-newspaper-o"></i> 新闻管理</a></li>
	        <li class="active">编辑</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box box-primary">
	                <div class="box-header">
	                  	<h3 class="box-title">编辑</h3>
	                </div><!-- /.box-header -->

	                <!-- form start -->
	                {!! Form::model($material, ['route' => ['admin.material.update', $material->id ], 'method' => 'put']) !!}
	                
		                <div class="box-body">
		                    <div class="form-group">
		                    	{!! Form::label('title', '材料标题') !!}
		                    	{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '输入新闻标题']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('content', '材料内容') !!}
		                    	{!! Form::textarea('content', null, ['class' => 'simditor', 'placeholder' => '输入材料内容,支持拖拽上传图片。']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('lang', '语言种类') !!}
		                      	{!! Form::select('lang', ['0' => '中文繁体', '1' => '英文'], null, ['class' => 'form-control']) !!}
		                    </div>
		                    <div class="checkbox">
		                      {!! Form::checkbox('published', null , null , ['id' => 'published','class' => 'minimal']) !!}
		                      {!! Form::label('published', '发布' ,['style' => 'padding-left:5px;']) !!}
		                    </div>
		                </div><!-- /.box-body -->

		                <div class="box-footer">
		                    <button type="submit" class="btn btn-primary">Submit</button>
		                </div>
	                {!! Form::close() !!}

              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->
	</div><!-- /.content-wrapper -->
	<br>
	<br>
@endsection