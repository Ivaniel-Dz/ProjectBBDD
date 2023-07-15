<?php
    include("index.php");
    require('../BBDD/conexion.php');

    $mostrarCli = "SELECT * FROM CLIENTES INNER JOIN CUENTA ON CLIENTES.ID_CLIENTE = CUENTA.ID_CLIENTE";
    // $mostrarCuenta = "SELECT * FROM CUENTA";

    $ejecutar = oci_parse($conexion, $mostrarCli);
    // $cuenta = oci_parse($conexion, $mostrarCuenta);
    oci_execute($ejecutar); 
    // oci_execute($cuenta);
?>

<?php
    include("footer.php");
?>