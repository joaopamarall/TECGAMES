<?php
include('conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recupera os valores dos campos do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $datanasc = $_POST["datanasc"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, cpf, datanasc, telefone, endereco) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $nome, $email, $cpf, $datanasc, $telefone, $endereco);
    mysqli_stmt_execute($stmt);

    // Verifica se a inserção foi bem-sucedida
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }

    // Fecha a declaração
    mysqli_stmt_close($stmt);
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>

