<!doctype html>
<html lang="en">
  <head>
    <title>Scenic &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/line-icons/style.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}"> 
    
    <link rel="stylesheet" href= "https://use.fontawesome.com/releases/v5.11.2/css/all.css" > 

    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
  </head>
  <body>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    @include('frontend.layouts.navbar')

        @yield('content')

    @include('frontend.layouts.footer')
  
  </div>

    <!-- SCRIPTS -->
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/stickyfill.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.easing.1.3.js')}}"></script>
    
    <script src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.animateNumber.min.js')}}"></script>
    
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    @stack('scripts')
  </body>
</html>