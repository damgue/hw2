<html>
    <head>
        <title>Equipe medica</title>
        <link rel="stylesheet" href='{{url("css/equipe.css")}}'/> 
        <script src='{{url("js/equipe_.js")}}' defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>        
        <header>
        <div id="nome">Equipe<br>medica</div>
        
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
            <ul class = "equipe"></ul>
            <span>Vuoi prenotare una visita con uno dei nostri medici? <a href='{{url("prenota_visita")}}'>Clicca qui</a> 
                e sarai reindirizzato alla pagina dove puoi prenotare una visita.</span>
    </section>

    <footer>
        <div id="col">
            <div class="item_footer">
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
            <div class="item_footer">
                <div id="dati">
                    <p>Filadelfo Damiano Guerriera</br>
                        Matricola: O46001644</p>
                    <img src="https://thumbs.dreamstime.com/b/icona-dell-uomo-progettazione-della-persona-grafico-di-vettore-73697014.jpg"/>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>