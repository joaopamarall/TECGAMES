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
		
		<section class="slider">
			<div class="slider-content">
				
				<input type="radio" name="btn-radio" id="radio1">
				<input type="radio" name="btn-radio" id="radio2">
		
							<div class="slide-box primeiro">
							<img class="img-desktop" src="../images/carrosel1.jpg" alt="slide 1">
							</div>
		
							<div class="slide-box">
							<img class="img-desktop" src="../images/carrosel2.jpg" alt="slide 1">
							</div>
		
				<div class="nav-auto">
					<div class="auto-btn1"></div>
					<div class="auto-btn2"></div>
				</div>
		
				<div class="nav-manual">
					<label for="radio1" class="manual-btn"></label>
					<label for="radio2" class="manual-btn"></label>
				</div> 
		
			</div>
		</section>

	</main>
	<footer>
			<p class="rodape">TECGAMES &copy; 2023</p>
	</footer>
	<script src="../javascript/script.js"></script>
</body>
</html>