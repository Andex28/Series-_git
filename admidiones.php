<?php
    $nombre = "";
    $apellidoPat="";
    $apellidoMat="";
    $curp="";
    $carrera1="";
    $carrera2="";


if(isset($_GET['fNombre']))
    $nombre = $_GET['fNombre']; 

if(isset($_GET['fApellidoPat']))
    $apellidoPat = $_GET['fApellidoPat'];

if(isset($_GET['fApellidoMat']))
     $apellidoMat = $_GET['fApellidoMat']; 
     
if(isset($_GET['fCurp']))
     $curp = $_GET['fCurp']; 
    
 if(isset($_GET['fCarrera1']))
     $carrera1 = $_GET['fCarrera1'];   
     
if(isset($_GET['fCarrera2']))
     $carrera2 = $_GET['fCarrera2'];     
 
 ?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <title> Admision </title>
</head>
<body>
    <h1>Reporte Del Aspirante </h1>
    <p>El aspirante: <?php echo $nombre?> </p>
    <p>El apellido paterno del aspirante: <?php echo $apellidoPat?> </p>
    <p>El apellido materno del aspirante: <?php echo $apellidoMat?> </p>
    <p> La Curp del Aspirante: <?php echo $curp?> </p>
    <p>La carrera principla del aspirante es :<?php echo $carrera1?></p>
    <p>La carrera secundaria del aspirante es :<?php echo $carrera2?></p>    
</body>
</html>