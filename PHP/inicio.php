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
				<li><a href="Lancamento.php">Lançamento</a></li>
				<li><a href="PcGamer.php">PC Gamer</a></li>
				<li><a href="Perifericos.php">Periféricos</a></li>
				<li><a href="OfertaDoDia.php">Oferta do dia</a></li>
				<li><a href="login.php">Login/Cadastro</a></li>
			</ul>
		</nav>
	</header>

	<main class="conteudo">

		<div class="promo">
			<a><img src="../images/carrosel1.jpg" class="image-promo"></a>
		</div>

		<div class="produtos">
      <div class="product-line">
        <div class="product">
          <img src="caminho-para-imagem1.jpg" alt="Produto 1">
          <h3 class="product-title">Produto 1</h3>
          <p>Descrição do Produto 1</p>
          <button>Adicionar ao Carrinho</button>
        </div>

        <div class="product">
          <img src="caminho-para-imagem2.jpg" alt="Produto 2">
          <h3 class="product-title">Produto 2</h3>
          <p>Descrição do Produto 2</p>
          <button>Adicionar ao Carrinho</button>
        </div>

        <div class="product">
          <img src="caminho-para-imagem3.jpg" alt="Produto 3">
          <h3 class="product-title">Produto 3</h3>
          <p>Descrição do Produto 3</p>
          <button>Adicionar ao Carrinho</button>
        </div>

      </div>

      <div class="product-line">
        <div class="product">
          <img src="caminho-para-imagem1.jpg" alt="Produto 1">
          <h3 class="product-title">Produto 1</h3>
          <p>Descrição do Produto 1</p>
          <button>Adicionar ao Carrinho</button>
        </div>

        <div class="product">
          <img src="caminho-para-imagem2.jpg" alt="Produto 2">
          <h3 class="product-title">Produto 2</h3>
          <p>Descrição do Produto 2</p>
          <button>Adicionar ao Carrinho</button>
        </div>

        <div class="product">
          <img src="caminho-para-imagem3.jpg" alt="Produto 3">
          <h3 class="product-title">Produto 3</h3>
          <p>Descrição do Produto 3</p>
          <button>Adicionar ao Carrinho</button>
        </div>
        
      </div>
    </div>
		
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

	<style>
    /* Estilos para a linha de produtos */
    .product-line {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }
    .product {
      width: 30%;
      text-align: center;
      border: 1px solid #ccc;
      padding: 10px;
    }
    .product img {
      width: 100%;
      max-height: 200px;
      object-fit: cover;
      margin-bottom: 10px;
    }
    .product-title {
      font-weight: bold;
    }
  </style>

	<script src="../javascript/script.js"></script>
</body>
</html>