<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filedash - File Manager Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="/assets/vendors/bundle.css" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&amp;display=swap" rel="stylesheet">

    @yield('style')
    <!-- App css -->
    <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<!-- <div class="preloader">
    <div class="preloader-icon"></div>
</div> -->
<!-- Preloader -->
<style>
    .layout-wrapper .content-wrapper .content-body .content {
        flex: 1;
        padding: 30px;
        padding-top: 90px;
        padding-left: 140px;
        padding-right: 50px;
        padding-bottom: 0;
    }
    .header {
        z-index: 999;
        position: fixed;
        right: 50px;
        left: 110px;
        top: 0;
        background-color: white;
    }
</style>
<!-- Layout wrapper -->
<div class="layout-wrapper">
  @include('filemanager.layouts.header')

    <!-- Content wrapper -->
    <div class="content-wrapper">
        @include('filemanager.layouts.sidebar')

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">  
                @yield('page')
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer d-print-none">
                <div>© {{ date('Y') }}  </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="/assets/vendors/bundle.js"></script>
<script src="/assets/cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
<script src="/assets/cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.min.js"></script>

<!-- Apex chart -->
<script src="/assets/apexcharts.com/samples/assets/irregular-data-series.js"></script>
<script src="/assets/vendors/charts/apex/apexcharts.min.js"></script>

<!-- Dashboard scripts -->
<script src="/assets/js/examples/pages/file-dashboard.js"></script>

@yield('script')

<!-- App scripts -->
<!-- <script src="/assets/js/app.min.js"></script> -->

</body>
</html>
