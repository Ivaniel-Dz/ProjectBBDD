<?php
    // datos del cliente 
    $tipo_cli = $_POST ['tipo_cliente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $identificacion = $_POST['iden'];
    // $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['correo'];
    $password = $_POST['seguridad'];
    $genero = $_POST['genero'];
    $fecha_naci = $_POST['nacimiento'];


    // datos de la calle, casa y num casa
    $calleCl = $_POST['calle'];
    $tipo_hogar = $_POST['hogar'];
    $num_hogar = $_POST['numCasa'];
    
    // datos de la cuenta
    $tipo_cuenta = $_POST['tipo_cuenta'];
    $num_cuenta = $_POST['cuenta'];
    $saldo = $_POST['saldo'];
    $fecha = $_POST['fecha'];


?>