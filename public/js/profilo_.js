function onJson(json){
    let sezione = undefined;
    sezione = document.querySelector("div.case");
    const blocco = document.querySelector("ul");
    blocco.classList.add("blocco");
    blocco.innerHTML="";
    
    for(elem of json){
        const riga = document.createElement("div");
        riga.classList.add("riga");

        const elenco = document.createElement("li");
        elenco.textContent = elem.nome;
        elenco.classList.add("testo");
        elenco.dataset.indice=elem;
        //console.log("ECCO "+elenco.dataset.indice);

        const ind = document.createElement("span");
        ind.textContent = elem.id_prenotazione;
        ind.classList.add("indice_prenotazione");
        ind.classList.add("hidden");
        //console.log(ind);

        const elimina = document.createElement("img");
        elimina.src = "css/cestino.svg";
        elimina.href = '#';
        //elimina.dataset.id = elem.id_servizio;
        //console.log(elimina.dataset.id);
        //elimina.textContent = "Elimina prenotazione";
        elimina.classList.add("cancella");
        elimina.addEventListener("click", cancellaPrenotazione);

        riga.appendChild(elenco);
        riga.appendChild(ind);
        riga.appendChild(elimina);
        blocco.appendChild(riga);
        sezione.appendChild(blocco);
    }
}

function cancellaPrenotazione(event){
    //const nome = event.currentTarget.parentNode.querySelector("li.testo").innerText;
    const indice = event.currentTarget.parentNode.querySelector("span").innerText;
    console.log(indice);
    fetch("booking/elimina/"+indice).then(aggiornaPrenotazioni);
    event.preventDefault();
}

function onJsonVisite(json){
    console.log(json);
    let sez = undefined;
    sez = document.querySelector("div.visitePrenotate");
    const blocco = document.querySelector("ul.visite");
    blocco.classList.add("blocco");
    blocco.innerHTML="";
    for(e of json){
        const div = document.createElement("div");
        div.classList.add("div-visite");
        div.dataset.indice = e; 

        const rg = document.createElement("li");
        rg.classList.add("rg");
        rg.textContent = e.medico;

        const data = document.createElement("date");
        data.classList.add("data");
        data.textContent = e.data_visita;

        div.appendChild(rg);
        div.appendChild(data);

        blocco.appendChild(div);
        sez.appendChild(blocco);
    }
}

function onResponse(response){
    return response.json();
}

function onResponseVisite(response){
    return response.json();
}

function aggiornaPrenotazioni(){
    fetch("booking").then(onResponse).then(onJson);
}

function aggiornaVisite(){
    fetch("aggiorna/").then(onResponseVisite).then(onJsonVisite);
}

aggiornaVisite();
aggiornaPrenotazioni();
let indice = null;