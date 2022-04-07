
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	
	<link rel="stylesheet" href="assets/css/material.min.css">

	<link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" href="assets/css/spg_login.css">
	<script src="assets/js/material.min.js" ></script>

</head>
<style>
  .spg_logoInit
  {
    background-image: url(./assets/img/sgp.png);
    background-size:100% 100%;
    width:60px;
    height:60px;
    margin:auto;
  }
</style>
<body>
	<div class="login-wrap cover">
		<div class="container-login">
			<p class="text-center" style="font-size: 80px;">
				<div class="spg_logoInit"></div>
			</p>
			<p class="text-center text-condensedLight">Iniciar sesión con tu cuenta</p>
			 <form method="post" action="auth.php" class="clearfix">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="userName" name="username">
				    <label class="mdl-textfield__label" for="userName">Usuario</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="password" id="pass" name= "password">
				    <label class="mdl-textfield__label" for="pass">Contraseña</label>
				</div>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; margin: 0 auto; display: block;">
					INICIAR SESIÓN
				</button>
			</form>
		</div>
	</div>
</body>
</html>


