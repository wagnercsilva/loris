<?php
echo <<<HTML
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
    <title>1 Ano Lorena</title>
  <header>
  <img src="topo">
  </header>
 		
 </head>
<body class= "conteudo">
<script type="text/javascript" src="script.js"></script>

<div id="teste">
<ul>
  <li><a href="#convite">Convite Virtual</a></li>
  <li><a href="#presença">Confirme sua presença</a></li>
  <li><a href="#sobre">Sobre nós</a></li>
  <li><a href="#contato">Contato</a></li>
</ul>
<div id="loginPage" class=login-page>
    <h1>Confirmação de presença!</h1>
    <h2>Olá convidado!</h2>

  <form id="envia" method="POST" action="login.php">
    
      <input type="text" class="form-control" id="login" placeholder="Informe seu nome" name="login">
    <br>
	<br>
	<br>
	<div>
    <button type="button" onclick="validaNome();"  class="btn btn-danger" value="entrar" id="entrar" name="entrar">Entrar</button>

	</div>
 </form>
</div>
</div>

</body>
</html>

HTML;
?>