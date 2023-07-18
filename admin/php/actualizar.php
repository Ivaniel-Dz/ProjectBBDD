<?php 
    
    require("../../php/conexion.php");
    include("dashboard.php");

    $cliente = "SELECT * FROM CLIENTES WHERE ID_CLIENTE='".$_GET['id']."'";
    $datos = oci_parse($conexion, $cliente);
    oci_execute($datos);
?>

<div class="contenido">
<section class="container">
    <header>Actualizar Datos</header>
<form action="./validarActualizacion.php" method="POST" class="form">
  <?php 
  $fila = oci_fetch_array($datos);
    
  ?>
    <div class="column">
        <div class="input-box">
          <input type="hidden" value="<?php echo $fila["ID_CLIENTE"];?>" name="id">
            <label>Nombre</label>
            <input type="text" name="nombre" value="<?php echo $fila['NOMBRE'];?>" required autocomplete="off"/>
        </div>
        <div class="input-box">
            <label>Apellido</label>
            <input type="text" name="apellido" value="<?php echo $fila['APELLIDO'];?>" placeholder="Ingrese el apellido" required  autocomplete="off"/>
        </div>
    </div>

    <div class="column">
        <div class="input-box">
            <label>Identificación</label>
            <input type="text" name="iden" value="<?php echo $fila['IDENTIFICACION'];?>"  required  autocomplete="off" />
        </div>
        <div class="input-box">
            <label>E-mail </label>
            <input type="text" name="correo" value="<?php echo $fila['EMAIL'];?>" required  autocomplete="off" />
        </div>
    </div>

  <div class="column">
    <div class="input-box">
      <label>Telefono</label>
      <input type="text" name="telefono" value="<?php echo $fila['TELEFONO'];?>" required  autocomplete="off" />
    </div>
    <div class="input-box">
      <label>Fecha de Nacimiento</label>
      <input type="text" name="nacimiento" value="<?php echo $fila['FECHA_NAC'];?>" required />
    </div>
  </div>
  <div class="input-box">
      <label>Telefono</label>
      <input type="text" name="genero" value="<?php echo $fila['GENERO'];?>" required  autocomplete="off" />
    </div>

  <div class="column">
    <div class="input-box">
      <label>Tipo Cliente</label>
      <input type="text" name="genero" value="<?php echo $fila['ID_TIPO_CLI'];?>" required  autocomplete="off" />
    </div>

    <div class="input-box">
      <label># Cuenta</label>
      <input type="text" name="cuenta" id="cuenta" value="<?php echo $fila[''];?>" readonly required />
    </div>
  </div>
  <button>Submit</button>
  
</form>
</section>
</div>
