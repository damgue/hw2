function prenotaVisita(event){
    const form_data = new FormData(form);
    console.log(form_data);

    
    fetch("prenota/visita", {method: 'post', body: form_data, header: {"X-CSFR-TOKEN": token}});

    const messaggio = document.querySelector("#messaggio");
    messaggio.classList.remove("hidden");
    messaggio.textContent = "Visita prenotata, visita il tuo profilo per visualizzare le tue prenotazioni.";
    event.preventDefault();   
    
}

const token = document.querySelector("meta[name='csrf-token']").getAttribute("content");

const form = document.querySelector("form");
form.addEventListener('submit', prenotaVisita);