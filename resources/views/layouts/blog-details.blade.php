<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog {{ $blog->title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('/css/variables.css')}}" rel="stylesheet">
  <link href="{{ asset('/css/main.css')}}" rel="stylesheet">
  
        
  <!-- <meta name="description" content="Sitio web de código web gratuito, preguntas, foros temas, novedades, actualidad tecnológica, que esperas suscríbete!">
  <meta name="keywords" content="el baul del codigo, elbauldelcodigo, jhons1101, www.elBaulDelCodigo.com">
  <meta name="copyright" content="Copyright © 2014 elbauldelcodigo.com">
  <meta name="author" content="jhons1101">
  <meta name="theme-color" content="#ffffff">
  
  <meta property="og:title" content="elbauldelcodigo">
  <meta property="og:site_name" content="elbauldelcodigo">
  <meta property="og:url" content="www.elbauldelcodigo.com">
  <meta property="og:description" content="Sitio web de código gratuito, preguntas, foros temas, novedades, actualidad tecnológica, que esperas suscríbete!">
  <meta property="og:image" content="/img/elbauldelcodigo.com_front_2.png" />
  <meta property="fb:app_id" content="1386964998221435">
  <meta property="og:type" content="website"> -->
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0&appId=676469964402903&autoLogAppEvents=1" nonce="RBscMaUK"></script>
  @yield('header')
  <main id="main">

    <div class="breadcrumbs">
      <div class="container"></div>
    </div>
    
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-8">
            @yield('blogDetails')
          </div>
          @yield('sidebarItems')
        </div>
      </div>
    </section>
  </main>

  @yield('footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('/js/main.js')}}"></script>

</body>

</html>