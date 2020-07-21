<!DOCTYPE html>
<html>

<head>

    @include('layouts.partials.header')
    <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    @yield('stylesheets')

</head>

<body>

    @yield('content')


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
