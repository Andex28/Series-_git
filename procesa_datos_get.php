<?php //apertura de código PHP
//Variable locales para almacenar los datos recibidos del form 
//Toda variable en PHP inicia con el signo $

$nombre = "";
$apellidoPat="";
 $apellidoMat=""; 
//Validar si de crea la variable recibida , utilizado en metodo
//isset que valida si existe una variable
//todos los datos se recibe en un array llamado $_GET o $_post
if(isset($_GET['fNombre']))
    $nombres = $_GET['fNombre']; 
if(isset($_GET['fApellidoPat']))
    $apellidoPat = $_GET['fApellidoPat'];
if(isset($_GET['fApellidoMat']))
     $apellidoMat = $_GET['fApellidoMat']; 

//cierre de codigo php ?> 

<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <meta charset="UTF-8">
    <title>Procesa datos con get </title>
    <link rel="icon" type="images/png" href="images/Imagen6.png">

</head>
<body>
<h3> procesamiento de datos recibidos  de un formulario comn metodos
     GET </h3>    

<?php
//Geerar código HTML con la instyruccion echo de php
//Se crea un párrafo completo, concatenando valores con un .

 echo "<p>" . "El nombre recibido es: " . $nombres . "</p>";
 echo "<p>" . "El apellido paterno recibido es: ".$apellidoPat."</p>";
 echo "<p>" . "El apellido materno recibido es: ".$apellidoMat."</p>"; 
 ?>

</body>
</html>