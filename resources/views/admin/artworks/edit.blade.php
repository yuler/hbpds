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