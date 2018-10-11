<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<html lang="es">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resources/favicon.ico">
        <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme -->
    <link href="resources/bootstrap-theme.min.css" rel="stylesheet">
   <head>
  <title>Login del Usuario</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" id="boton-registro"  name="login_asesor">Login</button>
  	</div>
  	<p>
  		¿Deseas registrarte? <a href="register.php">Registro de Usuario</a>
  	</p>
  </form>
</body>
</html>