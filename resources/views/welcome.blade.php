@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="parallax">
        <img src="{{ asset('images/Logocryptea3.png') }}" alt="logo_cryptea">
    </div>
    
    <section id="bienvenue">
        <div>
            <h2>Bienvenue</h2>
            <p>Un monde où vos messages ne sont lisibles que de vous-même et de vos destinataires</p>
        
        </div>
    
    </section>
    
    <section class="color" id="utilite">
        
        <h2>Utilité</h2>

        <p>Le cryptage de données permet de garder des informations confidentielles. Par exemple, au collège, la fois où vous avez voulu faire passer un message sur un bout de papier à quelqu'un loin de vous. Mais malheureusement, tout le monde l'a lu, connaissant ainsi le petit rendez-vous que vous aviez fixé à votre camarade. À ce moment là, l'informormation ne demeurait plus vraiment confidentielle. Vous vous en souvenez ? Non ? Ah...
        Bref, si vous aviez crypté le message, on n'en serait pas là ! Et c'est là qu'on intervient !
        Un message important à transmettre ? Envie de parler avec quelqu'un en utilisant un language dont seul vous avez la clef ? Voici le site qui vous le permet !</p>

        <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
        <div class="box-wrap">
          <div class="box_accueil">
            <i class="fas fa-pencil-alt"></i>
            <p>Écrire</p>
          </div>
          <div class="box_accueil">
            <i id="eye" class="fas fa-eye-slash"></i>
            <p>Crypter</p>
          </div>
          <div class="box_accueil">
            <i class="far fa-paper-plane"></i>
            <p>Envoyer</p>
          </div>
        </div>

    </section>
    
    <section id="remerciements">
        
        <h2>Remerciements</h2>
        
        <div class="carousel-wrapper">
          <span id="item-1"></span>
          <span id="item-2"></span>
          <span id="item-3"></span>
          <div class="carousel-item item-1">
            <h3>À John Codeur</h3>
            <p>Qui m'a tout appris</p>
            <a class="arrow arrow-prev" href="#item-3"></a>
            <a class="arrow arrow-next" href="#item-2"></a>
          </div>

          <div class="carousel-item item-2">
            <h3>Item 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan pretium dolor vel convallis. Aliquam erat volutpat.</p>
            <a class="arrow arrow-prev" href="#item-1"></a>
            <a class="arrow arrow-next" href="#item-3"></a>
          </div>

          <div class="carousel-item item-3">
            <h3>Item 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan pretium dolor vel convallis. Aliquam erat volutpat.</p>
            <a class="arrow arrow-prev" href="#item-2"></a>
            <a class="arrow arrow-next" href="#item-1"></a>
          </div>
        </div>
    </section>

</div>
@endsection
