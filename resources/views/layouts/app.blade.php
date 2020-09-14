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

    <!-- Scripts Pop_up-->
    @if($errors->has('email') || $errors->has('password') || isset($openPopUp) )
    <script src="{{ asset('js/pop_up_happen.js') }}"></script>
    @endif

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Pour faire fonctionner les effets sur les pourcentages sur la page fonctionnement -->
    @if(Route::current()->getName() == 'fonctionnement')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'><link rel="stylesheet" href="./style.css">
    @endif
    
 
</head>
<body @if($errors->has('email') || $errors->has('password') || isset($openPopUp) ) onload="pop_up_happen()" @endif > {{-- Si il y a une erreur avec la connexion ou si accès par cryptea/login, ouvre le formulaire de connexion --}}
    <div id="app">
        <div id="menu">
        
            <ul id="nav">

                <!-- Affichage du logo sans lien sur la page d'accueil, et logo + nom avec lien sur les autres pages -->
                @if(Route::current()->getName() == 'welcome' || Route::current()->getName() == 'login')
                    <a href=""><img src="{{ asset('images/Logoaccueil.png') }}" alt="Logo_accueil"></a>
                @else
                    <a href="{{ route('welcome') }}"><img id="logopages" src="{{ asset('images/Logopages.png') }}" alt="Logo_accueil"></a>
                @endif

                
                @guest
                    
                <li><a class="rubrique" id="lock" style="cursor: pointer" data-toggle="modal" data-target="#loginModal"><i class="fas fa-lock"></i></a></li>

                @include('partials.loginModal')
            
            

                @else

                <li><a class="rubrique" id="unlock" href="#"><i class="fas fa-lock-open"></i></a>
                    <ul>
                        <li><a href="{{ route('logout') }}" onclick="   event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                            Se déconnecter
                        </a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <li><a href="{{ route('profil') }}">Mon profil</a></li>
                    </ul>
                </li>

                

                @endguest

                
                
                
               

                
                <li><a class="rubrique" href="{{ route('contact') }}">Contact</a></li>

                <li><a class="rubrique" href="#">Cryptea-lab</a>
                     <ul>
                         <li><a href="{{ route('hill') }}">Cryptage de Hill</a></li>
                         <li><a href="{{ route('clef') }}">Cryptage avec clef</a></li>
                         <li><a href="{{ route('affine') }}">Cryptage affine</a></li>
                         <li><a href="{{ route('decalage') }}">Cryptage par décalage</a></li>
                     </ul>
                </li>

                <li><a class="rubrique" href="#">Présentation</a>
                     <ul>
                         <li><a href="{{ route('securite') }}">Niveaux de sécurité</a></li>
                         <li><a href="{{ route('fonctionnement') }}">Fonctionnement</a></li>
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
