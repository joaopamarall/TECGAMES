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

		<div class="promo">
			<a><img src="../images/carrosel1.jpg" class="image-promo"></a>
		</div>

		<div class="produtos">
      <div class="product-line">
        <div class="product">
          <img src="../images/pc1.png" alt="Produto 1">
          <h5 class="product-title">Computador T-HOME Executor </h5>
          <p class="computadores">AMD Ryzen 7 5700G / 8GB DDR4 / SSD 240GB </p>
          <p class="precos"> R$1999,90 a vista<br>24x sem juros</p>
          <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

        <div class="product">
          <img src="../images/PC4.png" alt="Produto 2">
          <h5 class="product-title">PC Gamer T-Gamer Flame </h5>
          <p class="computadores">AMD Ryzen 7 5700X / NVIDIA GeForce RTX 3060 / 16GB DDR4 / HT 1TB</p>
          <p class="precos"> R$4199,90 a vista<br>24x sem juros</p>
          <a href="carrinhoDeCompras.php">  <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

        <div class="product">
          <img src="../images/pc3.png" alt="Produto 3">
          <h5 class="product-title">Computador T-Home Create
          </h5>
          <p class="computadores">AMD Ryzen 5 4600G / 16GB (2x8GB) DDR4 / SSD 240GB
          </p>
          <p class="precos"> R$2299,90 a vista<br>24x sem juros</p>
         <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

      </div>
      <div class="product-line">
        <div class="product">
          <img src="../images/PC5.png" alt="Produto 1">
          <h3 class="product-title">PC Gamer Custo Beneficio 2022</h3>
          <p class="computadores">Ryzen 5 5600X / NVIDIA GeForce RTX 3060 / 16GB(2x8) DDR4 / SSD 480GB</p>
          <p class="precos"> R$4590,90 a vista<br>24x sem juros</p>
          <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

        <div class="product">
          <img src="../images/PC6.png" alt="Produto 2">
          <h3 class="product-title">PC Gamer T-GAMER Odin</h3>
          <p class="computadores">Intel i7 10700KF / NVIDIA GeForce RTX 4070 Ti / 16GB (2x8GB) DDR4 / SSD 240GB</p>
          <p class="precos"> R$5999,90 a vista<br>24x sem juros</p>
          <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

        <div class="product">
          <img src="../images/PC7.png" alt="Produto 3">
          <h3 class="product-title">Computador T-Home Create</h3>
          <p class="computadores">AMD Ryzen 3 3200G / 8GB DDR4 / SSD 240GB </p>
          <p class="precos"> R$2590,90 a vista<br>24x sem juros</p>
         <br>    <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
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
      
      display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
     
      padding: 10px;
    }
    .product img {
      width: 80%;
      object-fit: cover;
      margin-bottom: 10px;
    }
    .product-title {
      font-size: 19px;
      font-weight: bold;
    }

    .computadores {
      text-align: justify;
  max-width: 70%;
      font-size: 13px;
    }

    .btn {
      display: inline-block;
      padding: 12px 24px;
      background-color: #2e2e2e;
      color: #ffffff;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    
    .btn:hover {
      background-color: #00165f;
    }

    

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 0.8;
      }
      50% {
        transform: scale(1.1);
        opacity: 0.5;
      }
      100% {
        transform: scale(1);
        opacity: 0.8;
      }
    }
    


  </style>

	<script src="../javascript/script.js"></script>
</body>
</html>