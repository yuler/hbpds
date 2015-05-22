@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        
	        <small>编辑拍品</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li><a href="/admin/auction"><i class="fa fa-newspaper-o"></i> 拍卖会管理</a></li>
	        <li><a href="/admin/auction/<?php echo $_GET["auction_id"]?>/edit"><i class="fa fa-newspaper-o"></i> 编辑拍卖会</a></li>
	        <li><a href="/admin/asa/{{$artwork->asa_id}}/edit"><i class="fa fa-newspaper-o"></i> 编辑专场</a></li>
	        <li class="active">编辑专场</li>
	      </ol>
	    </section>
 <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box box-primary">
	                <!-- form start -->
	                
	                <div class="box-body">
					

						<div class="row">
							<div class="col-md-6">
	                {!! Form::model($artwork, ['route' => ['admin.artwork.update', $artwork->id ], 'method' => 'put', 'id'=>'artForm']) !!}
			                   <div class="form-group">
			                    	{!! Form::label('art_lot', 'LOT NO.') !!}
			                    	{!! Form::text('art_lot', null, ['class' => 'form-control', 'placeholder' => '输入LOT号']) !!}
			                    </div>
			                      <div class="form-group">
			                    	{!! Form::label('art_age', '年代') !!}
			                    	{!! Form::text('art_age', null, ['class' => 'form-control', 'placeholder' => '输入年代']) !!}
			                    </div>

			                    <div class="form-group">
			                    	{!! Form::label('art_author', '作者') !!}
			                    	{!! Form::text('art_author', null, ['class' => 'form-control', 'placeholder' => '输入作者']) !!}
			                    </div>
								<div class="form-group">
			                    	{!! Form::label('art_name', '拍品名稱') !!}
			                    	{!! Form::textarea('art_name', null, ['class' => 'form-control','rows'=>'3','cols'=>'50', 'placeholder' => '输入拍品名称']) !!}

			                    </div>
			                       <div class="form-group">
			                    	{!! Form::label('art_material', '材质') !!}
			                    	{!! Form::text('art_material', null, ['class' => 'form-control','placeholder' => '输入材质']) !!}
			                    </div>

			                    <div class="form-group">
			                    	{!! Form::label('art_size', '尺寸') !!}
			                    	{!! Form::textarea('art_size', null, ['class' => 'form-control','rows'=>'3','placeholder' => '输入尺寸']) !!}
			                    </div>

	 							<div class="form-group">
			                    	{!! Form::label('art_code', '年作 （多為書畫）') !!}
			                    	{!! Form::text('art_code', null, ['class' => 'form-control', 'placeholder' => '输入编号']) !!}
			                    </div>

 								<div class="form-group">
			                    	{!! Form::label('art_seal', '鈐印（多為書畫） ') !!}
		                    		{!! Form::textarea('art_seal', null, ['class' => 'form-control','rows'=>'5', 'placeholder' => '']) !!}
			                    </div>
	 							<div class="form-group">
			                    	{!! Form::label('art_tizhi', '題識（款識）   ') !!}
		                    		{!! Form::textarea('art_tizhi', null, ['class' => 'form-control','rows'=>'5', 'placeholder' => '']) !!}
			                    </div>
			                 
			                   <div class="form-group">
			                    	{!! Form::label('art_annotation', '釋文') !!}
		                    		{!! Form::textarea('art_annotation', null, ['class' => 'form-control','rows'=>'5', 'placeholder' => '']) !!}
			                    </div>
 								<div class="form-group">
			                    	{!! Form::label('art_source', '來源') !!}
			                    	{!! Form::textarea('art_source', null, ['class' => 'form-control','rows'=>'3', 'placeholder' => '输入来源']) !!}
			                    </div>
			                    
  								<div class="form-group">
			                    	{!! Form::label('art_publish', '出版、參閱、展覽') !!}
			                    	{!! Form::textarea('art_publish', null, ['class' => 'form-control','rows'=>'3', 'placeholder' => '输入出版']) !!}
			                    </div>

								 <div class="form-group">
			                    	{!! Form::label('begin_price_hkd', '估價起价HKD') !!}
			                    	{!! Form::text('begin_price_hkd', null, ['class' => 'form-control', 'placeholder' => '输入起始估价HKD']) !!}
			                    </div>
								
								 <div class="form-group">
			                    	{!! Form::label('end_price_hkd', '估價最高价HKD') !!}
			                    	{!! Form::text('end_price_hkd', null, ['class' => 'form-control', 'placeholder' => '输入最高估价HKD']) !!}
			                    </div>
			                     <div class="form-group">
			                    	{!! Form::label('begin_price_rmb', '估價起价RMB') !!}
			                    	{!! Form::text('begin_price_rmb', null, ['class' => 'form-control', 'placeholder' => '输入起始估价RMB']) !!}
			                    </div>
			                    <div class="form-group">
			                    	{!! Form::label('end_price_rmb', '估價最高价RMB') !!}
			                    	{!! Form::text('end_price_rmb', null, ['class' => 'form-control', 'placeholder' => '输入最高估价RMB']) !!}
			                    </div>
			                    <div class="form-group">
			                    	{!! Form::label('art_price_hkd', '成交价HKD') !!}
			                    	{!! Form::text('art_price_hkd', null, ['class' => 'form-control', 'placeholder' => '输入价格HKD']) !!}
			                    </div>
 
			                    <div class="form-group">
			                    	{!! Form::label('art_price_rmb', '成交价RMB') !!}
			                    	{!! Form::text('art_price_rmb',  null, ['class' => 'form-control', 'placeholder' => '输入价格HKD']) !!}
			                    </div>

								<div class="form-group">
			                    	{!! Form::label('art_sumarry', '說明') !!}
		                    		{!! Form::textarea('art_sumarry', null, ['class' => 'simditor', 'placeholder' => '']) !!}
			                    </div>


			                     <div class="form-group">
			                    	{!! Form::label('lang', '语言种类（中文版和英文版）') !!}
			                      	{!! Form::select('lang', ['0' => '中文繁体', '1' => '英文'], null, ['class' => 'form-control']) !!}
			                    </div> 
	<input  name="asa_id"  type="hidden" id="asa_id" value="{{$artwork->asa_id}}" />

								@foreach ($attachements as $att)
									<div id="aaa_{{$att->id}}" ><input  name="att_ids[]"  type="hidden"  value="{{$att->id}}" /></div>
								@endforeach 
			                    <button type="submit" class="btn btn-primary">提交</button>
			                    {!! Form::close() !!}
							</div>
							<div class="col-md-6">
								<div class="row">
									<a id="dianji" href="javascript:void(0);" class="btn btn-primary" onclick="$('#uploadAvatar').trigger('click');">上传图片</a>
									<input name="upload" type="file" class="hide" id="uploadAvatar" >
									<div style="color:red">图片大小不能超过5M</div>
								</div>
								<div class="row" id="yulan">
								@foreach ($attachements as $att)
								  <div id="att_{{$att->id}}" class="col-sm-6 col-md-4"><div class="thumbnail"><img src="{{$att->att_path}}" ><div class="caption"><h4>{{$att->att_name}}</h4><p><a href="javascript:deleteAtt('{{$att->id}}')" class="btn btn-primary btn-xs" role="button" >删除</a></p></div></div></div>
	  							@endforeach 

								</div>

							</div>
						</div><!-- /.row-->
	                </div><!-- /.box-body -->
              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->
	    <!-- Main content -->
	   
	</div><!-- /.content-wrapper -->
	<br>
	<br>

	<script type="text/javascript">

$('#uploadAvatar').fileupload({
        url: '/admin/attachment?_token={{Session::token()}}',
        dataType: 'json',
        forceIframeTransport: true,
        /*done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },*/
        progress: function (e, data) {
        	/*$('#uploadAvatarProgress').fadeIn(1000);
    		var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#uploadAvatarProgress .progress-bar').css(
                'width',
                progress + '%'
            );*/
        },
        success: function(result, textStatus, jqXHR){
			//$("#asa_image").val(result.file_path);
			//var im='<div class="col-md-5"><img src="'+result.file_path+'"/></div>';

			var im = '<div id="att_'+result.att_id+'" class="col-sm-6 col-md-4"><div class="thumbnail"><img src="'+result.file_path+'" ><div class="caption"><h4>'+result.file_name+'</h4><p><a href="javascript:deleteAtt(\''+result.att_id+'\')" class="btn btn-primary btn-xs" role="button" >删除</a></p></div></div></div>';

			$("#yulan").append(im);
			var atts = '<div id="aaa_'+result.att_id+'" ><input  name="att_ids[]"  type="hidden"  value="'+result.att_id+'" /></div>'
			$("#artForm").append($(atts));
			

        },
        error: function (jqXHR, textStatus, errorThrown) {
        	console.log(jqXHR);
        	console.log(textStatus);
        	console.log(errorThrown);
        	alert("上传失败");
        },
        complete: function(e,data) {
        	
        },
    });

function deleteAtt(id){

	$.post('/admin/batchDestroy/attachments',{
		'_method':'delete',
		'_token':'{{Session::token()}}',
		'ids[]':id,
		'deleteType':'artwork'
	},function(data){
		if(data.success='true'){		
			$("#att_"+id).remove();
			$("#aaa_"+id).remove();
		}else if(data.success='false'){
			alert(data.msg);
		}else {
			alert("删除失败");
		}
	},'json');
	
	
}
</script>
@endsection
