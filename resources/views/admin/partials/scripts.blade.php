<!-- jQuery 2.1.3 -->
    <script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='/plugins/fastclick/fastclick.min.js'></script>    
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    
    <script src="/dist/js/demo.js" type="text/javascript"></script>

    <script src="/plugins/simditor-2.1.5/scripts/module.js" type="text/javascript" ></script>
    <script src="/plugins/simditor-2.1.5/scripts/hotkeys.js" type="text/javascript" ></script>
    <script src="/plugins/simditor-2.1.5/scripts/uploader.js" type="text/javascript" ></script>
    <script src="/plugins/simditor-2.1.5/scripts/simditor.js" type="text/javascript" ></script>
    <script src="/plugins/simditor-2.1.5/scripts/simditor-dropzone.js" type="text/javascript"></script>
    <script src="/plugins/app/all.js" type="text/javascript"></script>

    <!-- <script>
                /*
        <a href="posts/2" data-method="delete"> 
    
        - Or, request confirmation in the process -
    
        <a href="posts/2" data-method="delete" data-confirm="Are you sure?">
        */
         
        (function() {
         
          var laravel = {
            initialize: function() {
              this.methodLinks = $('a[data-method]');
         
              this.registerEvents();
            },
         
            registerEvents: function() {
              this.methodLinks.on('click', this.handleMethod);
            },
         
            handleMethod: function(e) {
              var link = $(this);
              var httpMethod = link.data('method').toUpperCase();
              var form;
         
              // If the data-method attribute is not PUT or DELETE,
              // then we don't know what to do. Just ignore.
              if ( $.inArray(httpMethod, ['PUT', 'DELETE']) === - 1 ) {
                return;
              }
         
              // Allow user to optionally provide data-confirm="Are you sure?"
              if ( link.data('confirm') ) {
                if ( ! laravel.verifyConfirm(link) ) {
                  return false;
                }
              }
         
              form = laravel.createForm(link);
              form.submit();
         
              e.preventDefault();
            },
         
            verifyConfirm: function(link) {
              return confirm(link.data('confirm'));
            },
         
            createForm: function(link) {
              var form = 
              $('<form>', {
                'method': 'POST',
                'action': link.attr('href')
              });
         
              var token = 
              $('<input>', {
                'type': 'hidden',
                'name': '_token',
                'value': link.data('token') // hmmmm...
                });
         
              var hiddenInput =
              $('<input>', {
                'name': '_method',
                'type': 'hidden',
                'value': link.data('method')
              });
         
              return form.append(token, hiddenInput)
                         .appendTo('body');
            }
          };
         
          laravel.initialize();
         
        })();
    </script> -->