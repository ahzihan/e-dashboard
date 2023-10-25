
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('page-title') </title>
    <meta name="description" content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords" content="analytics dashboard,jobs dashboard,crm dashboard examples,personal dashboard,sales dashboard sample,best crm dashboard,crypto dashboard template,sales analytics dashboard,stocks dashboard,hrm dashboard,ecommerce admin panel template,sales admin dashboard,admin panel for ecommerce website,website template ecommerce,template dashboard,course dashboard,template ecommerce website">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/brand-logos/favicon.ico')}}">
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{asset('assets/libs/simplebar/simplebar.min.css')}}">

    @vite('resources/css/app.css')

</head>

<body>

  <div class="page">

    @yield('side-bar')

    @yield('header')

    <div class="content">

      @yield('content')

    </div>

    @yield('footer')

  </div>


  <!-- Index JS -->
  <script src="{{asset('assets/js/index.js')}}"></script>
  <!-- Back To Top -->
  <div class="scrollToTop">
      <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
  </div>

  <div id="responsive-overlay"></div>

  <!-- popperjs -->
  <script src="{{asset('assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>
  <!-- Toster -->
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- sidebar JS -->
  <script src="{{asset('assets/js/defaultmenu.js')}}"></script>
  <!-- sticky JS -->
  <script src="{{asset('assets/js/sticky.js')}}"></script>
  <!-- Switch JS -->
  <script src="{{asset('assets/js/switch.js')}}"></script>
  <!-- Preline JS -->
  <script src="{{asset('assets/libs/preline/preline.js')}}"></script>
  <!-- Simplebar JS -->
  <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
  <!-- Custom JS -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <!-- Custom-Switcher JS -->
  <script src="{{asset('assets/js/custom-switcher.js')}}"></script>
    @stack('scripts')
</body>

</html>
