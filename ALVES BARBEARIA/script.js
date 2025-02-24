function enviarAgendamento(horario) {
    var nome = document.getElementById('nome').value;
    var telefone = document.getElementById('telefone').value;

    if (!nome || !telefone) {
        alert("Por favor, preencha o nome e telefone.");
        return;
    }

    var mensagem = "Olá Patrick Alves, gostaria de agendar um horário para o dia " + document.getElementById('calendario').value + " às " + horario + ". Meu nome é " + nome + " e meu telefone é " + telefone + ".";
    var url = "https://api.whatsapp.com/send?phone=5518981421784&text=" + encodeURIComponent(mensagem);
    window.open(url, '_blank');
}


function redirigirParaAgendamento(event) {
    event.preventDefault(); // Impede o envio tradicional do formulário

    // AQUI: Você pode adicionar validação de campos antes de redirecionar, se necessário

    // Redireciona para a página de agendamento após o cadastro
    window.location.href = "home.html";
}