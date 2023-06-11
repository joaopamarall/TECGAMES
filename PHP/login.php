<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../images/logo2.png" type="image/x-icon">
	<link rel="stylesheet" href="../styles/style.css">
	<title>TECGAMES</title>
</head>
<body>
	<header class="cabecalho">
		<nav class="menu">
			<div class="logo">
				<img src="../images/logo2.png" class="image-logo">
				<a class="store-name" href="../PHP/inicio.php">TECGAMES</a>
			</div>
			<div class="mobile-menu">
			  <div class="line1"></div>
			  <div class="line2"></div>
			  <div class="line3"></div>
			</div>
			<ul class="nav-list">
				<li><a href="Lancamento.php">Lançamento</a></li>
				<li><a href="PcGamer.php">PC Gamer</a></li>
				<li><a href="Perifericos.php">Periféricos</a></li>
				<li><a href="OfertaDoDia.php">Oferta do dia</a></li>
				<li><a href="login.php">Login/Cadastro</a></li>
			</ul>
		</nav>
	</header>
	
	<main class="conteudo">

    <div class="card-login">
        <h1>Login</h1>
        <p>Coloque seu email:</p>
        <input type="mailto" value="example@example.com">
        <input type="button" value="Enviar">
    </div>
    <div class="card-cadastro">
        <h1>Cadastre-se</h1>
        <p>Cadastre seu email:</p>
        <input type="mailto" value="example@example.com">
        <input type="button" value="Enviar">
    </div>

	<style>
		.conteudo {
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
		
	</main>
	<footer>
	<section class="rodape2">
		
        <center> <img src="../images/credito.png" width="200px"; ></center>
         <center> <img src="../images/siteseguro.png" width="110px";></center>


		 <p class="rodape1">

	R. Barão do Rio Branco, 136 - Centro, Curitiba - PR, 80010-180 <br>

	</p>

	<center><p class="rodape1">
	Telefone:(41) 3358-0621 Whatsapp:(41) 9-9812-7232<br>
</p></center>

     
         
		 <p class="rodape">TECGAMES &copy; 2023</p>
          
        </section>
	</footer>
	<script src="../javascript/script.js"></script>
</body>
</html>