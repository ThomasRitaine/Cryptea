@extends('layouts.app')

@section('content')
<div class="container">
    
    <section class="section_cryptage">
            
        <h2 class="typerwriting_title">
          <a href="#" class="typewrite" data-period="2000" data-type='[ "sUta mj tbLXXm.", "Chiffrement avec clef." ]'>
            <span class="wrap"></span>
          </a>
        </h2>
        
        <p>Saisissez un texte à crypter ou à décrypter, entrez la clef, puis appuyez sur valider.<br />Le texte décrypté ou décrypté apparaîtra alors !</p>
            
           
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
                
                    <div class="col-md-3">
                        <form>
                            <div class="little_box_control_center one_box_three">
                                <textarea id="textInput" class="texte-input" type="text" name="texte-input-chiffrement-hill" placeholder="Saisissez ici votre message à crypter ou à décrypter."></textarea>
                                <button id="btnGenerateKey" type="button" class="btn btn-default avant-input-btn-group-double" data-placement="top" data-toggle="tooltip" title="Génère une clef aléatoire"><span class="glyphicon glyphicon-random"></span></button>
                                <textarea id="input-clef" class="input-btn-group texte-input" type="text" name="input-clef" placeholder="Contenu de la clef"></textarea>
                            </div>
                        </form>
                    </div>
                    
                    <div class="little_box_control_center one_box_four">
                        <button id="btnStartEncryption" type="button" class="btn btn-default button-valider"><span class="glyphicon glyphicon-ok"></span>Valider</button>
                    </div>
            
            
                    <div class="little_box_control_center one_box_five">
                        <div>
                            <form>
                                <div class="col-xs-12">
                                    <textarea id="textOutput" class="texte-output" type="text" name="textOutput-clef" placeholder="Saisissez un texte à crypter ou à décrypter, entrez le contenu de la clef, puis appuyez sur valider et le texte crypté ou décrypté apparaîtra ici."></textarea>
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

</div>
@endsection
