<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('backend') }}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Page - Beonor</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('backend') }}/assets/css/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#" rel="tooltip">
                BEONOR
            </a>
        </div>

    </div>
</nav>
<!-- End Navbar -->
<div class="page-header" filter-color="linear-gradient(to bottom left, #5F65A3 , #21BCEA)">
    <div class="page-header-image" style="background-image:url({{ asset('backend') }}/assets/img/login.jpg)"></div>
    <div class="container">
        <div class="col-md-4 content-center">
            <div class="card card-login card-plain">
                <form class="form" method="" action="">
                    <div class="header header-primary text-center">
                        <div class="logo-container">
                            <img src="{{ asset('backend') }}/assets/img/favicon_white.png" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="{{route('rapat')}}" class="btn btn-primary btn-round btn-lg btn-block" style="background: linear-gradient(to bottom left, #5F65A3 , #21BCEA)">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer" >
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Github
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('backend') }}/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('backend') }}/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('backend') }}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('backend') }}/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('backend') }}/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('backend') }}/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('backend') }}/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>