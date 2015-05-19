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
	        修改拍卖会
	        <small>修改拍卖会-{{$auction->auction_name}}</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li><a href="/admin/auction"><i class="fa fa-newspaper-o"></i> 拍卖会管理</a></li>
	        <li class="active">编辑</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box box-primary">

				<div role="tabpanel">
					<ul class="nav nav-tabs" role="tablist" id="myTab">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">拍卖会</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">专场</a></li>
					</ul>
					<div class="tab-content">
	   		 		<div role="tabpanel" class="tab-pane active" id="home"> 
	   		 			{!! Form::model($auction, ['route' => ['admin.auction.update', $auction->id ], 'method' => 'put']) !!}
		                
		                <div class="box-body">
		                    <div class="form-group">
		                    	{!! Form::label('auction_name', '拍卖会名称') !!}
		                    	{!! Form::text('auction_name', null, ['class' => 'form-control ', 'placeholder' => '输入拍卖会名称']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('preview_begin_time', '预展开始时间') !!}
		                    	{!! Form::text('preview_begin_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择预展开始时间']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('preview_end_time', '预展结束时间') !!}
		                    	{!! Form::text('preview_end_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择预展结束时间']) !!}
		                    </div>

 							<div class="form-group">
		                    	{!! Form::label('auction_begin_time', '拍卖开始时间') !!}

		                    	{!! Form::text('auction_begin_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择拍卖开始时间']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('auction_end_time', '拍卖结束时间') !!}

		                    	{!! Form::text('auction_end_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择拍卖结束时间']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('auction_addr', '拍卖地点') !!}
		                    	{!! Form::text('auction_addr', null, ['class' => 'form-control', 'placeholder' => '输入拍卖地点']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('auction_preview_addr', '预展地点') !!}
		                    	{!! Form::text('auction_preview_addr', null, ['class' => 'form-control', 'placeholder' => '输入预展地点']) !!}
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
		            	</div>
	   					 <div role="tabpanel" class="tab-pane" id="profile">
	   					 	<div class="tab-pane" id="tabs-2">
	   					 		{!! Form::open(['url' => 'admin/batchDestroy/asas', 'method' => 'delete']) !!}
	      	  		
				                <div class="box-header">
								  	<div>
						                <a href="/admin/asa/create?auction_id={{$auction->id}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>  新建</a>
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
								            	<a href="/admin/asa/{{ $asa->id }}/edit?auction_id={{$auction->id}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>  编辑</a>
								            </td>
								        </tr>
									@endforeach 
								    </tbody>
								</table>
								
							{!! $asas->render() !!}
	                		</div><!-- /.box-body -->
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