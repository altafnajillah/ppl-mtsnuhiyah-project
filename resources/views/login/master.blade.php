<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('tema') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('tema') }}/css/sb-admin-2.min.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-success">

    <div class="container mt-5">

        <!-- Outer Row -->
        <div class="row justify-content-center" style="margin-top: 100px;">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 25px">
                    <div class="card-body p-0">
                        @yield('isiAuth')
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('tema') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('tema') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
{{--    <script src="{{ asset('tema') }}/vendor/jquery-easing/jquery.easing.min.js"></script>--}}

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('tema') }}/js/sb-admin-2.min.js"></script>

</body>

</html>
