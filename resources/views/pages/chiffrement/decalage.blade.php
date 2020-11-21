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
                        <input id="action-chiffrer" type="radio" value="chiffrer" name="action-chiffrement" checked><span class="radio-text"> Chiffrer mon message.</span>
                        <br><br>
                        <input type="radio" value="déchiffrer" name="action-chiffrement"><span class="radio-text"> Déchiffrer mon message.</span>
                    </div>
                

                    <div class="little_box_control_center one_box_two">
                        <label class="switch">
                            <input id="random-accent-majuscule" type="checkbox" value="none-random-accent-majuscule" name="random-accent-majuscule"><span class="slider round"></span>
                        </label><span class="radio-text"> Je ne souhaite pas mettre de majuscules et d'accents aléatoires dans mon message chiffré.</span>
                        <div class="clear"></div>
                    </div>
                </form>
                
                <div>
                    <div class="little_box_control_center one_box_three">
                        <form>
                            <textarea id="textInput" class="texte-input" type="text" name="texte-input-chiffrement-decalage" rows="5%" cols="72%" placeholder="Saisissez ici votre message à crypter ou à décrypter." required></textarea>
                        </form>

                        <form id="formulaire_bouton">
                            <div class="btn-group">
                                <button id="btnGenerateKey" type="button" class="btn btn-default avant-input-btn-group" data-placement="top" data-toggle="tooltip" title="Génère un décalage aléatoire"><i class="fas fa-random"></i></button>
                                <input id="input-decalage" class="input-btn-group" type="text" name="input-decalage" placeholder="Valeur du décalage" required>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>

                    <div class="little_box_control_center one_box_four">
                        <form>
                            <button id="btnStartEncryption" type="button" class="btn btn-default button-valider"><span class="glyphicon glyphicon-ok"></span>Valider</button>
                        </form>
                    </div>
                </div>
                
                <div class="little_box_control_center one_box_five">

                    <div>
                        <form>
                            <div class="col-xs-12">
                                <textarea id="textOutput" class="texte-output" type="text" name="textOutput-decalage" placeholder="Le texte crypté ou décrypté apparaîtra ici."></textarea>
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
