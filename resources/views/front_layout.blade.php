
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Travelomoon</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src=" {{ asset('front-assets/js/jquery-3.3.1.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front-assets/css/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('front-assets/css/owl-carousel/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('front-assets/css/style.css') }}">
<link rel="preconnect" href="https://fonts.gstatic.com">

{{--slick--}}
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

{{-- Themelayout css --}}
    <link href="{{ asset('libs/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/frontend/css/app.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/daterange/daterangepicker.css") }}" >
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600' type='text/css' media='all' />
    <link href="{{ route('core.style.customCss') }}" rel="stylesheet">
    <link href="{{ asset('libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">
{{-- end --}}
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
<script src="{{ asset('front-assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front-assets/js/popper.min.js') }}"></script>
<script src="{{ asset('front-assets/js/custom.js') }}"></script>
<script src="{{ asset('front-assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front-assets/js/slick.min.js') }}"></script>
<script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{-- Scripts --}}
<script src="{{ asset('libs/lodash.min.js') }}"></script>
{{-- <script src="{{ asset('libs/jquery-3.3.1.min.js') }}"></script> --}}
<script src="{{ asset('libs/vue/vue.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/bootbox/bootbox.min.js') }}"></script>
{{-- end script --}}
</head>
<body>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <header id="header" class="main-header">
       {{-- <script>
            $("header").load("/header.html");
       </script> --}}
       @include('front_header');
    </header>
    <main>
        @yield('content')
    </main>
    <div class="bravo_wrap">
        @include('Layout::parts.footer')
    </div>
    {{-- <section class="footer">
        <div class="container">
          <div class="footer__content">
            <div class="footer__heading">
              <h2>Bhairab</h2>
            </div>
            <p class="mb-0">Content & Graphics © 2020 bhairab.iitd@gmail.com LLC</p>

            <ul class="social__media">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
    </section> --}}

@stack('script-front')
<script>
    $('.tour-packages').owlCarousel({
    center: true,
    items:2,
    loop:false,
    nav:true,
    dots:false,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});

$('.luxury-deals').owlCarousel({
    center: false,
    items:2,
    loop:false,
    nav:true,
    dots:false,
    margin:10,
    responsive:{
        600:{
            items:3
        }
    }
});

$('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script>
</body>
</html>

