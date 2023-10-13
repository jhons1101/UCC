<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'APP') }}</title>
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/variables.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="padding:12px 0;">
            <div class="container">
                <a class="navbar-brand" href="{{ asset('/') }}" style="font-size: 1.5em">
                    <img src="{{ asset('/img/uccviolet.png')}}" alt="UCC Logo" width="50px">
                    {{ config('app.name', 'APP') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                            &nbsp;
                        @else
                            <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @if (session('message'))
                    @if (session('status') != null)
                        <div class="alert @if (session('status') == 1) alert-success @else alert-warning @endif" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
                @endif

                @if (isset($errores) && $errores != "")
                    <div class="alert alert-danger" role="alert">
                        {{ $errores }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
        <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://cdn.tiny.cloud/1/bq4509ysvpb8qdq1y36nrznx87qo55846xqjjnnpobjgz7ww/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
            selector: 'textarea#contentBlog',
            skin: 'snow',
            icons: 'thin',
            plugins: 'quickbars image lists code table codesample',
            toolbar: 'blocks | forecolor backcolor | bold italic underline strikethrough | link image blockquote codesample | align bullist numlist | code ',
            height: 600,
            content_style: 'body { margin: 2rem 10%; }'
            });
        </script>
        <<script>
            setTimeout(function(){
                if (typeof document.getElementsByClassName("tox-notifications-container") !== 'undefined') {
                    document.getElementsByClassName("tox-notifications-container")[0].style.display='none';
                }
            }, 1000);
        </script>
    </div>
</body>
</html>
