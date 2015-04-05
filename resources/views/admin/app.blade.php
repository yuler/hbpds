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
		padding-top: 50px;
	}
	.no-print{
		top:120px!important;
	}
	.table-hover > tbody > tr:hover {
	  background-color: #FFE4E4;
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

	        $('document').on('click','table thead input[type="checkbox"]',function(){
	        	alert('xx');
	        });
	        
	        $('table thead input[type="checkbox"]').click(function(){
	        	alert('xxx');
	        });
	  	})
	</script>
  </body>
</html>

