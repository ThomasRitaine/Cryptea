@extends('layouts.app')

@section('content')
<div class="container">
    
    <section class="section_cryptage">
            
        <h2 class="typerwriting_title">
          <a href="#" class="typewrite" data-period="2000" data-type='[ "Ghfdodjh.", "Chiffrement par décalage." ]'>
            <span class="wrap"></span>
          </a>
        </h2>
        
        <p>Saisissez un texte à crypter ou à décrypter, entrez la valeur du décalage, puis appuyez sur valider.<br />Le texte décrypté ou décrypté apparaîtra alors !</p>
    
        <div class="container_cryptage">
            
            <div class="crypt-block">
                
               <form>
                     <div class="little_box_control_center one_box_one">
                        <input id="action-crypter-cryptage-decalage" type="radio" value="crypter" name="action-cryptage-decalage" checked><span class="radio-text"> Crypter mon message.</span>
                        <br><br>
                        <input id="action-decrypter-cryptage-decalage" type="radio" value="decrypter" name="action-cryptage-decalage"><span class="radio-text"> Décrypter le message.</span>
                    </div>
                

                    <div class="little_box_control_center one_box_two">
                        <label class="switch">
                            <input id="random-accent-majuscule-cryptage-decalage" type="checkbox" value="none-random-accent-majuscule-cryptage-decalage" name="random-accent-majuscule-cryptage-decalage"><span class="slider round"></span>
                        </label><span class="radio-text"> Je ne souhaite pas mettre de majuscules et d'accents aléatoires dans mon message crypté.</span>
                        <div class="clear"></div>
                    </div>
                </form>
                
                <div>
                    <div class="little_box_control_center one_box_three">
                        <form>
                            <textarea id="texte-input-chiffrement-decalage" class="texte-input" type="text" name="texte-input-chiffrement-decalage" rows="5%" cols="72%" placeholder="Saisissez ici votre message à crypter ou à décrypter." required></textarea>
                        </form>

                        <form id="formulaire_bouton">
                            <div class="btn-group">
                                <button id="avant-input-btn-group-decalage" type="button" class="btn btn-default avant-input-btn-group" data-placement="top" data-toggle="tooltip" title="Génère un décalage aléatoire"><i class="fas fa-random"></i></button>
                                <input id="input-decalage" class="input-btn-group" type="text" name="input-decalage" placeholder="Valeur du décalage" required>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>

                    <div class="little_box_control_center one_box_four">
                        <form>
                            <button id="button-valider-cryptage-decalage" type="button" class="btn btn-default button-valider"><span class="glyphicon glyphicon-ok"></span>Valider</button>
                        </form>
                    </div>
                </div>
                
                <div class="little_box_control_center one_box_five">

                    <div>
                        <form>
                            <div class="col-xs-12">
                                <textarea id="textOutput" class="texte-output" type="text" name="textOutput-decalage" rows="4%" cols="72%" placeholder="Le texte crypté ou décrypté apparaîtra ici."></textarea>
                            </div>
                            <div class="col-xs-12">

                                @include('partials.btnCopy')
    
                            </div>
                        </form>
                    </div> 
                </div>
                
                <div class="clear"></div>
                
            </div>
            
        </div>
        
    </section>

    <!-- Script to make it work -->
    <script src="{{ asset('js/chiffrement/decalage.js') }}"></script>
    <script src="{{ asset('js/chiffrement/copy.js') }}"></script>

</div>
@endsection
