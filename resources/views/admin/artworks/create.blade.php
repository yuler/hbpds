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
		                   <div class="form-group">
								<a id="dianji" href="javascript:void(0);" class="btn btn-primary" onclick="$('#uploadAvatar').trigger('click');">上传附件</a>
								<input name="upload" type="file" class="hide" id="uploadAvatar">
                             </div>

		                </div><!-- /.box-body -->


<div class="row">
	<div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="..." alt="...">
	      <div class="caption">
	        <h3>Thumbnail label</h3>
	        <p>...</p>
	        <p><a href="#" class="btn btn-primary" role="button">删除</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	  </div>
</div>

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
<script type="text/javascript">
/**
$('#fileupload').fileupload({ 
dataType: 'json',
        forceIframeTransport: true, 
    done: function (e, data) {  
        $.each(data.result, function (index, file) {  
            $('<p/>').text(file.name + ' uploaded').appendTo($("body"));  
        });  
    }  
});
*/

$('#uploadAvatar').fileupload({
        url: '/admin/attachment',
        dataType: 'json',
        forceIframeTransport: true,
        /*done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },*/
        progress: function (e, data) {
        	$('#uploadAvatarProgress').fadeIn(1000);
    		var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#uploadAvatarProgress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        success: function(result, textStatus, jqXHR){
/*
        	var al = '<div class="row">' +
							'<div class="alertMsg col-lg-2 col-sm-3 col-xs-6">' +
								'<div>' +
									' ' +
								'</div>' +
							'</div>' +
						'</div>';

        	var template = Handlebars.compile(al);

    		data = $.parseJSON(result.jsonStr);
    		var html = template(data);
    		$('footer').after(html);
    		$('.alertMsg').fadeIn(1000).delay(2000).slideUp(1000).queue(function(){
    			$('.alertMsg').parent().remove();
    		});
    		if(data.success){
    			$('.avatar img, .nav-avatar img').attr('src',webRoot + '/' + data.obj.avatarPath);
    		}
*/
$("#asa_image").val(result.file_path);
var im='<img width="200" height="150" src="'+result.file_path+'" />';
$("#yulan").append(im);
        },
        error: function (jqXHR, textStatus, errorThrown) {
        	console.log(jqXHR);
        	console.log(textStatus);
        	console.log(errorThrown);
        },
        complete: function(e,data) {
        	setTimeout( function(){
    			$('#uploadAvatarProgress').fadeOut(1000);
    			setTimeout(function(){
    				$('#uploadAvatarProgress .progress-bar').css(
	                    'width',
	                    '0%'
	                )
    			},1000)
    		},2000);
        },
    }) 
</script>
	
@endsection