function verifica(event){
    const errore = document.querySelector("#errore");
    errore.innerHTML = "";
    if(form.nome.value.length == 0 ||
        form.cognome.value.length == 0 || 
        form.eta.value.length == 0 ||
        form.username.value.length == 0 ||
        form.password.value.length == 0){
        const avviso = document.querySelector('div');
        avviso.classList.remove('hidden');
        event.preventDefault();
    }
}

function onJsonUsername(json){
    console.log(json);
}

function onResponseUsername(response){
    console.log(response.status);
    return response.json();
}

const form = document.forms['form'];
form.addEventListener('submit', verifica);