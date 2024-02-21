<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $titulo; ?></title>
	<meta name="description" content="<?php echo $descripcion; ?>">
	<meta name="robots" content="noindex, nofollow">
	<script src='https://www.google.com/recaptcha/api.js?render=6Ldm-6koAAAAAMOp6DRTIyh6xiTpWzn-aQaDIKGI'> 
</script>
<script>
grecaptcha.ready(function() {
grecaptcha.execute('6Ldm-6koAAAAAMOp6DRTIyh6xiTpWzn-aQaDIKGI', {action: 'formulario'})
.then(function(token) {
var recaptchaResponse = document.getElementById('recaptchaResponse');
recaptchaResponse.value = token;
});});
</script>
<script src="https://kit.fontawesome.com/d9e4a823f9.js" crossorigin="anonymous"></script>
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="print.css" media="print">
</head>
<body>
	<header>
		<div class="container d-md-flex justify-content-md-space-between align-items-md-center">
		<a href="#"><img src="img/logo.png" alt=""></a>
		<nav>
			<ul>
				<li><a href="academia.php">La Academia</a></li>
				<li><a href="actividades.php">Actividades</a></li>
				<li><a href="premios.php">Premios</a></li>
				<li><a href="publicaciones.php">Publicaciones</a></li>
				<li><a href="#">Multimedia</a></li>
				<li><a href="contacto.php">Contacto</a></li>
			</ul>
		</nav>
		</div>
	</header>