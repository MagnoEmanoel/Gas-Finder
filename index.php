<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menor Preço</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<style>	
		html {
  			height: 100%;
		}
		h1 {
			text-align: center; 
			position: absolute;
			color: #fff;
			font-size: 80px;
			top: 30%;
			left: 50%;
			transform: translate(-50%, -50%);
			border: 2px solid #fff;
			padding: 20px;
		}
		p {
			text-align: justify;
			position: absolute;
			color: #fff;
			font-size: 20px;
			top: 60%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		body {
			background-image: url('./img/Component\ 1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			margin: 0;
			padding: 0;
			padding-top: 50px;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			font-family: 'Montserrat', sans-serif;
		}
		.navbar {
			display: flex;
			justify-content: center;
			align-items: center;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			background-color: rgba(0, 0, 0, 0.5);
			height: 50px;
			margin: 0;
			padding: 0;
			z-index: 1;
			font-family: 'Montserrat', sans-serif;
			width: 100%;
		}
		.navbar a {
			flex: 1;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
			font-family: 'Montserrat', sans-serif;
		}
		.navbar a:last-child {
			margin-right: 0;
		}
		.container {
			margin-top: 50px;
		}
		.navbar a:hover {
			background-color: #ddd;
			color: black;
		}
		.active {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<div class="navbar">
		<a href="tabela.php">Lista de Postos</a>
		<a href="includes\sobre.html">Sobre</a>
		<a href="#seja-parceiro">Seja Parceiro</a>
		<a href="includes\termos-de-uso.html">Termos de Uso</a>
	</div>
	<div class="container">
	<h1>BEM-VINDO</h1>
	<p>Aqui, você encontrará uma lista dos postos com os melhores preços de gasolina, diesel e álcool em Imperatriz. Nosso site está em versão beta e só fornece informações sobre esses tipos de combustíveis, mas estamos trabalhando para expandir nossos serviços. 
	Encontre os melhores preços de combustíveis em sua região e economize dinheiro na bomba.</p>
	</div>
</body>
</html>
