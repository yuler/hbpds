@extends('admin.app')
@section('content')



	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        
	        <small>新增拍品</small>
	      </h1>
	      <ol class="breadcrumb">
	       <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li><a href="/admin/auction"><i class="fa fa-newspaper-o"></i> 拍卖会管理</a></li>
	        <li><a href="/admin/auction/<?php echo $_GET["auction_id"]?>/edit"><i class="fa fa-newspaper-o"></i> 编辑拍卖会</a></li>
	        <li><a href="/admin/asa/<?php echo $_GET["asa_id"]?>/edit?auction_id=<?php echo $_GET["auction_id"]?>"><i class="fa fa-newspaper-o"></i> 编辑专场</a></li>
	        <li class="active">新建拍品</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box box-primary">
	                

	                <!-- form start -->
	                {!! Form::open(['route' => 'admin.artwork.store', 'method' => 'post']) !!}
	                
		                <div class="box-body">
		                    <div class="form-group">
		                    	{!! Form::label('art_name', '拍品名称') !!}
		                    	{!! Form::text('art_name', null, ['class' => 'form-control', 'placeholder' => '输入拍品名称']) !!}

		                    </div>
		                    
 							<div class="form-group">
		                    	{!! Form::label('art_code', '编号') !!}
		                    	{!! Form::text('art_code', null, ['class' => 'form-control', 'placeholder' => '输入编号']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('art_author', '作者') !!}
		                    	{!! Form::text('art_author', null, ['class' => 'form-control', 'placeholder' => '输入作者']) !!}
		                    </div>

 							<div class="form-group">
		                    	{!! Form::label('art_size', '尺寸') !!}
		                    	{!! Form::text('art_size', null, ['class' => 'form-control','placeholder' => '输入尺寸']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('art_material', '材质') !!}
		                    	{!! Form::text('art_material', null, ['class' => 'form-control','placeholder' => '输入材质']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_age', '年代') !!}
		                    	{!! Form::text('art_age', null, ['class' => 'form-control', 'placeholder' => '输入年代']) !!}
		                    </div>

 							<div class="form-group">
		                    	{!! Form::label('art_price_hkd', '价格HKD') !!}
		                    	{!! Form::text('art_price_hkd', null, ['class' => 'form-control', 'placeholder' => '输入价格HKD']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('art_price_rmb', '价格RMB') !!}
		                    	{!! Form::text('art_price_rmb',  null, ['class' => 'form-control', 'placeholder' => '输入价格HKD']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('author_sumarry', '作者简介') !!}
		                    	{!! Form::text('author_sumarry', null, ['class' => 'form-control', 'placeholder' => '输入作者简介']) !!}
		                    </div>

		                     <div class="form-group">
		                    	{!! Form::label('art_inscription', '款识') !!}
		                    	{!! Form::text('art_inscription', null, ['class' => 'form-control', 'placeholder' => '输入款识']) !!}
		                    </div>

 							<div class="form-group">
		                    	{!! Form::label('art_tizhi', '题识') !!}
		                    	{!! Form::text('art_tizhi', null, ['class' => 'form-control', 'placeholder' => '输入题识']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_mark', '题签') !!}
		                    	{!! Form::text('art_mark', null, ['class' => 'form-control', 'placeholder' => '输入题签']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_seal', '钤印') !!}
		                    	{!! Form::text('art_seal', null, ['class' => 'form-control', 'placeholder' => '输入钤印']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_collection_seal', '收藏印') !!}
		                    	{!! Form::text('art_collection_seal', null, ['class' => 'form-control', 'placeholder' => '输入收藏印']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_publish', '出版') !!}
		                    	{!! Form::text('art_publish', null, ['class' => 'form-control', 'placeholder' => '输入出版']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_annotation', '释文') !!}
		                    	{!! Form::text('art_annotation', null, ['class' => 'form-control', 'placeholder' => '输入释文']) !!}
		                    </div>

		                     <div class="form-group">
		                    	{!! Form::label('art_signature', '签名') !!}
		                    	{!! Form::text('art_signature', null, ['class' => 'form-control', 'placeholder' => '输入签名']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_phase', '品相') !!}
		                    	{!! Form::text('art_phase', null, ['class' => 'form-control', 'placeholder' => '输入品相']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_reference', '参阅') !!}
		                    	{!! Form::text('art_reference', null, ['class' => 'form-control', 'placeholder' => '输入参阅']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_record', '著录') !!}
		                    	{!! Form::text('art_record', null, ['class' => 'form-control', 'placeholder' => '输入著录']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_exhibition', '展览') !!}
		                    	{!! Form::text('art_exhibition', null, ['class' => 'form-control', 'placeholder' => '输入展览']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('art_source', '来源') !!}
		                    	{!! Form::text('art_source', null, ['class' => 'form-control', 'placeholder' => '输入来源']) !!}
		                    </div>
		                    
		                     <div class="form-group">
		                    	{!! Form::label('art_lot', 'lot号') !!}
		                    	{!! Form::text('art_lot', null, ['class' => 'form-control', 'placeholder' => '输入LOT号']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('begin_price_hkd', '起始估价HKD') !!}
		                    	{!! Form::text('begin_price_hkd', null, ['class' => 'form-control', 'placeholder' => '输入起始估价HKD']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('end_price_hkd', '最高估价HKD') !!}
		                    	{!! Form::text('end_price_hkd', null, ['class' => 'form-control', 'placeholder' => '输入最高估价HKD']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('begin_price_rmb', '起始估价RMB') !!}
		                    	{!! Form::text('begin_price_rmb', null, ['class' => 'form-control', 'placeholder' => '输入起始估价RMB']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('end_price_rmb', '最高估价RMB') !!}
		                    	{!! Form::text('end_price_rmb', null, ['class' => 'form-control', 'placeholder' => '输入最高估价RMB']) !!}
		                    </div>

		                     
		                     <div class="form-group">
		                    	{!! Form::label('art_dynasty', '朝代') !!}
		                    	{!! Form::text('art_dynasty', null, ['class' => 'form-control', 'placeholder' => '输入朝代']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('art_sumarry', '作品描述') !!}
		                    	{!! Form::text('art_sumarry', null, ['class' => 'form-control', 'placeholder' => '输入作品描述']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('lang', '语言种类') !!}
		                      	{!! Form::select('lang', ['0' => '中文繁体', '1' => '英文'], null, ['class' => 'form-control']) !!}
		                    </div>
		                    <input  name="asa_id"  type="hidden" id="asa_id" value="<?php echo $_GET["asa_id"]?>" />
		                   
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