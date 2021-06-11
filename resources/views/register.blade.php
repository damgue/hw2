<html>
    <head>
        <title>Registrati</title>
        <link rel='stylesheet' href='{{url("css/signup_.css")}}'>
        <script src='{{url("js/signup.js")}}' defer></script>
        <meta name = "csrf-token" content = "{{ csrf_token() }}"/> 
    </head>
    <body>
        <header>
            <main id='blocco'>
                <form name='form' method='post' action="{{ route('register') }}">
                @csrf
                    <p><label>Nome <input type='text' name='nome' value="{{ old('nome') }}"></label></p>
                    <p><label>Cognome <input type='text' name='cognome' value="{{ old('cognome') }}"></label></p>
                    <p><label>Età <input type='text' name='eta' value="{{ old('eta') }}"></label></p>
                    <p><label>Username <input id='username' type='text' name='username' value="{{ old('eta') }}"></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <p><label>&nbsp;<input type='submit'></label></p>
                    <label>&nbsp;<p id="indirizzamento">Se hai già un account, <a href="{{ url('login') }}">clicca qui</a></p></label>
                </form>
                <div id='avviso' class='hidden'>Compilare tutti i campi.</div>
                <div id="errore">
                            @if ( isset( $errore_password) )
                                <span>La password deve essere di almeno</span><br>
                                <span>6 caratteri. Riprovare.</span><br>
                            @endif

                            @if (isset( $errore_username)) 
                                <span>Username non disponibile</span><br>
                            @endif
                    </div>
            </main>        
            
        </header>
    </body>
</html>