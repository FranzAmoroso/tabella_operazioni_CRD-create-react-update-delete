
    let esercizio_table;
    let inserisciBTN = document.querySelector('#nuova_riga');
    let tabellaConteiner = document.querySelector("#tabella-conteiner")

    

generaTabella();

function generaTabella(){
    fetch('select.php', {
        method: 'POST',
        header: {
            'Content-Type': 'application/json'
        }
    }).then(response => response.json())
    .then(data => {
        esercizio_table = data;
        console.log('dati ricevuti: ', data);
        let tabella = `
                    <table>
                <thead>
                    <tr>
                        
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                ${generaRighe(data)}
                </tbody>
            </table>`;

        tabellaConteiner.insertAdjacentHTML('beforeend', tabella);

        
        let modificaBottoni = document.querySelectorAll('.modifica-persona');
        for(let i = 0; i < modificaBottoni.length; i++){
            modificaBottoni[i].addEventListener("click", modificaPersona);
        }

        let eliminaBottoni = document.querySelectorAll('.elimina-persona');
        for(let i = 0; i < eliminaBottoni.length; i++){
            eliminaBottoni[i].addEventListener('click', eliminaPersona);
        }
        
        
    
    }).catch((error) => {
        console.error('Errore: ', error);
    });
    
    function generaRighe(data) {
    let righe = '';
    data.forEach(persona => {
        let riga = `
        <tr>
            <td>${persona.id}</td>
            <td>${persona.nome}</td>
            <td>${persona.cognome}</td>
            <td>${persona.email}</td>
                        <td>
                            <button class="modifica-persona" data-val="${persona.id}">Modifica</button>
                            <button class="elimina-persona" data-val="${persona.id}">Elimina</button>
                        </td>
                    </tr>
                    
                    `;
        righe += riga;
    });
    
    
    return righe;
    
    
    
    }
}

 generateTable() 

function generateTable(){
    
    inserisciDati = document.querySelector('#nuova_riga');
    inserisciDati.addEventListener('click', () => {
    
    let formConteiner = document.querySelector('#form-nuoviDati');
    formConteiner.classList.remove('form')
    formConteiner.id = 'formA'
    
    let table1 = document.querySelector('table');
    table1.classList.toggle('effetto');

    function generateInternoform() {    
        /* generateInputName();
        generateInputCognome();
        generateInputEmail();
        generateSubmit();
        console.log('form Generato'); */
        
    
    /* function generateInputName() {} */
        labelNome = document.createElement('label')
        labelNome.innerHTML = 'Inserisci Nome';
        inputNome = document.createElement('input')
        inputNome.type = 'text';
        inputNome.name = 'nome';
        inputNome.id = 'input_nome';
        inputNome.class='input;'
    
        formConteiner.append(labelNome);
        formConteiner.append(inputNome);
    
        console.log('generate name');
    
    
    /* function generateInputCognome() {} */
        labelCognome = document.createElement('label');
        labelCognome.innerHTML = 'Inserisci Cognome'
        inputCognome = document.createElement('input');
        inputCognome.type = 'text';
        inputCognome.name = 'cognome';
        inputCognome.id = 'input_cognome';
        inputCognome.class = 'input'
    
        formConteiner.append(labelCognome);
        formConteiner.append(inputCognome);
        console.log('generateCognome');
    
    
    /*  function generateInputEmail() {} */
        labelEmail = document.createElement('label');
        labelEmail.innerHTML = 'Inserisci Email';
        inputEmail = document.createElement('input');
        inputEmail.type = 'email';
        inputEmail.name = 'email';
        inputEmail.id = 'input_email';
        inputNome.class = 'input'
    
        formConteiner.append(labelEmail);
        formConteiner.append(inputEmail);
    
        console.log('generate email');
    
    
    
    /* function generateSubmit() {} */
        let button = document.createElement('button');
        button.innerHTML = "Inserisci Nuova Persona"
        button.type = 'submit';
        button.name = 'inserisciNuoviDati';
        button.id = 'button_submit';
        button.class = 'input'
        
        formConteiner.append(button);
        console.log('Button Generato');
     }
     generateInternoform()
});
}




    ;
    
    inserisciBTN.addEventListener('click', inserisciPersona);

function inserisciPersona() {
const formData = new FormData();
formData.append('nome', $nome);
formData.append('cognome', $cognome);
formData.appen('email', $email);
fetch('insert.php', {
        method: 'POST',
        header: {
            'Content-Type': 'application/json'
        },
        body: formData

    }).then(response => response.json())
    .then(data => {
        console.log(data);
        
    });
}





function modificaPersona(e){ 
   console.log('modifico persona: ', e.target.getAttribute('data-val') )
}


    
    
    
function eliminaPersona(e){
console.log('elimina persona: ', e.target.getAttribute('data-val'))
}


function aggiornaTabella(){
    let tabella = document.querySelector('table')
    tabellaConteiner.removeChild(tabella)
    generaTabella(); 
} 