<?php
$destino="carlos@clformacion.es";
$nombre  =$_POST ["nombre"];
$correo  =$_POST ["correo"];
$pais  =$_POST ["pais"];
$telefono  =$_POST ["telefono"];
$curso  =$_POST ["curso"];
$contenido= "nombre: " .$nombre . "\ncorreo: " .$correo . "\npais: " . $pais . "\telefono: " . $telefono . "\ncurso: " . $curso;
mail($destino, "informacion" , $contenido);
header("location: gracias.html");




?>

