@extends('layouts.app')

@section('content')
<div class="container">
    
    <section class="section_cryptage">
            
        <h2 class="typerwriting_title">
          <a href="#" class="typewrite" data-period="2000" data-type='[ "Xaahkp.", "Chiffrement affine." ]'>
            <span class="wrap"></span>
          </a>
        </h2>

        
        <p>Saisissez un texte à crypter ou à décrypter, entrez les 2 valeurs de la fonction affine, puis appuyez sur valider.<br />Le texte décrypté ou décrypté apparaîtra alors !</p>
            
           
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
                            <textarea id="textInput" class="texte-input" type="text" name="texte-input-chiffrement-affine" placeholder="Saisissez ici votre message à crypter ou à décrypter." rows="8%" cols="37%"></textarea>
                        </form>
                         <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="btn-group btn-group-affine-a">
                                        <button id="btnGenerateKey-a" type="button" class="btn btn-default avant-input-btn-group avant-input-btn-group-affine" data-placement="top" data-toggle="tooltip" title="Génère un décalage aléatoire"><i class="fas fa-random"></i></button>
                                        <input id="input-affine-a" class="input-btn-group" type="text" name="input-affine-a" placeholder="Valeur de a">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="btn-group btn-group-affine-b">
                                        <button id="btnGenerateKey-b" type="button" class="btn btn-default avant-input-btn-group avant-input-btn-group-affine" data-placement="top" data-toggle="tooltip" title="Génère un décalage aléatoire"><i class="fas fa-random"></i></button>
                                        <input id="input-affine-b" class="input-btn-group" type="text" name="input-affine-b" placeholder="Valeur de b">
                                    </div>
                                </div>
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
                                <textarea id="textOutput" class="texte-output" type="text" name="textOutput-affine" placeholder="Saisissez un texte à crypter ou à décrypter, entrez une valeur de a et de b, puis appuyez sur valider et le texte crypté ou décrypté apparaîtra ici." rows="4%" cols="72%"></textarea>
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
    <script src="{{ asset('js/chiffrement/affine.js') }}"></script>
    <script src="{{ asset('js/chiffrement/copy.js') }}"></script>

</div>
@endsection
