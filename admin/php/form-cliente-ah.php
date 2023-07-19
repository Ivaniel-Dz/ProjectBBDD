<?php 
  
  require("../../php/conexion.php");

  $cuenta = "SELECT * FROM TIPO_CUENTA";
  $cliente = "SELECT * FROM TIPO_CLIENTE";

  $tipo_cuenta = oci_parse($conexion, $cuenta);
  $tipo_client = oci_parse($conexion, $cliente);
  oci_execute($tipo_cuenta);
  oci_execute($tipo_client);
?>

<form action="registra-cli-ah.php" method="POST" class="form">
  <div class="form first">
    <div class="column">
      <div class="input-box">
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Ingrese el nombre"  />
      </div>
      <div class="input-box">
        <label>Apellido</label>
        <input type="text" name="apellido" placeholder="Ingrese el apellido"  />
      </div>
      <div class="input-box">
        <label>Identificación</label>
        <input type="text" name="iden" placeholder="Ingrese la Identificación"  />
      </div>
    </div>
    <div class="column">
      <div class="input-box">
          <label>Telefono</label>
          <input type="text" name="telefono" placeholder="Ingrese el # telefono"  />
      </div>
      <div class="input-box">
        <label>E-mail </label>
        <input type="text" name="correo" placeholder="Ingrese el E-mail"  />
      </div>
      <div class="input-box">
        <label>Contraseña</label>
        <input type="text" name="seguridad" id="seguridad" placeholder="Ingrese el apellido" readonly />
      </div>
    </div>
  
    <div class="column">
      <div class="input-box">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="nacimiento" placeholder="Ingrese la fecha de nacimiento"  />
      </div>
      <div class="input-box">
        <label>Nacionalidad</label>
        <input type="text" name="nacionalidad" placeholder="Ingrese la Nacionalidad"  />
      </div>
      
      <div class="input-box">
        <label>Género</label>
        <div class="select-box">
          <select name="genero" id="genero">
              <option hidden value="0">Seleccione</option>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
          </select>
      </div>
      </div>
    </div>

    <div class="column">
      <div class="input-box">
        <label>Provincia</label>
        <div class="select-box">
          <select name="provincia" id="provincia">
            <option hidden value="0">Seleccione</option>
            <?php   
              $provincias = "SELECT * FROM PROVINCIA";
              $prov = oci_parse($conexion, $provincias);
              oci_execute($prov);
              while($filaprov = oci_fetch_assoc($prov)){
            ?>
            <option value="<?php echo $filaprov['PROVINCIA']; ?>"><?php echo $filaprov['PROVINCIA']; }?></option>
          </select>
        </div>
      </div>
      <div class="input-box">
        <label>Distrito</label>
        <div class="select-box">
          <select name="distrito" id="distrito">
            <option hidden value="0">Seleccione</option>
            <?php   
              $distrito = "SELECT * FROM DISTRITO";
              $dist = oci_parse($conexion, $distrito);
              oci_execute($dist);
              while($filadist = oci_fetch_assoc($dist)){
            ?>
            <option value="<?php echo $filadist['DISTRITO']; ?>"><?php echo $filadist['DISTRITO']; }?></option>
          </select>
        </div>
      </div>
      <div class="input-box">
        <label>Corregimiento</label>
          <div class="select-box">
          <select name="corregimiento" id="corregimiento">
            <option hidden value="0">Seleccione</option>
            <?php   
              $corregimiento = "SELECT * FROM CORREGIMIENTO";
              $corr = oci_parse($conexion, $corregimiento);
              oci_execute($corr);
              while($filacorr = oci_fetch_assoc($corr)){
            ?>
            <option value="<?php echo $filacorr['CORREGIMIENTO']; ?>"><?php echo $filacorr['CORREGIMIENTO']; }?></option>
          </select>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="input-box">
          <label>Calle</label>
          <input type="text" name="calle" placeholder="Ingrese la calle"  />
      </div>
      <div class="input-box">
        <label>Tipo Residencia</label>
        <div class="select-box">
          <select name="hogar" id="tip_resi">
              <option hidden value="0">Tipos</option>
              <option value="Casa">Casa</option>
              <option value="Apartamento">Apartamento</option>
          </select>
      </div>
      </div>
      <div class="input-box">
        <label># Residencia</label>
        <input type="text" name="numCasa" placeholder="Ingrese número de casa"/>
      </div>
    </div>
    </div>
  <div class="second form">
  <div class="column">
      <div class="input-box">
        <label>Tipo Cuenta</label>
        <div class="select-box">
              <select name="tipo_cuenta" id="tipo_cuenta">
              <option hidden value="0">Tipos</option>
              <option value="1001">Indivual</option>
              <option value="1002">Corporativo</option>         
              </select>
            </div>
      </div>
      <div class="input-box">
        <label># Cuenta</label>
        <input type="text" name="cuenta" id="cuenta" placeholder="# cuenta" readonly required />
      </div>
      <div class="input-box">
        <label>Servicio</label>
        <input type="text" name="servicio" id="" value="Ahorro" readonly>
        </div>
      </div>

    <div class="column">
      <div class="input-box">
        <label>Tipo Cliente</label>
        <div class="select-box">
        <select name="tipo_cliente" id="tipo_cliente">
                <option hidden value="0">Tipos</option>              
                <option value="1">Publico</option>              
                <option value="2">Gubernamental</option>              
                <option value="3">Privado</option>              
              </select>
        </div>
      </div>
      <div class="input-box">
        <label>Saldo</label>
        <box-icon name='dollar'></box-icon>
        <input type="number" name="saldo" placeholder="Ingrese el nombre" required />
      </div>
      <div class="input-box">
        <label>Fecha Apertura</label>
        <input type="text" name="fecha" id="date" placeholder="Ingrese el apellido" readonly />
      </div>
    </div>
  </div>
  <button>Registrar</button>
</form>


<script>

    let generate = "12345*";
    let passwordNow =document.querySelector("#seguridad").value = (generate);

  // generando fecha de hoy
  var today = new Date();
  let day = today.getDate();
  let month = today.getMonth() + 1;
  let year = today.getFullYear();

  let dateNow = document.querySelector("#date").value = (day + '/' + month + '/' + year);
  console.log(dateNow);

  // generando número de cuenta 
  let date = '-'+today.getDate();
  const tipo_cuenta = document.querySelector("#tipo_cuenta");
  tipo_cuenta.addEventListener("change", () => {
    let valorOption =tipo_cuenta.values;
    var optionSelect =tipo_cuenta.options[tipo_cuenta.selectedIndex];
    if(tipo_cuenta.value == 1001){
      let public = "0"+ 4 +"-";
      let cuenta = [];
      for (let i = 1; i<=5; i++){
        let random =Math.ceil(Math.random() * 9);
        cuenta.push(random);
      }
    cuenta.push(date);
    let inputResult = document.querySelector("#cuenta").value = (public  + cuenta.join(''));
    let numCuenta = document.querySelector("#numcuenta").value = (public  + cuenta.join(''));
    let nomCuenta =document.querySelector("#nomcuenta").value = (optionSelect.text);

    }else if(tipo_cuenta.value == 1002){
      let public = "0"+ 2 +"-";
      let cuenta = [];
      for (let i = 1; i<=5; i++){
      let random =Math.ceil(Math.random() * 9);
      cuenta.push(random);
      }
    cuenta.push(date);
      let inputResult = document.querySelector("#cuenta").value = (public + cuenta.join('') );
      let numCuenta = document.querySelector("#numcuenta").value = (public  + cuenta.join(''));
      let nomCuenta =document.querySelector("#nomcuenta").value = (optionSelect.text);

    }
  });



</script>