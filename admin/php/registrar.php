<?php

require('../BBDD/conexion.php');

    $id_cliente = 5;
    $tipo_cli = 1001;
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $identificacion = $_POST['iden'];
    $direccion = 'Panama, Tocumen';
    $telefono = $_POST['telefono'];
    $email = $_POST['correo'];
    
    // $id_tipo_cuenta = $_POST['cuenta'];
    $id_cuenta = 5;
    $id_tipo_cuenta = 1001;
    $num_cuenta = $_POST['cuenta'];
    $saldo = $_POST['saldo'];
    $fecha = $_POST['fecha'];

    if($tipo_cli == 1){
        
    }

    $insertarCliente = "INSERT INTO CLIENTES VALUES(:id, :tipo, :nom, :apell, :iden, :dir, :tel, :mail)";
    $stmt = oci_parse($conexion, $insertarCliente);

    oci_bind_by_name($stmt, ':id',$id_cliente);
    oci_bind_by_name($stmt, ':tipo',$tipo_cli);
    oci_bind_by_name($stmt, ':nom',$nombre);
    oci_bind_by_name($stmt, ':apell',$apellido);
    oci_bind_by_name($stmt, ':iden',$identificacion);
    oci_bind_by_name($stmt, ':dir',$direccion);
    oci_bind_by_name($stmt, ':tel',$telefono);
    oci_bind_by_name($stmt, ':mail',$email);

    $resultCli = oci_execute($stmt, OCI_COMMIT_ON_SUCCESS);

    $insertarCuenta = "INSERT INTO CUENTA VALUES(:id_cu, :id_cli, :tipo, :num, :saldo, :fecha)";
    $cuenta = oci_parse($conexion, $insertarCuenta);

    oci_bind_by_name($cuenta, ':id_cu',$id_cuenta);
    oci_bind_by_name($cuenta, ':id_cli',$id_cliente);
    oci_bind_by_name($cuenta, ':tipo',$id_tipo_cuenta);
    oci_bind_by_name($cuenta, ':num',$num_cuenta);
    oci_bind_by_name($cuenta, ':saldo',$saldo);
    oci_bind_by_name($cuenta, ':fecha',$fecha);

    $resultCuenta = oci_execute($cuenta, OCI_COMMIT_ON_SUCCESS);

    if ($resultCli && $resultCuenta) {
        echo "Datos insertados correctamente.";
    } else {
        $e = oci_error($stmt);
        $e = oci_error($cuenta);
        echo "Error al insertar los datos: " . $e['message'];
    }
    
    oci_free_statement($stmt);
    oci_free_statement($cuenta);
    oci_close($conexion);
?>