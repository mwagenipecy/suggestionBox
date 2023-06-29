<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <title>Udsm sugestion online system</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/myAppStyle/images/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/myAppStyle/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('/myAppStyle/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('/myAppStyle/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('/myAppStyle/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('/myAppStyle/css/style.css')}}" rel="stylesheet">

</head>

<body>



<!--*******************
    Preloader start
********************-->
@include('systemUser.layout.preLoad')<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="#">
                <b class="logo-abbr">
                    <img src="{{asset('/myAppStyle/udsmLogo/20210428_081523_177_udsm logo.png')}}" alt=""> </b>
                <span class="logo-compact"><img src="{{asset('/myAppStyle/udsmLogo/20210428_081523_177_udsm logo.png')}}" alt=""></span>
                <span class="brand-title mb-2">
                        <img src="{{asset('/myAppStyle/udsmLogo/20210428_081523_177_udsm logo.png')}}" style="height:79px; width:120px; margin-left:25%;" alt="">
                    </span>
            </a>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
@include('systemUser.layout.header')
<!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
@include('systemUser.layout.sidebar')
<!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
      @include('systemUser.layout.backMessage')

    @yield('user_contents')
    <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
@include('systemUser.layout.footer')
<!--**********************************
        Footer end
    ***********************************-->
</div>


<!--**********************************
    Scripts
***********************************-->
<script src="{{asset('/myAppStyle/plugins/common/common.min.js')}}"></script>
<script src="{{asset('/myAppStyle/js/custom.min.js')}}"></script>
<script src="{{asset('/myAppStyle/js/settings.js')}}"></script>
<script src="{{asset('/myAppStyle/js/gleek.js')}}"></script>
<script src="{{asset('/myAppStyle/js/styleSwitcher.js')}}"></script>

<!-- Chartjs -->
<script src="{{asset('/myAppStyle/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Circle progress -->
<script src="{{asset('/myAppStyle/plugins/circle-progress/circle-progress.min.js')}}"></script>
<!-- Datamap -->
<script src="{{asset('/myAppStyle/plugins/d3v3/index.js')}}"></script>
<script src="{{asset('/myAppStyle/plugins/topojson/topojson.min.js')}}"></script>
<script src="{{asset('/myAppStyle/plugins/datamaps/datamaps.world.min.js')}}"></script>
<!-- Morrisjs -->
<script src="{{asset('/myAppStyle/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/myAppStyle/plugins/morris/morris.min.js')}}"></script>
<!-- Pignose Calender -->
<script src="{{asset('/myAppStyle/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/myAppStyle/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
<!-- ChartistJS -->
<script src="{{asset('/myAppStyle/plugins/chartist/js/chartist.min.js')}}"></script>
<script src="{{asset('/myAppStyle/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



<script src="{{asset('/myAppStyle/js/dashboard.blade.php/dashboard.blade.php-1.js')}}"></script>

</body>

</html>
