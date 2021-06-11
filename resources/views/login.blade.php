<html>
    <head>
        <title>Login</title>
        <link rel='stylesheet' href='{{url("css/login.css")}}'>
        <script src='{{url("js/login.js")}}' defer></script>
    </head>
    <body>
        <header>
            <main id='blocco'>
            @if ( isset( $old_username) )
            <div  class="errore">Credenziali non valide</div>
            @endif
                <form name='form' method='post' action="{{ route('login') }}">
                @csrf
                    <input type='hidden' name='_token' value='{{ $csrf_token }}'>
                    <p><label>Username <input type='text' name='username' value='{{ $old_username }}' placeholder='Enter username'></label></p>
                    <p><label>Password <input type='password' name='password' placeholder='Enter password'></label></p>
                    <p><label>&nbsp;<input type='submit'></label></p>
                    <label>&nbsp;<p id="indirizzamento">Se non sei registrato, <a href="{{ route('register') }}">clicca qui</a></p></label>
                </form>
                <div id='avviso' class='hidden'>Compilare tutti i campi.</div>
            </main>        
        </header>
    </body>
</html>