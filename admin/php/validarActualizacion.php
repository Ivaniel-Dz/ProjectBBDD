<?php 
    require("../../php/conexion.php");
    require("../../php/variablesGlobales.php");

    $id = $_POST['id'];

    $actualizar = "UPDATE CLIENTES SET 
    NOMBRE='$nombre', 
    APELLIDO = '$apellido', 
    IDENTIFICACION='$identificacion',
    TELEFONO='$telefono',
    EMAIL='$email',
    GENERO='$genero'
    WHERE ID_CLIENTE='$id' ";
    
    function actualizar($conexion, $actualizar){
        $resultado = oci_parse($conexion, $actualizar) ;
        oci_execute($resultado);
        if($resultado){
            echo '<script> 
                swal("Ese Actualizo correctamente");
                window.location="./pacientes.php";
            </script>';
        }   else{
            echo '<script> 
                        swal("No se Actualizo correctamente"); 
                        window.history.go(-1);
                </script>';
        }
        oci_free_statement($resultado);
    }

    actualizar($conexion,$actualizar);
?>

<?php 

    include("footer.php");
?>