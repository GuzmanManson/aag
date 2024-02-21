<?php
	$titulo = "Contacto|AAG";
	include ("header.php");
?>
<main class="container">
<h1>Contacto</h1>
<form action="enviar-datos.php" method="post">
			<div>
		<label for="empresa">Empresa:</label>
<input name="empresa" id="empresa" type="text">

</div>
		<div>
		<label for="nombre">Nombre:</label>
<input name="nombre" id="nombre" type="text">

</div>
<div>
<label for="email">Email:</label>
<input name="email" id="email" type="email">
</div>
<div>
<label for="comentarios">Comentarios</label>
<textarea name="comentarios" id="comentarios" cols="30" rows="10"></textarea>
</div>
<div>
	<input type="checkbox" name="privacidad" id="privacidad" required><label for="privacidad">He leido y acepto la <a href="politica-privacidad.html" target="_blank">política de privacidad</a></label>
</div>
<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
<button type="submit">Enviar consulta</button>
	</form>
	<p>
	Para enviar este formulario debes aceptar nuestra política de privacidad.
	</p>
<ul>
    <li>Responsable de los datos: Ana Delia</li>
    <li>Finalidad: Responder a solicitudes del formulario</li>
    <li>Legitimación: Tu consentimiento expreso</li>
    <li>Destinatario: Ana Delia (datos almacenados solo en cliente de email)</li>
    <li>Derechos: Tienes derecho al derecho al acceso, rectificación, supresión, limitación, portabilidad y olvido de sus datos. Envía un email a rgpd@anadelia.es</li>
    </ul>
	</main>
<?php
include ("footer.php");
?>