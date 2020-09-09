<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Info onglet -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/Logocle.png') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/49da28e01d.js" crossorigin="anonymous"></script>  <!-- Responsive -->
    <script src="{{ asset('js/typewriting.js') }}"></script>
    <script src="{{ asset('js/cryptage.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
</head>
<body>
    <div id="app">
        <div id="menu">
        
            <ul id="nav">
                <a href="indextea.html"><img src="{{ asset('images/Logoaccueil.png') }}" alt="Logo_accueil"></a>
                
                @guest
                    
                <li><a class="rubrique" id="lock" style="cursor: pointer" data-toggle="modal" data-target="#loginModal"><i class="fas fa-lock"></i></a></li>

                @include('partials.login')
            
            <script src="{{ asset('js/pop_up.js') }}"></script>

                @else

                <li><a class="rubrique" id="unlock" href="#"><i class="fas fa-lock-open"></i></a></li>

                <ul>
                    <li><a href="pages/crypthill.html">Se déconnecter</a></li>
                    <li><a href="pages/cryptdeca.html">Profil</a></li>
                </ul>

                @endguest

                
                
                
               

                
                <li><a class="rubrique" href="pages/contact.html">Contact</a></li>

                <li><a class="rubrique" href="#">Cryptea-lab</a>
                     <ul>
                         <li><a href="pages/crypthill.html">Cryptage de Hill</a></li>
                         <li><a href="pages/cryptclef.html">Cryptage avec clef</a></li>
                         <li><a href="pages/cryptaffine.html">Cryptage affine</a></li>
                         <li><a href="pages/cryptdeca.html">Cryptage par décalage</a></li>
                     </ul>
                </li>

                <li><a class="rubrique" href="#">Présentation</a>
                     <ul>
                         <li><a href="pages/presentation.html#securite">Niveaux de sécurité</a></li>
                         <li><a href="pages/presentation.html">Fonctionnement</a></li>
                    </ul>
                </li>
            </ul>

        </div>

        <main class="py-4 container">
            @if (session()->has('message'))
              <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
              </div>
            @endif
            @yield('content')

        </main>

        <footer>
            <p><span id="titre">Cryptea</span> © Copyright 2020</p>
        </footer>

    </div>

    @yield('scripts')

</body>
</html>
