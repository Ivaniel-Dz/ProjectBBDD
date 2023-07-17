<?php
    include("index.php");
    require('./conexion.php');

    $mostrar = "SELECT * FROM CLIENTES";

    $tipo = "SELECT * FROM TIPO_CLIENTE";

    $ejecutar = oci_parse($conexion, $mostrar);

    $tipoCliente = oci_parse($conexion, $tipo);
    
    //$tipo_cli = $_POST['tipo_cli'];

  //   while($tipo_cli != ""){

  //   $numC = "0";
  //   if($tipo_cli == 1001){
  //     $numC = "1001";
  //   }else if($tipo_cli == 1002){
  //     $numC = "1002";
  //   }else if($tipo_cli == 1003) {
  //     $numC = "1003";
  //   }
  // }
?>
<div class="contenido">
    <section class="container">
      <header>Registrar Usuario</header>
      <form method="POST" class="form">
        <div class="column">
          <div class="input-box">
            <label>Tipo Cliente</label>
            <div class="select-box">
              <select name="tipo_cli" id="tipos">
                <?php
                  oci_execute($tipoCliente);
                  while($row = oci_fetch_assoc($tipoCliente) ){
                ?>
                <option hidden value="0">Tipos</option>
                <option value="<?php echo $row['ID_TIPO_CLI'] ;?>"><?php echo $row['DESCRIPCION']; }?></option>                
              </select>
            </div>
          </div>
          <div class="input-box">
            <label>Cuenta</label>
            <div class="select-box">
              <select name="tipo_cuenta" id="tipos">
                <option hidden value="0">Tipos</option>
                <option value="1">Ahorro</option>
                <option value="2">Préstamo</option>
              </select>
            </div>
          </div>
        </div>
        <button>Listo</button>
      </form>

      <?php
        if (isset($_POST["tipo_cli"]) && isset($_POST["tipo_cuenta"])) {
          $opcionSeleccionada = $_POST["tipo_cli"];
          $cuentaSelec = $_POST["tipo_cuenta"];
          if($opcionSeleccionada == "1001" && $cuentaSelec == 1){
            include('form-cliente.php');
          }else if($opcionSeleccionada == "1002" && $cuentaSelec == 1){              
            include('form-empresa.php');
          }else if($opcionSeleccionada == "1003" && $cuentaSelec == 1){
            echo '<h1>Seleccionaste Privado</h1>';
          }else if($opcionSeleccionada == "1001" && $cuentaSelec == 2){
            echo '<h1>Seleccionaste Prestamo Público</h1>';
          }else if($opcionSeleccionada == "1002" && $cuentaSelec == 2){              
            echo '<h1>Seleccionaste Prestamo gubernamental</h1>';
          }else if($opcionSeleccionada == "1003" && $cuentaSelec == 2){
            echo '<h1>Seleccionaste Prestamo Privado</h1>';
          }

        }
      
      ?>
    </section>
</div>
<?php
    include("footer.php");
  ?>