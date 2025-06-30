<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ trans('messages.PAYMENT GATEWAY') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::to('newassets/images/favicon.ico') }}">
        <!-- App css -->
        <link href="{{ URL::to('newassets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ URL::to('newassets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('newassets/css/app.min.css') }}" rel="stylesheet" type="text/css"  id="app-stylesheet" />

        {{-- message toastr --}}
        <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
        <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
    </head>

    <body class="authentication-bg">

       @yield('content')

       
        <!-- Vendor js -->
        <script src="{{ URL::to('newassets/js/vendor.min.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::to('newassets/js/app.min.js') }}"></script>
  
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
    </script>
    @yield('script')
    </body>
</html>
