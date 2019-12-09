<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
        Talzoft Electronics -
        @yield('title')
    </title>

    <!-- Favicon-->
    <link rel="icon" href="{{asset('Template/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('Template/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{asset('Template/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('Template/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('Template/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('Template/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('Template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{asset('Template/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{asset('Template/plugins/waitme/waitMe.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{asset('Template/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('Template/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('Template/css/themes/all-themes.css')}}" rel="stylesheet" />
    @yield('css')
    </head>
    <body class="theme-blue">
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>

        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars" style="display: none;"></a>
                    <a class="navbar-brand" href="index.html">ADMINBSB - MATERIAL DESIGN</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!-- Notifications -->
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">shopping_cart</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="content">
            <div class="conteiner-fluid">
                @yield('content')
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="{{asset('Template/plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap Core Js -->
        <script src="{{asset('Template/plugins/bootstrap/js/bootstrap.js')}}"></script>

        <!-- Select Plugin Js -->
        <script src="{{asset('Template/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="{{asset('Template/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="{{asset('Template/plugins/node-waves/waves.js')}}"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="{{asset('Template/plugins/jquery-countto/jquery.countTo.js')}}"></script>

        <!-- Jquery Spinner Plugin Js -->
        <script src="{{asset('Template/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

        <!-- Morris Plugin Js -->
        <script src="{{asset('Template/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('Template/plugins/morrisjs/morris.js')}}"></script>

        <!-- ChartJs -->
        <script src="{{asset('Template/plugins/chartjs/Chart.bundle.js')}}"></script>

        <!-- Flot Charts Plugin Js -->
        <script src="{{asset('Template/plugins/flot-charts/jquery.flot.js')}}"></script>
        <script src="{{asset('Template/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('Template/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('Template/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
        <script src="{{asset('Template/plugins/flot-charts/jquery.flot.time.js')}}"></script>

        <!-- Sparkline Chart Plugin Js -->
        <script src="{{asset('Template/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

        <!-- Custom Js -->
        <script src="{{asset('Template/js/admin.js')}}"></script>
        <script src="{{asset('Template/js/pages/index.js')}}"></script>

        <!-- Demo Js -->
        <script src="{{asset('Template/js/demo.js')}}"></script>
    </body>
</html>
@yield('js')
