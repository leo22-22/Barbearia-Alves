// Função que envia a mensagem de agendamento para o WhatsApp
function enviarAgendamento(horario) {
    // Pega o valor do nome e telefone inseridos pelo usuário no formulário
    var nome = document.getElementById('nome').value;
    var telefone = document.getElementById('telefone').value;

    // Verifica se o nome e telefone foram preenchidos
    if (!nome || !telefone) {
        alert("Por favor, preencha o nome e telefone."); // Exibe alerta caso os campos estejam vazios
        return; // Impede a execução da função caso algum campo esteja vazio
    }

    // Cria a mensagem que será enviada pelo WhatsApp com os dados preenchidos
    var mensagem = "Olá Patrick Alves, gostaria de agendar um horário para o dia " + document.getElementById('calendario').value + " às " + horario + ". Meu nome é " + nome + " e meu telefone é " + telefone + ".";
    
    // Cria a URL para a API do WhatsApp, incluindo a mensagem personalizada
    var url = "https://api.whatsapp.com/send?phone=5518981421784&text=" + encodeURIComponent(mensagem);
    
    // Abre a URL do WhatsApp em uma nova guia do navegador
    window.open(url, '_blank');
}

// Função que redireciona para a página de agendamento após o cadastro
function redirigirParaAgendamento(event) {
    event.preventDefault(); // Impede o envio tradicional do formulário
    
    // Redireciona para a página home.html (ajuste o nome conforme necessário)
    window.location.href = "home.html"; // Serve para redirecionar para a página de agendamento
}
