<html>
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
</html>

<?php
require("../../php/conexion.php");
require('../../php/variablesGlobales.php');
require('../../php/variablesGlobCuentaCli.php');

    $id_cuenta = 3;
    $id_serv = 1;
    $id_ca = 3;

    $insertarCliente = "INSERT INTO CLIENTES (ID_CLIENTE, ID_TIPO_CLI,NOMBRE,APELLIDO,IDENTIFICACION,TELEFONO,EMAIL,PASSW,GENERO,FECHA_NAC,ID_SERV)
    VALUES(:id, :tipo, :nom, :apell, :iden,  :tel, :mail, :pass, :genero, :fecha_naci, :servicio)";
    $stmt = oci_parse($conexion, $insertarCliente);
        
    $id_cliente = +3;
    oci_bind_by_name($stmt, ':id',$id_cliente);
    oci_bind_by_name($stmt, ':tipo',$tipo_cli);
    oci_bind_by_name($stmt, ':nom',$nombre);
    oci_bind_by_name($stmt, ':apell',$apellido);
    oci_bind_by_name($stmt, ':iden',$identificacion);
    oci_bind_by_name($stmt, ':tel',$telefono);
    oci_bind_by_name($stmt, ':mail',$email);
    oci_bind_by_name($stmt, ':pass',$password);
    oci_bind_by_name($stmt, ':genero',$genero);
    oci_bind_by_name($stmt, ':fecha_naci',$fecha_naci);
    oci_bind_by_name($stmt, ':servicio',$id_serv);  

    $resultCli = oci_execute($stmt, OCI_COMMIT_ON_SUCCESS);

    $insertarCalle = "INSERT INTO CALLE VALUES (:id_ca, :calle, :hogar, :numero, :id_cli)";
    $calle = oci_parse($conexion, $insertarCalle);

    oci_bind_by_name($calle, ':id_ca',$id_ca);
    oci_bind_by_name($calle, ':calle',$calleCl);
    oci_bind_by_name($calle, ':hogar',$tipo_hogar);
    oci_bind_by_name($calle, ':numero',$num_hogar);
    oci_bind_by_name($calle, ':id_cli',$id_cliente);

    $resultCalle = oci_execute($calle, OCI_COMMIT_ON_SUCCESS);

    $insertarCuenta = "INSERT INTO CUENTA VALUES(:id_cu, :id_cli, :tipo, :num, :saldo, :fecha)";
    $cuenta = oci_parse($conexion, $insertarCuenta);
    $id_cuenta = +3;
    oci_bind_by_name($cuenta, ':id_cu',$id_cuenta);
    oci_bind_by_name($cuenta, ':id_cli',$id_cliente);
    oci_bind_by_name($cuenta, ':tipo',$tipo_cuenta);
    oci_bind_by_name($cuenta, ':num',$num_cuenta);
    oci_bind_by_name($cuenta, ':saldo',$saldo);
    oci_bind_by_name($cuenta, ':fecha',$fecha);
    
    $resultCuenta = oci_execute($cuenta, OCI_COMMIT_ON_SUCCESS);

    $insertarDir = "INSERT INTO DIRECCION_CLI VALUES(:id_dir, :provincia, :distrito, :corregimiento, :id_cliente)";
    $dirCli = oci_parse($conexion, $insertarDir);
    $id_dir = +3;
    oci_bind_by_name($dirCli, ':id_dir',$id_dir);
    oci_bind_by_name($dirCli, ':provincia',$provincia);
    oci_bind_by_name($dirCli, ':distrito',$distrito);
    oci_bind_by_name($dirCli, ':corregimiento',$corregimiento);
    oci_bind_by_name($dirCli, ':id_cliente',$id_cliente);
    
    $resultDir = oci_execute($dirCli, OCI_COMMIT_ON_SUCCESS);

    
    
    
    if ($resultCli &&  $resultCalle && $resultCuenta && $resultDir) {
        echo '<script> 
        swal("Nuevo paciente agregado");
        window.location="./historial.php";
            </script>';
    } else {
        $e = oci_error($stmt);
        $e = oci_error($cuenta);
        $e = oci_error($calle);
        $e = oci_error($dirCli);
        echo "Error al insertar los datos: " . $e['message'];
    }
    
    oci_free_statement($stmt);
    oci_free_statement($cuenta);
    oci_free_statement($calle);
    oci_free_statement($dirCli);


    oci_close($conexion);
?>