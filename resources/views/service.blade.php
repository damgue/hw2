<html>
    <head>
        <title>Servizi offerti</title>
        <link rel="stylesheet" href='{{url("css/servizi.css")}}'/> 
        <script src='{{url("js/servizi_.js")}}' defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>        
        <header>
        <div id="nome">Servizi offerti</div>
        
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
    <article id="ServiziTotali">
        
        <form name='form' id="form" method="GET">
            <p><label><input type='text' name='text' id="text" placeholder="Cerca un servizio... Es. TAC"></label></p>
            <p><label>&nbsp;<input type='submit'></label></p>
        </form>

        <section>
        
           <div class="case"></div>
        </section>
    </article>
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