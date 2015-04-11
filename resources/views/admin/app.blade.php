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
 	.flash-message {
		position: fixed;
		z-index: 1000;
		bottom: 15px;
		right: 15px;
		width: 15%;
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

    @if (Session::has('flash_notification.message'))
	    <div class="alert alert-{{ Session::get('flash_notification.level') }} flash-message">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	        {{ Session::get('flash_notification.message') }}
	    </div>
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

	        $('.datepicker').datepicker();

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
	       		$('.form-errors').slideDown(1000).delay(2000).slideUp(1000);
	       	}
	       	if($('.flash-message').length > 0){
	       		$('.flash-message').delay(2000).slideUp(2000);
	       	}
	       	

			$('#confirmDelete').on('show.bs.modal', function (e) {
				  $message = $(e.relatedTarget).attr('data-message');
				  $(this).find('.modal-body p').text($message);
				  $title = $(e.relatedTarget).attr('data-title');
				  $(this).find('.modal-title').text($title);

				  // Pass form reference to modal for submission on yes/ok
				  var form = $(e.relatedTarget).closest('form');
				  $(this).find('.modal-footer #confirm').data('form', form);
			});

			/*<!-- Form confirm (yes/ok) handler, submits form -->*/
			$('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
				$(this).data('form').submit();
			});
	  	})
	</script>


	<!-- Delte Confirm Modal Dialog -->
	<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">Delete Parmanently</h4>
	      </div>
	      <div class="modal-body">
	        <p>Are you sure about this ?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        <button type="button" class="btn btn-danger" id="confirm">删除</button>
	      </div>
	    </div>
	  </div>
	</div>

  </body>
</html>

