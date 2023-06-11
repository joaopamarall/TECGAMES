<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/images/logo1.png" type="image/x-icon">
	<link rel="stylesheet" href="/styles/style.css">
	<title>TECGAMES</title>
</head>
<body>
	
	<header class="cabecalho">
		<nav class="menu">
			<div class="logo">
				<img src="/images/logo1.png" class="image-logo">
				<a class="store-name" href="/HTML/inicio.html">TECGAMES</a>
			</div>
			<div class="mobile-menu">
			  <div class="line1"></div>
			  <div class="line2"></div>
			  <div class="line3"></div>
			</div>
			<ul class="nav-list">
				<li><a href="Lancamento.html">Lançamento</a></li>
				<li><a href="PcGamer.html">PC Gamer</a></li>
				<li><a href="Perifericos.html">Periféricos</a></li>
				<li><a href="OfertaDoDia.html">Oferta do dia</a></li>
			</ul>
		</nav>
	</header>
	
	<style>
		/* Estilos para o carrinho de compras */
		.cart {
		  border: 1px solid #ccc;
		  padding: 10px;
		}
		.cart-item {
		  margin-bottom: 10px;
		}
		.cart-item span {
		  font-weight: bold;
		}
	  </style>

	<main class="conteudo">
		
		<div class="cart">
			<h2>Itens no Carrinho</h2>
			<div class="cart-item">
			  <span>Item 1:</span> Camiseta
			</div>
			<div class="cart-item">
			  <span>Item 2:</span> Calça
			</div>
			<div class="cart-item">
			  <span>Item 3:</span> Sapato
			</div>
			

		  <form>
			<h2>Dados do Cartão</h2>
			<label for="card-number">Número do Cartão:</label>
			<input type="text" id="card-number" name="card-number" placeholder="Número do Cartão" required>
			
			<label for="card-holder">Nome do Titular:</label>
			<input type="text" id="card-holder" name="card-holder" placeholder="Nome do Titular" required>
			
			<label for="expiry-date">Data de Expiração:</label>
			<input type="text" id="expiry-date" name="expiry-date" placeholder="MM/AA" required>
			
			<label for="cvv">CVV:</label>
			<input type="password" id="cvv" name="cvv" placeholder="CVV" required>
			
			<button class="checkout-button">Finalizar Compra</button>
		  </form>
		</div>


	</main>
	<footer>
			<p class="rodape">TECGAMES &copy; 2023</p>
	</footer>
	<script src="/javascript/script.js"></script>
</body>
</html>