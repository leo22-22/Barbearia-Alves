<?php
$conexao = mysqli_connect('localhost', 'root', '', 'barbearia_alves');

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    if (empty($nome) || empty($email) || empty($telefone) || empty($senha)) {
        die("Erro: Todos os campos são obrigatórios.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Erro: Email inválido.");
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $no = $conexao->prepare("INSERT INTO table_ba (nome, email, telefone, senha) VALUES (?, ?, ?, ?)");
    $no->bind_param("ssss", $nome, $email, $telefone, $senha_hash);

    if ($no->execute()) {
        header("Location: ./HTML/home.html");
        exit();
    } else {
        if ($no->errno == 1062) {
            echo "Erro: Email ou telefone já cadastrado.";
        } else {
            echo "Erro: " . htmlspecialchars($no->error);
        }
    }

    $no->close();
} else {
    echo "Método de requisição inválido.";
}

mysqli_close($conexao);
?>