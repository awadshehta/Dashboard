<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/admin/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.png')}}" />
  </head>
  <body>
    
    @yield('content')style.css

  <script src="{{URL::asset('assets/vendors/js/admin/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{URL::asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{URL::asset('assets/js/admin/off-canvas.js')}}"></script>
    <script src="{{URL::asset('assets/js/admin/hoverable-collapse.js')}}"></script>
    <script src="{{URL::asset('assets/js/admin/misc.js')}}"></script>
    <script src="{{URL::asset('assets/js/admin/settings.js')}}"></script>
    <script src="{{URL::asset('assets/js/admin/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{URL::asset('assets/js/admin/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>