<?php
include('server.php')
    ?>
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
    <title>Registro del sistema</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Registro</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Nombre</label>
  	  <input type="text" name="nombre" value="<?php echo $nombre; ?>">
  	</div>
      <div class="input-group">
  	  <label>Apellido paterno</label>
  	  <input type="text" name="apellido_paterno" value="">
  	</div>
      <div class="input-group">
  	  <label>Apellido materno</label>
  	  <input type="text" name="apellido_materno" value="">
  	</div>
      <div class="input-group">
  	  <label>Celular</label>
  	  <input type="text" name="celular" value="">
  	</div>
      <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
      <div class="input-group">
  	  <label>Domicilio</label>
  	  <input type="text" name="direccion" value="">
  	</div>
      <div class="input-group">
  	  <label>Horas impartidas</label>
  	  <input type="number" name="horas" value="">
  	</div>
  	<div class="input-group">
  	  <label>Carrera</label>
  	  <input type="text" name="carrera" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
    <button type="submit" class="btn" id="boton-registro" name="reg_asesor">Registrar</button>
  	</div>
  	<p>
  		Ya eres miembro? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>