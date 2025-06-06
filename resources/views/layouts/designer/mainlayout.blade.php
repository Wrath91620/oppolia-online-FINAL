<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Dashboard/assets/img/logo.png')}}" rel="icon">
  <link href="{{asset('Dashboard/assets/img/logo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Dashboard/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Dashboard/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('Dashboard/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('Dashboard/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('Dashboard/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Dashboard/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    @yield('css')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('designer.includes.header')
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">


      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <img class="dashboard-icon" src="{{asset ('Dashboard\assets\images\House.png') }}">
              <span class="dashboard-title">لوحة التحكم</span>
          </li><!-- End Dashboard Nav -->



          <li class="nav-item">
              <a class="nav-link collapsed" href="{{route('designer.approved.orders')}}" >
                  <img class="dashboard-icon" src="{{asset ('Dashboard\assets\images\Bill.png') }}">
                  <span class="dashboard-title">الطلبات</span>
              </a>

          </li><!-- End Forms Nav -->




      </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main" dir="rtl">



      @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">

    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('Dashboard/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('Dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Dashboard/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('Dashboard/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('Dashboard/assets/vendor/quill/quill.js')}}"></script>


  <!-- Template Main JS File -->
    <script src="{{asset('Dashboard/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('Dashboard/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('Dashboard/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('Dashboard/assets/js/main.js')}}"></script>

  @yield('script')
</body>

</html>
