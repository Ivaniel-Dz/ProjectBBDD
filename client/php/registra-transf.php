<html>
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
</html>
<?php
    require("../../php/conexion.php");
    require("../../php/variablesGlobCuentaCli.php");

    $miCuenta = $_POST['mi_cuenta'];

    $consultaTabla = "SELECT SALDO FROM CUENTA WHERE NUM_CUENTA=:num_cuenta";
    $tablaParse = oci_parse($conexion, $consultaTabla);

    oci_bind_by_name($tablaParse,':num_cuenta',$miCuenta);
    oci_execute($tablaParse);

    $rowTabla = oci_fetch_array($tablaParse);
    $miTabla = $rowTabla['SALDO'];
    $input_valor = $_POST['saldo'];

    if($miTabla > 0 && $miTabla > $input_valor && $num_cuenta != "" ){

    
    $suma = $miTabla - $input_valor;

    $actuMiTabla = "UPDATE CUENTA SET SALDO = :suma WHERE NUM_CUENTA = :num_cuenta";
    $actuali = oci_parse($conexion, $actuMiTabla);

    oci_bind_by_name($actuali, ':suma', $suma);
    oci_bind_by_name($actuali, ':num_cuenta', $miCuenta);

    oci_execute($actuali,OCI_COMMIT_ON_SUCCESS);
// ------------------------------------------------------------------------------------

    $consultaTablaOtra = "SELECT SALDO FROM CUENTA WHERE NUM_CUENTA= :otraCuenta";
    $tablaParseOtra = oci_parse($conexion, $consultaTablaOtra);

    oci_bind_by_name($tablaParseOtra,':otraCuenta',$num_cuenta);
    oci_execute($tablaParseOtra);
    
    $rowOtraTabla = oci_fetch_array($tablaParseOtra);
    $otraTabla = $rowOtraTabla['SALDO'];

    $input_sal = $_POST['saldo_sal'];
    $resta = $otraTabla + $input_sal;

    $actuOtraTabla = "UPDATE CUENTA SET SALDO = :resta WHERE NUM_CUENTA = :otraCuenta";

    $actualiOtra = oci_parse($conexion, $actuOtraTabla);
    oci_bind_by_name($actualiOtra, ':resta', $resta);
    oci_bind_by_name($actualiOtra, ':otraCuenta', $num_cuenta);
    oci_execute($actualiOtra, OCI_COMMIT_ON_SUCCESS);
    }else{
        echo '<script> 
                swal("Saldo insuficiente"); 
                window.location="./historial.php";
            </script>';
    }


















    if(oci_execute($actualiOtra,OCI_COMMIT_ON_SUCCESS)){
        echo '<script> 
        swal("Ese Actualizo correctamente");
        window.location="./historial.php";
        </script>';
    } else{
        echo '<script> 
                swal("No se Actualizo correctamente"); 
                window.history.go(-1);
            </script>';
    }

?>

<?php

    include("footer.php");
?>