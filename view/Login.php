<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../CSS/style.css" rel="stylesheet" />
</head>

<body>
	<div class="boxLogin">
		<h1 class="titleLogin">INICIAR SESION</h1>

		<form action="../Autenticacion.php" method="POST">
			<section class="boxinputs">
				<label class="label">Usuario</label>
				<input type="text" class="inputForm" name="usuario" required>
			</section>


			<section class="boxinputs">
				<label class="label">Contraseña</label>
				<input type="password" class="inputForm" name="contraseña" required>
			</section>

			<section class="containerBtn">
				<input class="btnLogin" name="IniciarSesion" type="submit" value="Iniciar Sesion" />
			</section>
		</form>
	</div>
</body>

</html>