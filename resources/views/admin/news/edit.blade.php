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
	        <li><a href="/admin/new"><i class="fa fa-newspaper-o"></i> 新闻管理</a></li>
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
	                <form role="form" action="/admin/new" method="POST">
	                	<input type="hidden" name="_token" value="{{ Session::token() }}">
		                <div class="box-body">
		                    <div class="form-group">
		                      <label for="exampleInputEmail1">新闻标题</label>
		                      <input type="text" class="form-control" placeholder="输入新闻标题" name="title" value="{{ session('_old_input')['title'] ? session('_old_input')['title'] : $hbNew['title'] }}">
		                    </div>
		                    <div class="form-group">
		                      <label for="exampleInputPassword1">新闻内容</label>
		                      <textarea class="simditor" name="content" placeholder="输入新闻内容,支持拖拽上传图片。">{{ session('_old_input')['content'] ? session('_old_input')['content'] : $hbNew['content'] }}</textarea>
		                    </div>
		                    <div class="form-group">
		                      <label for="exampleInputFile">语言种类</label>
		                      <select name="lang" class="form-control">
								<option value="0">中文繁体</option>
								<option value="1">英文</option>
		                      </select>
		                    </div>
		                    <div class="checkbox">
		                      <input type="checkbox" class="minimal" id="publish" name="published" value="">
		                      <label for="publish" style="padding-left:5px;">发布</label>
		                    </div>
		                </div><!-- /.box-body -->

		                <div class="box-footer">
		                    <button type="submit" class="btn btn-primary">Submit</button>
		                </div>
	                </form>

              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->
	</div><!-- /.content-wrapper -->
	<br>
	<br>
@endsection