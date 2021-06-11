function onJson(json){
    let sezione = undefined;
    sezione = document.querySelector("div.case");
    sezione.innerHTML="";
    
    for (i=0; i<=10; i++){
        const doc = json[i];
    const service = document.createElement("div");
    service.classList.add("service");
    service.dataset.i=i;
    indice = service.dataset.i;

    const newdiv = document.createElement("div");
    newdiv.classList.add("f_div");
    const immagine = document.createElement("img");
    immagine.src = doc.immagine;
    immagine.classList.add("image");
    const nome = document.createElement("h2");
    nome.classList.add("nome");
    nome.textContent = doc.nome;
    const descrizione = document.createElement("p");
    descrizione.textContent = doc.descrizione;
    descrizione.classList.add("description");
    descrizione.classList.add("hidden");
    
    newdiv.appendChild(nome);
    service.appendChild(immagine);

    const tasto_info = document.createElement("button");
    tasto_info.classList.add("tasto");
    newdiv.appendChild(tasto_info);
    tasto_info.textContent = "Mostra piu' dettagli";
    tasto_info.addEventListener('click', mostraTesto);
    
    const prenota = document.createElement("button");
    prenota.classList.add("prenota");
    newdiv.appendChild(prenota);
    prenota.textContent = "Prenota il servizio";
    prenota.addEventListener('click', aggiungiPrenotazione);

    const messaggio = document.createElement("img");
    messaggio.classList.add("messaggio");
    messaggio.classList.add("hidden");
    messaggio.src="css/prenotato.svg";
    newdiv.appendChild(messaggio);

    
    newdiv.appendChild(descrizione);
    service.appendChild(newdiv);
    sezione.appendChild(service);   
    }
}

function onJsonRicerca(json){
    let sezione = undefined;
    sezione = document.querySelector("div.case");
    sezione.innerHTML="";
    
    const doc = json[0];
    const service = document.createElement("div");
    service.classList.add("service");

    const newdiv = document.createElement("div");
    newdiv.classList.add("f_div");
    const immagine = document.createElement("img");
    immagine.src = doc.immagine;
    immagine.classList.add("image");
    const nome = document.createElement("h2");
    nome.classList.add("nome");
    nome.textContent = doc.nome;
    const descrizione = document.createElement("p");
    descrizione.textContent = doc.descrizione;
    descrizione.classList.add("description");
    descrizione.classList.add("hidden");
    
    newdiv.appendChild(nome);
    service.appendChild(immagine);

    const tasto_info = document.createElement("button");
    tasto_info.classList.add("tasto");
    newdiv.appendChild(tasto_info);
    tasto_info.textContent = "Mostra piu' dettagli";
    tasto_info.addEventListener('click', mostraTesto);
    
    const prenota = document.createElement("button");
    prenota.classList.add("prenota");
    newdiv.appendChild(prenota);
    prenota.textContent = "Prenota il servizio";
    prenota.addEventListener('click', aggiungiPrenotazione);

    const indietro = document.createElement("img");
    indietro.classList.add("indietro");
    indietro.src="css/indietro_button.svg";
    indietro.addEventListener('click', aggiornaServizi);
        
    const messaggio = document.createElement("img");
    messaggio.classList.add("messaggio");
    messaggio.classList.add("hidden");
    messaggio.src="css/prenotato.svg";
    newdiv.appendChild(messaggio);
    
    newdiv.appendChild(descrizione);
    
    service.appendChild(newdiv);
    service.appendChild(indietro);
    sezione.appendChild(service);   
}

function onResponseRicerca(response){
    return response.json();
}

function mostraTesto(event){
    const div_0 = event.target.parentNode;
    const descr = div_0.getElementsByTagName("p")[0];
    const b = div_0.getElementsByTagName("button")[0];
    descr.classList.remove("hidden");
    cambia_testo_bottone = !cambia_testo_bottone;
    if (cambia_testo_bottone) {
        b.textContent = 'Nascondi dettagli';        
    } else {
        b.textContent = "Mostra piu' dettagli";
        descr.classList.add("hidden");
    }
}

function aggiungiPrenotazione(event){
    blocco = event.currentTarget.parentNode.parentNode;
    const messaggio = blocco.querySelector("img.messaggio");
    messaggio.classList.remove("hidden");
    const nome = blocco.querySelector("#ServiziTotali h2.nome").innerText;
    //console.log(nome);
    fetch("booking/nome/"+encodeURIComponent(nome));
    event.preventDefault();
}

function ricerca(event){
    const text = document.querySelector("#text").value;
    //console.log(text);
    const prova = fetch("service/nome/"+encodeURIComponent(text)).then(onResponseRicerca).then(onJsonRicerca);
    event.preventDefault();
}

function onResponse(response){
    return response.json();
}

function aggiornaServizi(){
    fetch("api/service").then(onResponse).then(onJson);
}

aggiornaServizi();

const form = document.querySelector("#form")
form.addEventListener('submit', ricerca);

let cambia_testo_bottone = false;
let indice = null;