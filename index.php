<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>

    <div class="container">
        <header>
            <img src="./IMG/bav.png" alt="Logo Alves Barbearia" class="logo">
            <h1>Alves Barbearia</h1>
        </header>

        <h2>Cadastro</h2>

        <form id="formCadastro" action="processa_cadastro.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" required placeholder="(XX) XXXXX-XXXX">

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <button id="cadastro" type="submit">Cadastrar</button>
        </form>

        <footer>
            <div class="contatos">
                <p>Contato:</p>
                <div>
                    <a href="tel:+55 18 981421784"><img src="./IMG/fone.png" alt=""></a>
                    <a href="https://www.instagram.com"><img src="./IMG/Insta.png" alt=""></a>
                    <a href="https://api.whatsapp.com/send?phone=5518981421784&text=Olá%20Patrick%20Alves,%20eu%20gostaria%20de%20fazer%20um%20agendamento."><img src="./IMG/zap.png" alt="FALE PATRICK ALVES"></a>
                </div>
            </div>
        </footer>
    </div>

    <script src="./JAVASCRIPT/script.js"></script>

</body>
</html>