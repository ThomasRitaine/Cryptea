<div id="loginModal" class="modal"  tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Connexion</h2>
        <div class="account__customer--login account__page account__page--small">

        <form class="form form-login" method="POST" action="{{ route('login') }}" id="login-form">
            @csrf

            <fieldset>            
                <div class="row"> 
                    <div class="field required email">
                        <label for="email">Email</label>
                        <div class="control">
                            <input  class="@error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}" required/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>            
                </div>

                <div class="row">
                    <div class="field required password">
                        <label for="password">Mot de passe</label>
                        <div class="control">
                            <input type="password" name="password" id="password" required class="@error('password') is-invalid @enderror">
<!--                            <span onclick="Toggle()" toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>-->
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>                
                    <div class="forgotten-password">
                    <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                    </div>
                    
                    <input type="checkbox" id="auto_connect" name="remember" {{ old('remember') ? 'checked' : '' }}>
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
            <a href="{{ route('register') }}" class="action remind link color-original font-bold">
                Créer mon compte
            </a>
        </div>
    
    </div>
    </div>
</div>

<!-- Scripts Pop_up-->
<script src="{{ asset('js/pop_up.js') }}"></script>

@section('scripts')
@parent


@endsection