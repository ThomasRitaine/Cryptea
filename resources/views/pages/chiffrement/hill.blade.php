@extends('layouts.app')

@section('content')
<div class="container">
    
    <section id="hill" class="section_cryptage">
            
        <h2 class="typerwriting_title">
          <a href="#" class="typewrite" data-period="2000" data-type='[ "Xaahkp.", "Chiffrement de Hill." ]'>
            <span class="wrap"></span>
          </a>
        </h2>
        
        <p>Saisissez un texte à crypter ou à décrypter, entrez différentes valeurs dans la matrice de dimension 2 pour qu'elle soit inversible, puis appuyez sur valider.<br />Le texte décrypté ou décrypté apparaîtra alors !</p>
            
           
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
                        <div class="col-md-4">
                            <form>
                                <textarea id="textInput" class="texte-input" type="text" name="texte-input-chiffrement-hill" placeholder="Saisissez ici votre message à crypter ou à décrypter."></textarea>
                            </form>
                        </div>

                        <div class="col-md-4">
                            <form>
                                <div id="group-hill-input" class="btn-group" role="group">
                                    <button id="btnGenerateKey" type="button" class="btn btn-default avant-input-btn-group-double" data-placement="top" data-toggle="tooltip" title="Génère une valeur de la matrice aléatoire"><i class="fas fa-random"></i></button>
                                    <div id="first-group-hill" class="btn-group-vertical" role="group">
                                        <input id="input-hill-a" class="btn input-btn-group" type="text" name="input-hill-a" placeholder="a">
                                        <input id="input-hill-c" class="btn input-btn-group" type="text" name="input-hill-c" placeholder="c">
                                    </div>
                                    <div id="seconde-group-hill" class="btn-group-vertical seconde-group-hill" role="group">
                                        <input id="input-hill-b" class="btn input-btn-group" type="text" name="input-hill-b" placeholder="b">
                                        <input id="input-hill-d" class="btn input-btn-group" type="text" name="input-hill-d" placeholder="d">
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="clear"></div>
                        
                    </div>
                    
                    <div class="little_box_control_center one_box_four">
                        <div class="col-md-2">
                            <button id="btnStartEncryption" type="button" class="btn btn-default button-valider"><span class="glyphicon glyphicon-ok"></span>Valider</button>
                        </div>
                    </div>
                </div>
                
                <div class="little_box_control_center one_box_five">

                    <div>
                        <form>
                            <div class="col-xs-12">
                                <textarea id="textOutput" class="texte-output" type="text" name="textOutput-hill" placeholder="Saisissez un texte à crypter ou à décrypter, puis appuyez sur valider et le texte crypté ou décrypté apparaîtra ici."></textarea>
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
    <script src="{{ asset('js/chiffrement/hill.js') }}"></script>
    <script src="{{ asset('js/chiffrement/copy.js') }}"></script>

</div>
@endsection
