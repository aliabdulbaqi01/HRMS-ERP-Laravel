<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('adminAssets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminAssets')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('adminAssets')}}/fonts/SansPro/SansPro.min.css">
  <link rel="stylesheet" href="{{asset('adminAssets')}}/css/bootstrap_rtl-v4.2.1/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('adminAssets')}}/css/bootstrap_rtl-v4.2.1/custom_rtl.css">
  <link rel="stylesheet" href="{{asset('adminAssets')}}/css/mycustomstyle.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('admin.includes.navbar')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.includes.sidebar')


  <!-- Content Wrapper. Contains page content -->
    @include('admin.includes.content')

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    @include('admin.includes.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminAssets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminAssets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminAssets')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
