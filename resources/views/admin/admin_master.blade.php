{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="{{asset('template/vendors/feather/feather.css')}} ">
  <link rel="stylesheet" href="{{asset('template/vendors/mdi/css/materialdesignicons.min.css')}} ">
  <link rel="stylesheet" href="{{asset('template/vendors/ti-icons/css/themify-icons.css')}} ">
  <link rel="stylesheet" href="{{asset('template/vendors/typicons/typicons.css')}} ">
  <link rel="stylesheet" href="{{asset('template/vendors/simple-line-icons/css/simple-line-icons.css')}} ">
  <link rel="stylesheet" href="{{asset('template/vendors/css/vendor.bundle.base.css')}} ">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}} ">
  <link rel="stylesheet" href="{{asset('template/js/select.dataTables.min.css')}} ">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('template/css/vertical-layout-light/style.css')}} ">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}} " />
</head>
<body>
<div class="wrapper">
    @yield('admin')
</div>
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }} "></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('template/vendors/chart.js/Chart.min.js') }} "></script>
    <script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }} "></script>
    <script src="{{ asset('template/vendors/progressbar.js/progressbar.min.js') }} "></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/js/off-canvas.js') }} "></script>
    <script src="{{ asset('template/js/hoverable-collapse.js') }} "></script>
    <script src="{{ asset('template/js/template.js') }} "></script>
    <script src="{{ asset('template/js/settings.js') }} "></script>
    <script src="{{ asset('template/js/todolist.js') }} "></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('template/js/jquery.cookie.js') }} " type="text/javascript"></script>
    <script src="{{ asset('template/js/dashboard.js') }} "></script>
    <script src="{{ asset('template/js/Chart.roundedBarCharts.js') }} "></script>
    <!-- End custom js for this page-->
  </body>

  </html>

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div class="wrapper">
        @yield('admin')

  <!-- ======= Header ======= -->

  <!-- Vendor JS Files -->
  <script src="{{asset('template/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('template/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('template/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template/assets/js/main.js')}}"></script>
</div>

</body>

</html>
--}}
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.tailgrids.com/templates/taildash/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 14:15:20 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Analytics Dashboard | Taildash - Tailwind CSS Admin Dashboard Template</title>
  <link rel="icon" href="favicon.ico"><link href="{{asset('part/style.css')}}" rel="stylesheet"></head>
  <body
    x-data="{ page: 'analytics', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b yn mj': darkMode === true}"
  >
  <div class="wrapper">
    @yield('admin')
    @yield('setting')

   </div>



  <script defer src="{{asset('part/bundle.js')}}"></script></body>

  </html>
