@extends('layouts.app')

@section('content')
<div class="container">
    
    <section class="section_cryptage">
            
        <h2 class="typerwriting_title">
          <a href="#" class="typewrite" data-period="2000" data-type='[ "sUta mj tbLXXm.", "Chiffrement avec clef." ]'>
            <span class="wrap"></span>
          </a>
        </h2>

        <script  src="../script/typewriting.js"></script>
        
        <p>Saisissez un texte à crypter ou à décrypter, entrez la clef, puis appuyez sur valider.<br />Le texte décrypté ou décrypté apparaîtra alors !</p>
            
           
        <div class="container_cryptage">
            
            <div class="crypt-block">
                
                <form>
                     <div class="little_box_control_center one_box_one">
                        <input id="action-crypter-cryptage-clef" type="radio" value="crypter" name="action-cryptage-clef" checked><span class="radio-text"> Crypter mon message.</span>
                        <br><br>
                        <input id="action-decrypter-cryptage-clef" type="radio" value="decrypter" name="action-cryptage-clef"><span class="radio-text"> Décrypter le message.</span>
                    </div>
                

                    <div class="little_box_control_center one_box_two">
                        <label class="switch">
                            <input id="random-accent-majuscule-cryptage-clef" type="checkbox" value="none-random-accent-majuscule-cryptage-clef" name="random-accent-majuscule-cryptage-clef"><span class="slider round"></span>
                        </label><span class="radio-text"> Je ne souhaite pas mettre de majuscules et d'accents aléatoires dans mon message crypté.</span>
                        <div class="clear"></div>
                    </div>
                </form>
                
                    <div class="col-md-3">
                        <form>
                            <div class="btn-group btn-group-double">
                                <button id="avant-input-btn-group-clef" type="button" class="btn btn-default avant-input-btn-group-double" data-placement="top" data-toggle="tooltip" title="Génère une clef aléatoire"><span class="glyphicon glyphicon-random"></span></button>
                                <textarea id="input-clef" class="input-btn-group" type="text" name="input-clef" placeholder="Contenu de la clef"></textarea>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-md-2">
                        <button id="button-valider-cryptage-clef" type="button" class="btn btn-default button-valider"><span class="glyphicon glyphicon-ok"></span>Valider</button>
                    </div>
                </div>
                <div class="result">
                    <span class="glyphicon glyphicon-arrow-down"></span>
                    <div>
                        <form>
                            <div class="col-xs-12">
                                <textarea id="texte-output-chiffrement-clef" class="texte-output" type="text" name="texte-output-chiffrement-clef" placeholder="Saisissez un texte à crypter ou à décrypter, entrez le contenu de la clef, puis appuyez sur valider et le texte crypté ou décrypté apparaîtra ici."></textarea>
                            </div>
                            <div class="col-xs-12">
                                <button id="copy-texte-output-chiffrement-clef" class="btn btn-default" data-clipboard-target="#texte-output-chiffrement-clef">
                                    Copier dans le<br>presse papier
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
    
    </section>

</div>
@endsection
