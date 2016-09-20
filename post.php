<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Aula 03 Post</title>
		<meta charset="UTF-8" />
		<meta name="Description" content="Post">
		<meta name="Keywords" content="Post, PHP">
		<!-- <meta http-equiv="refresh" content="60" > -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body >
		<?php if(isset($_POST['palavra'])) { ?>
				<h3>Você buscou por: <?=$_POST['palavra']?></h3>
		<?php } ?>

		<form method="post" action="#">
			<p>Digite uma palavra</p>
			<input name="palavra" type="text" />

		</form>
	</body>
</html>