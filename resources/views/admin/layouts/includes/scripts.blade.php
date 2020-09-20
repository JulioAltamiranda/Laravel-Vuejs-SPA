    <!-- fontawesome  -->
    <script src="/assets/icon/index.js"></script>
    <!-- jquery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <!-- popper  -->
    <script src="/assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- toastr -->
    <script src="/assets/plugins/toastr/toastr.min.js"></script>
    @if(session('status'))
        <style>
            .toast-success{
                background: #222f3e;
            }
        </style>
        <script>
            toastr.success("{{ session('status') }}");
        </script>
    @endif
    <!-- script custom  -->
    <script src="/assets/js/index.js"></script>
    <!-- Optional script -->
    @stack('scripts')