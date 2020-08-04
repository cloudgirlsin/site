// Array de strings onde cada item é um evento
// ** Edite esse array para mudar os eventos da página
const eventos = [
    "Evento 1",
    "Evento 2",
    "Evento 3",
    "Evento 4",
    "Evento 5",
]

// Funcção responsável por carregar os eventos na tela
function carregarAgenda() {
    // Carrega a lista UL (lista não ordenada) da página para a constante 
    const listaDeEventos = document.getElementById('agenda')
    
    // Percorre todos os itens do array de eventos
    eventos.forEach(evento => {
        // Cria um elemento LI (item de lista) que representará o evento na lista UL
        const li = document.createElement('li')
        
        // O texto do LI vai ter o texto do evento (o item do array)
        li.innerText = evento
        
        // Insere na lista UL o item LI que foi criado e que está com o texto do evento
        listaDeEventos.appendChild(li)
    })
}

// Disparo da chamada da função que faz o carregamento da agenda
carregarAgenda()