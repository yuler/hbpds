@extends('admin.app')
@section('content')



	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        新增拍卖专场
	        <small>新增一个拍卖专场</small>
	      </h1>
	      <ol class="breadcrumb">
	       <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li><a href="/admin/auction"><i class="fa fa-newspaper-o"></i> 拍卖会管理</a></li>
	        <li><a href="/admin/auction/<?php echo $_GET["auction_id"]?>/edit"><i class="fa fa-newspaper-o"></i> 编辑拍卖会</a></li>
	        <li class="active">新建专场</li>
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
	                {!! Form::open(['route' => 'admin.asa.store', 'method' => 'post']) !!}
	                
		                <div class="box-body">
		                    <div class="form-group">
		                    	{!! Form::label('asa_name', '专场名称') !!}
		                    	{!! Form::text('asa_name', null, ['class' => 'form-control', 'placeholder' => '输入专场名称']) !!}

		                    </div>
		                    
 							<div class="form-group">
		                    	{!! Form::label('preview_begin_time', '预展开始时间') !!}
		                    	{!! Form::text('preview_begin_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择预展开始时间']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('preview_begin_time', '预展结束时间') !!}
		                    	{!! Form::text('preview_end_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择预展结束时间']) !!}
		                    </div>

 							<div class="form-group">
		                    	{!! Form::label('begin_time', '拍卖开始时间') !!}
		                    	{!! Form::text('begin_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择拍卖开始时间']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('end_time', '拍卖结束时间') !!}
		                    	{!! Form::text('end_time', null, ['class' => 'form-control','onFocus'=>'WdatePicker({dateFmt:\'yyyy-MM-dd HH:mm:ss\'})', 'placeholder' => '选择拍卖结束时间']) !!}
		                    </div>
		                     <div class="form-group">
		                    	{!! Form::label('asa_addr', '拍卖地点') !!}
		                    	{!! Form::text('asa_addr', null, ['class' => 'form-control', 'placeholder' => '输入拍卖地点']) !!}
		                    </div>


		                    <div class="form-group">
		                    	{!! Form::label('asa_only_online', '仅限网拍') !!}
		                    	{!! Form::select('asa_only_online', ['0' => '否', '1' => '是'], null, ['class' => 'form-control']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('asa_online_url', '网拍地址') !!}
		                    	{!! Form::text('asa_online_url', null, ['class' => 'form-control', 'placeholder' => '输入网拍地址']) !!}
		                    </div>

		                     <div class="form-group">
		                    	{!! Form::label('asa_online_logo', '网拍LOGO') !!}
		                    	{!! Form::text('asa_online_logo', null, ['class' => 'form-control', 'placeholder' => '']) !!}
		                    </div>

		                    <div class="form-group">
		                    	{!! Form::label('lang', '语言种类') !!}
		                      	{!! Form::select('lang', ['0' => '中文繁体', '1' => '英文'], null, ['class' => 'form-control']) !!}
		                    </div>

				<div class="form-group">
                                        {!! Form::label('asa_image', '宣传图') !!}
                                        {!! Form::text('asa_image', null, ['class' => 'form-control', 'placeholder' => '']) !!}
<!--<input id="fileupload" type="file" name="upload" data-url="/admin/attachment" multiple> -->

<a href="javascript:void(0);" class="btn btn-primary" onclick="$('#uploadAvatar').trigger('click');">上传头像</a>				<input name="upload" type="file" class="hide" id="uploadAvatar">
                                    </div>					
				

		                    <input  name="auction_id"  type="hidden" id="auction_id" value="<?php echo $_GET["auction_id"]?>" />
		                   
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
        	var alert = '<div class="row">' +
							'<div class="alertMsg col-lg-2 col-sm-3 col-xs-6">' +
								'<div>' +
									' ' +
								'</div>' +
							'</div>' +
						'</div>';
        	var template = Handlebars.compile(alert);
    		data = $.parseJSON(result.jsonStr);
    		var html = template(data);
    		$('footer').after(html);
    		$('.alertMsg').fadeIn(1000).delay(2000).slideUp(1000).queue(function(){
    			$('.alertMsg').parent().remove();
    		});
    		if(data.success){
    			$('.avatar img, .nav-avatar img').attr('src',webRoot + '/' + data.obj.avatarPath);
    		}
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
