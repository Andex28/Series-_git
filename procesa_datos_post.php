<?php //captura de codigo de PHP
       //definicion de variable para almacenar los datos recibidos via post
        $nombres=""; 
        $apellidoPat=""; 
        $apellidoMat="";
        $lengHTMLFav=""; 
        $lengSFav1="";
        $lengSFav2="";
        $lengSFav3="";
        $marcaCarro="";
        $direccion = "";
        $password="";
        $fechaNac="";
        $fechaHoraEvento="";
        $correo="";
        $documento="";
        $matricula="";
        $mes = "";
        $cantidad = "";
        $edad = "";
        $identificador = "";
        $tel = "";
        $hora = "";
        $semana = "";
        

        //Validar si se recibió cada variable del form y lo asigno a una variable local.
        //Los datos del formulario los recibe un array asociativo llamado 
        // $_POST o $_GET.
        //El método isset sirve para saber si existe una variable

        if(isset($_POST['fNombre']))
        $nombres = $_POST['fNombre'];
        if(isset($_POST['fApellidoPat']))
        $apellidoPat = $_POST['fApellidoPat'];
        if(isset($_POST['fApellidoMat']))
        $apellidoMat = $_POST['fApellidoMat'];
        if(isset($_POST['rLengFav']))
        $lengHTMLFav = $_POST['rLengFav'];
        if(isset($_POST['cbLengS1']))
        $lengSFav1 = $_POST['cbLengS1'];
        if(isset($_POST['cbLengS2']))
        $lengSFav2 = $_POST['cbLengS2'];
        if(isset($_POST['cbLengS3']))
        $lengSFav3 = $_POST['cbLengS3'];
        if(isset($_POST['sltCars']))
        $marcaCarro = $_POST['sltCars'];
        if(isset($_POST['taDireccion']))
        $direccion = $_POST['taDireccion'];
        if(isset($_POST['txtPwd']))
        $password = $_POST['txtPwd'];
        if(isset($_POST['txtFechaNac']))
        $fechaNac = $_POST['txtFechaNac'];
        if(isset($_POST['txtFechaHoraEvento']))
        $fechaHoraEvento = $_POST['txtFechaHoraEvento'];
        if(isset($_POST['txtCorreo']))
        $correo = $_POST['txtCorreo'];
        if(isset($_POST['fileDocumento']))
        $documento = $_POST['fileDocumento'];
        if(isset($_POST['hMatricula']))
        $matricula = $_POST['hMatricula'];
        if(isset($_POST['txtMes']))
        $mes = $_POST['txtMes'];
        if(isset($_POST['txtCantidad']))
        $cantidad = $_POST['txtCantidad'];
        if(isset($_POST['txtId']))
        $identificador = $_POST['txtId'];
        if(isset($_POST['txtEdad']))
        $edad = $_POST['txtEdad'];
        if(isset($_POST['txtTel']))
        $tel = $_POST['txtTel'];
        if(isset($_POST['txtHora']))
        $hora = $_POST['txtHora'];
        if(isset($_POST['txtSemana']))
        $semana = $_POST['txtSemana'];
      //procesar los datos recibidos, en este ejemplo inicamente se 
      // visualiza en pantalla el valor recibido
      echo "El nombre recibido es: " . $nombres . "<br>";
      echo "El apellido paterno recibido es: " . $apellidoPat . "<br>";
      echo "El apellido materno recibido es: " . $apellidoMat . "<br>";
      echo "El lenguaje HTML favorito recibido es: " . $lengHTMLFav . "<br>";
      echo "Los lenguajes de script favoritos recibidos son: " .
      $lengSFav1 . ", " . $lengSFav2 . ", " . $lengSFav3 ."<br>";
      echo "Marca de carro recibido es: " . $marcaCarro . "<br>";
      echo "Dirección: " . $direccion . "<br>";
      echo "Tu password es: " . $password . "<br>";
      echo "Tu fecha de nacimiento es: " . $fechaNac . "<br>";
      echo "La fecha y hora el evento es: " . $fechaHoraEvento . "<br>";
      echo "Tu correo es: " . $correo . "<br>";
      echo "Tu documento es: " . $documento . "<br>";
      echo "Tu matricula es: " . $matricula . "<br>";
      echo "Mes y año seleccionado: " . $mes . "<br>";
      echo "La cantidad elegida es: " . $cantidad . "<br>";
      echo "Edad elegida es: " . $edad . "<br>";
      echo "Teléfono: " . $tel . "<br>";
      echo "Hora: " . $hora . "<br>";
      echo "Semana y año: " . $semana . "<br>";
      echo "el dentificador es ". $identificador . "br";
//cierre de codigo php
?>