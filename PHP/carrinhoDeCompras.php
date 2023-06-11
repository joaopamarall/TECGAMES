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

			<style>
		/* Estilos para o carrinho de compras */
		body {
		font-family: Arial, sans-serif;
		}
		.container {
		max-width: 600px;
		margin: 0 auto;
		padding: 20px;
		}
		.cart {
		border: 1px solid #ccc;
		padding: 10px;
		background-color: #f5f5f5;
		}
		.cart h2 {
		margin-top: 0;
		}
		.cart-item {
		margin-bottom: 10px;
		}
		.cart-item span {
		font-weight: bold;
		}
		.form-label {
		display: block;
		margin-top: 10px;
		font-weight: bold;
		}
		.form-input {
		width: 100%;
		padding: 8px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		}
		.checkout-button {
		margin-top: 20px;
		padding: 10px 20px;
		background-color: #4CAF50;
		color: #fff;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		}
		.checkout-button:hover {
		background-color: #45a049;
		}
	</style>
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