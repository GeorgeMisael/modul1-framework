<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('skydash-free/dist') }}/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('skydash-free/dist') }}/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('skydash-free/dist') }}/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('skydash-free/dist') }}/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('skydash-free/dist') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="{{ asset('skydash-free/dist') }}/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('skydash-free/dist') }}/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('skydash-free/dist') }}/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('skydash-free/dist') }}/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('skydash-free/dist') }}/assets/images/favicon.png" />
  </head>
  <body>
<div class="container-scroller">
  @include('layouts.navbar')

  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main - Content -->
    <div class="main-panel">
      <div class="content-wrapper">
        @yield('page-content')
      </div>
      <!-- content-wrapper ends -->

      <!-- Footer -->
      @include('layouts.footer')

      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
<!-- page-body-wrapper ends -->
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('skydash-free/dist') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('skydash-free/dist') }}/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="{{ asset('skydash-free/dist') }}/assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="{{ asset('skydash-free/dist') }}/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('skydash-free/dist') }}/assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('skydash-free/dist') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('skydash-free/dist') }}/assets/js/template.js"></script>
    <script src="{{ asset('skydash-free/dist') }}/assets/js/settings.js"></script>
    <script src="{{ asset('skydash-free/dist') }}/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('skydash-free/dist') }}/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="{{ asset('skydash-free/dist') }}/assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>