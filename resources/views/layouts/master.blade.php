<!doctype html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/turbo/pages/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2019 13:19:24 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.html" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Turbo - Bootstrap Material Admin Dashboard Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/turbo.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
{{--    <link href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/v4-shims.css">
    <link href="../assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    @include('includes.sidebar')
    <div class="main-panel">
        @include('includes.navbar')
        <div class="content">
            @yield('content')
        @include('includes.footer')
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Topbar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-default" data-color="default"></span>
                            <span class="badge filter badge-blue" data-color="blue"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-yellow" data-color="yellow"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-white" data-color="white"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="text-center">
                            <span class="badge filter badge-gray" data-color="gray"></span>
                            <span class="badge filter badge-white" data-color="default"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Mini</p>
                        <div class="togglebutton switch-sidebar-mini">
                            <label>
                                <input type="checkbox" unchecked>
                            </label>

                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/vendors/material.min.js" type="text/javascript"></script>
<script src="../assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
@yield('ajax')
<!-- Forms Validations Plugin -->
<script src="../assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../assets/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="../assets/vendors/charts/flot/jquery.flot.js"></script>
<script src="../assets/vendors/charts/flot/jquery.flot.resize.js"></script>
<script src="../assets/vendors/charts/flot/jquery.flot.pie.js"></script>
<script src="../assets/vendors/charts/flot/jquery.flot.stack.js"></script>
<script src="../assets/vendors/charts/flot/jquery.flot.categories.js"></script>
<script src="../assets/vendors/charts/chartjs/Chart.min.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="../assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="../assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="../assets/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="../assets/vendors/nouislider.min.js"></script>
<!-- Select Plugin -->
<script src="../assets/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="../assets/vendors/jquery.datatables.js"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="../assets/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="../assets/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/turbo.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

<script src="../assets/js/charts/flot-charts.js"></script>
<script src="../assets/js/charts/chartjs-charts.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<!-- Mirrored from www.urbanui.com/turbo/pages/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2019 13:20:17 GMT -->
</html>
