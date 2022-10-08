<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$mensaje_form = $_POST['mensaje'];

//Conexion a base de datos
//$conexion = mysqli_connect('localhost', 'root', '', 'php_inicial_266') or exit("No se pudo conectar a la base de datos");
$conexion = mysqli_connect('localhost','id19428655_simich','bb[(8ky(N[n4prgO','id19428655_php_266') or exit("No se pudo conectar a la base de datos");

//consulta
mysqli_query($conexion, "insert into consultas values (default,'$nombre_form','$apellido_form','$edad_form','$mensaje_form')");
mysqli_close($conexion);

//Evita pantalle en blanco
header("Location: contacto.php?e=ok");
 
//Enviar mail
$cuerpo_mail = "Nombre:".$nombre_form."\r\n"."Apellido:".$apellido_form."\r\n"."Edad:".$edad_form."\r\n"."Mensaje:".
$mensaje_form;

mail("simich@outlook.com","Mensaje enviado desde mi sitio web", $cuerpo_mail); 