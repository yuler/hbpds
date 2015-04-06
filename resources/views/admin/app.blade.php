<!DOCTYPE html>
<html>
  
  @include('admin.partials.head')
  

  <style type="text/css">
	.main-header {
	  position: fixed;
	  max-height: 100px;
	  z-index: 1030;
	  width: 100%;
	}
	.main-sidebar {
	  position: fixed;	
	}
	.main-footer {
		position: fixed;
		bottom: 0px;
		width: 100%;
	}
	.content-wrapper {
		padding: 0 30px;
		padding-top: 50px;
		min-height: 790px!important;
	}
	.no-print{
		top:120px!important;
	}
	.table-hover > tbody > tr:hover {
	  background-color: #FFE4E4;
	}
	.form-errors {
		display: none;
		position: fixed;
		top: 80px;
		z-index: 1000;
		left: 45%;
		width: 20%;
	}
	.form-errors li {
		list-style-type: none;
		text-align: center;
 	}

  </style>



  <body class="skin-blue sidebar-mini">

    <div class="wrapper">
      
      	@include('admin.partials.header')
	
		@include('admin.partials.aside')

		@yield('content')

		@include('admin.partials.footer')

		@include('admin.partials.aside2')

		@include('admin.partials.scripts')

    </div><!-- ./wrapper -->
	
	@if ( $errors->any())
    	<ul class="alert alert-danger form-errors">
    		@foreach ($errors->all() as $error)
    			<li>{{ $error }}</li>
    		@endforeach
    	</ul>
    @endif

	<script type="text/javascript">
	  	$(function(){
	  		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
	          checkboxClass: 'icheckbox_minimal-blue',
	          radioClass: 'iradio_minimal-blue'
	        });
	        //Red color scheme for iCheck
	        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
	          checkboxClass: 'icheckbox_minimal-red',
	          radioClass: 'iradio_minimal-red'
	        });
	        //Flat red color scheme for iCheck
	        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
	          checkboxClass: 'icheckbox_flat-green',
	          radioClass: 'iradio_flat-green'
	        });

	        $('table thead input[type="checkbox"]').on('ifClicked', function(event){
			  	$('table tbody input[type="checkbox"]').iCheck('toggle');
			});



	        if($('.simditor').length > 0){
		        editor = new Simditor({
	                textarea: $('.simditor'),
	                toolbar:[
	                    'title','bold','italic','underline','strikethrough','ol','ul','blockquote','code','link','image','hr'
	                ],
	                defaultImage : '/assets/img/avatar/default.jpg',
	                upload: {
	                    url: '/admin/attachment?att_type=1&_token={{ Session::token() }}',
	                    fileKey: 'upload',
	                    leaveConfirm: '正在上传文件，如果离开上传会自动取消'
	                },
	                pasteImage: true,
	            });
	        }
	       	
	       	if($('.form-errors').length > 0){
	       		$('.form-errors').slideDown(1000).delay(3000).slideUp(1000);
	       	}
	  	})
	</script>
  </body>
</html>

