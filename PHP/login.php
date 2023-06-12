<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["cadastro"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $datanasc = $_POST["datanasc"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO cadastro (nome, email, senha, cpf, datanasc, telefone, endereco) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($stmt, "sssssss", $nome, $email, $senha, $cpf, $datanasc, $telefone, $endereco);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conexao);
    } elseif (isset($_POST["login"])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM cadastro WHERE email = ? AND senha = ?";
        $stmt = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            echo "Login realizado com sucesso!";
            header("Location: inicio2.php");
            exit();
        } else {
            echo "Erro ao autenticar usuário.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/style.css">
    <title>TECGAMES</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="menu">
            <div class="logo">
                <img src="../images/logo1.png" class="image-logo">
                <a class="store-name" href="../PHP/inicio.php">TECGAMES</a>
            </div>
            <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="PcGamer.php">PC Gamer</a></li>
                <li><a href="Perifericos.php">Periféricos</a></li>
                <li><a href="carrinhoDeCompras.php">Carrinho de Compras</a></li>
                <li><a href="login.php">Login/Cadastro</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="conteudo">
    <div class="card-login">
        <h1>LOGIN</h1>
        <form method="POST" action="login.php">
            <label for="email-login">Coloque seu email:</label>
            <input type="email" id="email-login" name="email" placeholder="name@example.com" required>

            <label for="senha-login">Senha:</label>
            <input type="password" id="senha-login" name="senha" placeholder="Digite sua senha" required>

            <input type="submit" name="login" value="Enviar">
        </form>
    </div>

    <h1>OU</h1>

    <div class="card-cadastro">
        <h1>CADASTRE-SE</h1>
        <form method="POST" action="login.php" onsubmit="return validarFormulario()">
            <div class="form-group">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label><br>
                <input type="text" id="cpf" name="cpf" required>
            </div>

            <div class="form-group">
                <label for="datanasc">Data de Nascimento:</label><br>
                <input type="date" id="datanasc" name="datanasc" required>
            </div>

            <div class="form-group">
                <label for="telefone">Celular:</label><br>
                <input type="tel" id="telefone" name="telefone" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label><br>
                <input type="text" id="endereco" name="endereco" required>
            </div>

            <input type="submit" name="cadastro" value="Cadastrar">
        </form>
    </div>

    <style>
        .conteudo {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <script>
        function validarFormulario() {
            var nome = document.forms["cadastro"]["nome"].value;
            var email = document.forms["cadastro"]["email"].value;
            var senha = document.forms["cadastro"]["senha"].value;
            var cpf = document.forms["cadastro"]["cpf"].value;
            var datanasc = document.forms["cadastro"]["datanasc"].value;
            var telefone = document.forms["cadastro"]["telefone"].value;
            var endereco = document.forms["cadastro"]["endereco"].value;
            var mensagemRetorno = document.getElementById('mensagemRetorno');

            if (nome == "") {
                alert("Por favor, preencha o campo Nome");
                return false;
            }

            if (email == "") {
                alert("Por favor, preencha o campo Email");
                return false;
            }

            if (senha == "") {
                alert("Por favor, preencha o campo Senha");
                return false;
            }

            if (cpf == "") {
                alert("Por favor, preencha o campo CPF");
                return false;
            }

            if (datanasc == "") {
                alert("Por favor, preencha o campo Data de Nascimento");
                return false;
            }

            if (telefone == "") {
                alert("Por favor, preencha o campo Telefone");
                return false;
            }

            if (endereco == "") {
                alert("Por favor, preencha o campo Endereço");
                return false;
            }
        }
    </script>
</main>

<footer class="rodape">
    <div class="conteudo-rodape">
        <div class="logo">
            <img src="../images/logo1.png" class="image-logo">
            <p class="store-name">TECGAMES</p>
        </div>
        <div class="endereco">
            <p>Rua dos Jogos, 123</p>
            <p>São Paulo - SP</p>
            <p>CEP: 12345-678</p>
        </div>
        <div class="contato">
            <p>(11) 98765-4321</p>
            <p>contato@tecgames.com</p>
        </div>
        <div class="redes-sociais">
            <a href="#"><img src="../images/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="../images/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="../images/twitter.png" alt="Twitter"></a>
        </div>
    </div>
</footer>
</body>
</html>
