<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["cadastro"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $dataNascimento = $_POST["data"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO usuarios (nome, email, cpf, data_nascimento, telefone, endereco) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($stmt, "ssssss", $nome, $email, $cpf, $dataNascimento, $telefone, $endereco);
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

        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
        $stmt = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            echo "Login realizado com sucesso!";
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
        <label>Coloque seu email:</label>
        <input type="mailto" placeholder="name@example.com">

		<label for="senha">Senha:</label>
  		<input type="password" id="senha" placeholder="Digite sua senha" required>

        <input type="button" value="Enviar">
    </div>

	<h1>OU</h1>

    <div class="card-cadastro">
        <h1>CADASTRE-SE</h1>

        <p>Cadastre seu email:</p>

			<form id="meuFormulario" method="POST" action="cadastro.php" onsubmit="return validarFormulario();">
            <div class="form-group">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
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

			<input type="submit" value="Cadastrar">
			<div id="mensagemRetorno"></div>

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

			if (datanasc == "") {
				alert("Por favor, preencha o campo Data de Nascimento");
				return false;
			}

			if (cpf == "") {
				alert("Por favor, preencha o campo CPF");
				return false;
			}

			if (telefone == "") {
				alert("Por favor, preencha o campo Celular");
				return false;
			}

			if (endereco == "") {
				alert("Por favor, preencha o campo Endereço");
				return false;
			}
		}

	</script>
	</main>
	<footer>

    	<section class="rodape2">
			<center><img src="../images/credito.png" width="200px"; ></center>
			<center><img src="../images/siteseguro.png" width="110px";></center>

			<p class="rodape1">
				R. Barão do Rio Branco, 136 - Centro, Curitiba - PR, 80010-180 <br>
			</p>

			<p class="rodape1">
				Telefone:(41) 3358-0621 Whatsapp:(41) 9-9812-7232<br>
			</p>
			
			<p class="rodape">TECGAMES &copy; 2023</p>
          
        </section>
	</footer>
	<script src="../javascript/script.js"></script>
</body>
</html>