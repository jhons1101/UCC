@section('header')
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ asset('/') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <img src="{{ asset('/img/uccviolet.png')}}" alt="UCC Logo">
        <h1>Unión de Ciudadanas de Colombia<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ asset('/#cta') }}">Quienes somos</a></li>
          <li><a class="nav-link scrollto" href="{{ asset('/#nuestraApuesta') }}">Nuestra apuesta</a></li>
          <li><a class="nav-link scrollto" href="{{ asset('/#testimonials') }}">Testimonios</a></li>
          <li><a class="nav-link scrollto" href="{{ asset('/#SocialMedia') }}">Redes sociales</a></li>
          <li><a class="nav-link scrollto" href="{{ asset('blog/') }}">Blog</a></li>
          <li><a class="nav-link scrollto" href="{{ asset('/#contact') }}">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav>
      @guest
        <a class="btn-getstarted scrollto" href="{{ asset('/login') }}">Iniciar sesión</a>
      @else
        <a class="btn-getstarted scrollto" href="{{ asset('/home') }}">Panel de administración</a>
      @endguest
    </div>
  </header>
@endsection
