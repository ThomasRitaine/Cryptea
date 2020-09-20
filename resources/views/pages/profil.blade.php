@extends('layouts.app')

@section('content')

<div class="container">
    
    <section id="profil">
        
        <div id="profil_degrade">
            <img class="photo_profil" src="{{ asset('images/photo_profil.png') }}" alt="photo_profil">
            <h3 id="nom_profil">Carlouchat</h3>
        </div>
        
        <div class="informations">
            
            <div class="wrapper">

                <div class="clip-text clip-text_one">Informations</div>

            </div>
            
            <div class="container_2">
              <h1>Who are you ?  <br/><span>Tell us !</span><small>When you discovered this website, you <span>wouldn't expect it.</span></small></h1>

              <div class="box cloy">
                <h4>Film ou série préféré</h4>
                <p>Le Royaume des chats</p>
              </div>
              <div class="box dark inheritors">
                <h4 class="break">Animal</h4>
                <p>Chat // Félin</p>
              </div>
              <div class="box dark foodwars">
                <h4>Nourri<br>ture</h4>
                <p>Sushis et Makis</p>
              </div>
              <div class="box dark theking">
                <h4>Localis<br>ation</h4>
                <p>Reims // Grand-Est</p>
              </div>
              <div class="box mindhunter shadow">
                <h4 class="break">Objet<br> porte bonheur</h4>
                <p>Maneki Neko</p>
              </div>
              <div class="box kakegurui shadow">
                <h4 class="break">Livre</h4>
                <p>Chi : une vie de chat</p>
              </div>

            </div>
        
        </div>
    
    
    </section>
    

</div>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

 <script>
     $(window).on("load resize", function (e) {
	if ($(window).width() > 700) {
		$(".box").each(function (index) {
			$(this).outerHeight($(this).outerWidth());
		});
	} else {
		$(".box").each(function (index) {
			$(this).outerHeight('auto')
		});
	}
});
</script>

@endsection
