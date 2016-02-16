       
 
    </body>

    <script src="{{ elixir('assets/js/admin/all.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->    
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    {{-- iChecks --}}
    {{-- <script src="{{ asset('assets/plugins/icheck-1.x/iCheck.min.js') }}"></script> --}}
    {{-- <script>$('input').iCheck();</script> --}}

</html>