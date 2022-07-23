<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from welly.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 16:38:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Skin Care - Hospital Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }} rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
 <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">


</head>
<body>



    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        @include('layouts.header')

        @include('layouts.sidebar')

        @yield('content')


    </div>
    @include('layouts.footer')
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/deznav-init.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>

	<!-- Apex Chart -->
	<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>


     {{-- <!-- Required vendors -->
     <script src="vendor/global/global.min.js"></script>
     <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
     <script src="vendor/chart.js/Chart.bundle.min.js"></script>
     <script src="js/custom.min.js"></script>
     <script src="js/deznav-init.js"></script>
     <script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
     <script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
     <!-- Chart piety plugin files -->
     <script src="vendor/peity/jquery.peity.min.js"></script> --}}

     {{-- <!-- Apex Chart -->
     <script src="vendor/apexchart/apexchart.js"></script> --}}

     <!-- Dashboard 1 -->
     <script src="js/dashboard/dashboard-1.js"></script>
     <script>
         $(function () {
             $('#datetimepicker1').datetimepicker({
                 inline: true,
             });
         });
     </script>

     @stack('scripts')

</body>

<!-- Mirrored from welly.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 16:38:41 GMT -->
</html>
