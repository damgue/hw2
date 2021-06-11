<html>
    <head>
        <title>Prenota una visita con i nostri specialsiti</title>
        <link rel="stylesheet" href='{{url("css/prenota_.css")}}'/> 
        <script src='{{url("js/prenota_scelta_medico.js")}}' defer></script>
        <script src='{{url("js/prenota_scelta_data.js")}}' defer></script>
        <script src='{{url("js/prenota-generale.js")}}' defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
        <input name='_token' type='hidden' value='".csrf_token()."'>
    </head>
    <body>        
        <header>
        <div id="nome">Prenota una<br>visita con uno dei<br>nostri medici</div>
        
        <nav>
            <div id="links">
                <a href='{{url("home")}}'>Home</a>
                <a href='{{url("service")}}'>Servizi</a>
                <a href='{{url("drugstore")}}'>Farmacia</a>
                <a href='{{url("equipe")}}'>Equipe</a> 
                <a href='{{url("profile")}}'>Profilo</a>
                <a href='{{url("logout")}}'>Esci</a>
            </div>
        </nav>
    </header>

    <section class="gestione">
        <form name="MioForm" method='POST' action="{{route('prenota.visita')}}">
        @csrf
            
            <label>Seleziona un medico: <select name="medico" id="medico"></select></label><br>
            <label>Seleziona una data in cui desideri effettuare la visita: </label><input type = "text" size=12 name = "dato">
            <p><label>&nbsp;<input type='submit' id="invia"></label></p>
        </form>

        <span id = "messaggio" class="hidden"></span><br>
        <span><a href='{{url("profile")}}'>Clicca qui</a> per vedere le tue visite prenotate.</span>
            <div id="qui"><a href="javascript:vai()"><img src='{{url("css/immaC.jpg")}}'></a></div>
        
    </section>

        <footer>
            <div id="col">
                <div class="item">
                    <div id="dati">
                        <ul>
                        <li><address>Morgagni - Catania</address></li>
                        <li><address>Cannizzaro - Catania</address></li>
                        <li><address>San Raffaele - Milano</address></li>
                        <li><address>Humanitas - Milano</address></li>
                        <li><address>Valle Giulia - Roma</address></li>
                    </ul>
                    </div>
                </div>
                <div class="item">
                    <div id="dati">
                        <p>Filadelfo Damiano Guerriera</br>
                            Matricola: O46001644</p>
                        <img src="https://thumbs.dreamstime.com/b/icona-dell-uomo-progettazione-della-persona-grafico-di-vettore-73697014.jpg"/>
                    </div>
                </div>
            </div>
        </footer>
    </article>
    </body>
</html>