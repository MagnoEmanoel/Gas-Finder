<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de Postos</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <style>
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
    }
    body {
          background-color: #29006B;
          font-family: 'Montserrat', sans-serif;
          color: black;
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
    .navbar a:hover {
			background-color: #ddd;
			color: black;
		}
    .navbar a.active {
      color: #abc4ff;
      font-family: 'Montserrat', sans-serif;
    }
    .clearfix {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-top: 60px;
    }
    .info-box {
      position: relative;
      flex-basis: calc(33.33% - 4%); 
      margin-bottom: 4%;
      border: 1px solid #ccc;
      border-radius: 18px;
      padding: 8px;
      background: linear-gradient(136.38deg, #CCCCCC -15.49%, #CCCCFF 109.75%);
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
      transition: all 0.2s ease-in-out; 
    }
    .info-box:hover {
      transform: scale(0.9); 
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3); 
      z-index: 1; 
    }
    @media only screen and (max-width: 768px) {
      .info-box {
        flex-basis: 100%;
      }
      .navbar {
    flex-direction: column;
    height: auto;
      }
      .navbar a {
        font-size: 14px;
        margin: 10px;
      }

    }
    .info-box h2 {
      font-size: 2.5em;
      margin-bottom: 12px;
      border-bottom: 2px solid #ccc;
      padding-bottom: 8px;
      margin: 0;
    }
    .info-box p {
      font-size: 1.8em;
      margin-bottom: 6px;
      margin-top: 0;

    }
    .info-box strong {
      font-weight: bold;
    }
    @keyframes blink {
  80% { color: black; }
}
  </style>
</head>
<body>
  <div class="navbar">
    <a href="index.php">Voltar a Página Inicial</a>
    <a href="includes\sobre.html">Sobre</a>
    <a href="#seja-parceiro">Seja Parceiro</a>
    <a href="includes\termos-de-uso.html">Termos de Uso</a>
  </div>
<div class="clearfix">
  <?php
    $pdo = new PDO("mysql:dbname=postos; host=localhost", "root", "");
    $sql = $pdo->query('SELECT * FROM postostable ORDER BY gasolina ASC, alcool ASC, diesel ASC');
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i<3; $i++) {
      $linha = $dados[$i]; 
    
      echo '<div class="info-box">';
      echo '<h2>' . $linha['nome'] . '</h2>';
      echo '<p><strong>Endereço:</strong> ' . $linha['endereco'] . '</p>';
      echo '<p><strong>Gasolina:</strong> ' . $linha['gasolina'] . '</p>';
      echo '<p><strong>Diesel:</strong> ' . $linha['diesel'] . '</p>';
      echo '<p><strong>Álcool:</strong> ' . $linha['alcool'] . '</p>';
      echo '<p><strong>Data da Última Atualização:</strong> ' . $linha['data'] . '</p>';
      echo '<p style="animation: blink 1s linear infinite; color: yellow;">Este é um dos postos com os melhores valores em combustível da região.</p>';
      echo '</div>';
    }
    
    for ($i=3; $i<count($dados); $i++) {
      $linha = $dados[$i];
      
      echo '<div class="info-box">';
      echo '<h2>' . $linha['nome'] . '</h2>';
      echo '<p><strong>Endereço:</strong> ' . $linha['endereco'] . '</p>';
      echo '<p><strong>Gasolina:</strong> ' . $linha['gasolina'] . '</p>';
      echo '<p><strong>Diesel:</strong> ' . $linha['diesel'] . '</p>';
      echo '<p><strong>Álcool:</strong> ' . $linha['alcool'] . '</p>';
      echo '<p><strong>Data da Última Atualização:</strong> ' . $linha['data'] . '</p>';
      echo '</div>';
    }
  ?>
</div>
	  </body>
	  </html>
	  
