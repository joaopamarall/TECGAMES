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
          <img src="../images/per1.png" alt="Produto 1" class="imagem-com-borda">
          <h5 class="product-title">Mouse Gamer SuperFrame Light </h5>
          <p class="computadores">RGB, Sensor 725C, 7200 DPI, 7 Botões, USB </p>
          <p class="precos"> R$99,90 a vista<br>24x sem juros</p>
          <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

        <div class="product">
          <img src="../images/per2.png" alt="Produto 2" class="imagem-com-borda">
          <h5 class="product-title">Controle Sony DualSense PS5 </h5>
          <p class="computadores">Sem Fio, White, 3005767</p>
          <p class="precos"> R$499,90 a vista<br>24x sem juros</p>
          <a href="carrinhoDeCompras.php">  <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

        <div class="product">
          <img src="../images/per3.png" alt="Produto 3" class="imagem-com-borda">
          <h5 class="product-title">Microfone Gamer Fifine Ampligame A6T
          </h5>
          <p class="computadores">RGB, USB, Black, Com Braço Articulado
          </p>
          <p class="precos"> R$199,90 a vista<br>24x sem juros</p>
         <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

      </div>
      <div class="product-line">
        <div class="product">
          <img src="../images/per4.png" alt="Produto 1" class="imagem-com-borda">
          <h3 class="product-title">Headset Gamer Redragon Hero</h3>
          <p class="computadores">3.5mm, Múltiplas Plataformas, Pink, H530-P</p>
          <p class="precos"> R$299,90 a vista<br>24x sem juros</p>
          <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

        <div class="product">
          <img src="../images/per5.png" alt="Produto 2" class="imagem-com-borda">
          <h3 class="product-title">Monitor Gamer SuperFrame Vision</h3>
          <p class="computadores">23.8 Pol, Full HD, IPS, G-Sync/FreeSync, 1ms, 144Hz, HDMI/DP, SFV2409</p>
          <p class="precos"> R$1199,90 a vista<br>24x sem juros</p>
          <a href="carrinhoDeCompras.php"> <button class="btn">Adicionar ao Carrinho</button> </a> 
        </div>

        <div class="product">
          <img src="../images/per6.png" alt="Produto 3" class="imagem-com-borda">
          <h3 class="product-title">Cadeira Gamer SuperFrame Knight</h3>
          <p class="computadores">Reclinável, Preto e Branco
          </p>
          <p class="precos"> R$799,90 a vista<br>24x sem juros</p>
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
      width: 75%;
      height: 75%;
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

    .precos{
	font-size: 20px;
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