<!DOCTYPE html>
<html>
	<head>
		<title>PHP - Hello World</title>
	</head>
	<body>
	<?php 
		$hello = "Olá Mundo 123!";
		$hcode = "Olá HCode!";
		$ano = "2019";
		$world = "Hello World 123!";
	?>
		<p><?= $hello; ?></p>
		<p><?= $world; ?></p>
		<hr />
		<p>Estamos no ano de <?= "".$ano; ?></p>
		<p><? $hcode; ?>, preciso terminar meu curso!</p>
		
		<form action="" method="">
			<label for="usuario">Usuário: </label>
				<input type="text" id="usuario" name="usuario" />
			<label for="senha">Senha: </label>
				<input type="password" id="senha" name="senha" />
			<input type="submit" value="Enviar" />	
		</form>
	</body>
</html>
