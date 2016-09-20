<?php 
	// vamos receber uma variável via Get e exibir na tela 
	$texto = $_GET['nome']
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Aula 03 - Get</title>
		<meta charset="UTF-8" />
		<meta name="Description" content="Get">
		<meta name="Keywords" content="PHP, Get">
		<!-- <meta http-equiv="refresh" content="60" > -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body >
		Olá <?=$texto?>, seja bem vindo!
	</body>
</html>