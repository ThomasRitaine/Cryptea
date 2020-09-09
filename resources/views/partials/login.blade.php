<div id="loginModal" class="modal"  tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Connexion</h2>
        <div class="account__customer--login account__page account__page--small">

        <form class="form form-login" method="POST" action="{{ route('login') }}" id="login-form">

            <input type="hidden" name="action" value="userConnectAction" />
            <fieldset>            
                <div class="row"> 
                    <div class="field required email">
                        <label for="email">Email</label>
                        <div class="control">
                            <input  type="text" name="pseudo_email" id="email" required/>
                        </div>
                    </div>            
                </div>

                <div class="row">
                    <div class="field required password">
                        <label for="password">Mot de passe</label>
                        <div class="control">
                        <input type="password" name="password" id="password" required="">
<!--                            <span onclick="Toggle()" toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>-->
                            
                        </div>
                    </div>                
                    <div class="forgotten-password">
                    <a href="http://localhost/Cryptea/app/router/router.php?action=userForgottenPasswordForm">Mot de passe oublié ?</a>
                    </div>
                    
                    <input type="checkbox" id="auto_connect" name="auto_connect" checked="checked">
                    <label for="auto_connect" id="auto_connect_label">Connexion automatique</label>
                    
                </div>


                <div class="actions-toolbar">
                    <div class="primary">
                        <div class="field action login primary">
                            <label for="send2">

                            </label>
                            <div class="control">
                                <input  type="submit" value="Connexion" name="send" autocomplete="" placeholder="" class="cta"/>
                            </div>
                        </div>                
                    </div>
                </div>

            </fieldset>
        </form>
        
        <div class="new-account actions-toolbar">
            <a  href="pages/creation_compte.html" 
                title="Créer mon compte" 
                class="action remind link color-original font-bold">
                Créer mon compte
            </a>
        </div>
    
    </div>
    </div>
</div>

@section('scripts')
@parent

@if($errors->has('email') || $errors->has('password'))
    <script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
    </script>
@endif
@endsection