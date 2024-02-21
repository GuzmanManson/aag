<?php
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
$recaptcha_secret = '6Ldm-6koAAAAANeo0MfDcfilDM9GoTgbkZMQ02Y7'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 

if($recaptcha->score >= 0.7){
    // OK. ERES HUMANO, EJECUTA ESTE CÓDIGO
    $titulo = "Contacto|AAG";
    include ("header.php");
?>
<h1>Contacto</h1>
<?php
  // https://github.com/joetannenbaum/mr-clean#installation

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

  

  $body = "<h2>Contacto a través del formulario de la web:</h2>\n";
  $body .= "<p>Empresa: <strong>".$_POST["empresa"]."</strong></p>\n";
  $body .= "<p>Nombre: <strong>".$_POST["nombre"]."</strong></p>\n";
  $body .= "<p>Email: <strong>".$_POST["email"]."</strong></p>\n";
  $body .= "<p>Comentarios: <strong>".$_POST["comentarios"]."</strong></p>";


  if(mail("acampo@zaragozadinamica.es", "Prueba desde mi web", $body, $cabeceras)){
    echo "Tu mensaje ha sido enviado";
  }else{
    echo "Lo sentimos...";
  }
//print_r($_POST);
include ("footer.php");
}else{
    // KO. ERES ROBOT, EJECUTA ESTE CÓDIGO
}
?>

