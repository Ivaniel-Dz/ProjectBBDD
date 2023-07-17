<?php
include("header.php");
?>
<form action="registrar.php" method="POST" class="form">
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
    </div>
  
    <div class="column">
      <div class="input-box">
        <label>Identificación</label>
        <input type="text" name="iden" placeholder="Ingrese la Identificación"  />
      </div>
      <div class="input-box">
        <label>E-mail </label>
        <input type="text" name="correo" placeholder="Enter email address"  />
      </div>
    </div>
  
    <div class="column">
      <div class="input-box">
        <label>Telefono</label>
        <input type="text" name="telefono" placeholder="Enter phone number"  />
      </div>
      <div class="input-box">
        <label>Fecha de Nacimiento</label>
        <input type="date" placeholder="Enter birth date"  />
      </div>
    </div>
    <div class="gender-box">
      <h3>Gender</h3>
      <div class="gender-option">
        <div class="gender">
          <input type="radio" id="check-male" name="gender" checked />
          <label for="check-male">male</label>
        </div>
        <div class="gender">
          <input type="radio" id="check-female" name="gender" />
          <label for="check-female">Female</label>
        </div>
        <div class="gender">
          <input type="radio" id="check-other" name="gender" />
          <label for="check-other">prefiero no decir</label>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="input-box">
        <label>Tipo Cuenta</label>
        <div class="select-box">
          <select name="tipo_cuenta" id="tip_cuenta">
              <option hidden value="0">Tipos</option>
              <option value="1">Individual</option>
              <option value="2">Conjunto</option>
              <option value="3">Corporativo</option>
          </select>
        </div>
      </div>
  
      <div class="input-box">
        <label># Cuenta</label>
        <input type="text" name="cuenta" id="cuenta" placeholder="# cuenta" readonly required />
      </div>
  
    </div>
    <button>Siguiente</button>
  </div>

  <div class="second form">
    <div class="column">
      <div class="input-box">
        <label># Cuenta</label>
        <input type="text" name="cuenta" id="numcuenta" placeholder="Ingrese el nombre" required />
      </div>
      <div class="input-box">
        <label>Tipo Cuenta</label>
        <input type="text" name="tipo_cuenta" id="nomcuenta" placeholder="Ingrese el apellido" required />
      </div>
    </div>

    <div class="column">
      <div class="input-box">
        <label>Saldo</label>
        <box-icon name='dollar'></box-icon>
        <input type="number" name="saldo" placeholder="Ingrese el nombre" required />
      </div>
      <div class="input-box">
        <label>Fecha Apertura</label>
        <input type="text" name="fecha" id="date" placeholder="Ingrese el apellido" required />
      </div>
    </div>
  </div>
  <button>Registrar</button>
</form>


<script>
  var today = new Date();
  let day = today.getDate();
  let month = today.getMonth() + 1;
  let year = today.getFullYear();


  let dateNow =document.querySelector("#date").value = (day + '/' + month + '/' + year);

  let date = '-'+today.getDate();
  const tipo_cli = document.querySelector("#tip_cuenta");
  console.log(tipo_cli);
  tipo_cli.addEventListener("change", () => {
    let valorOption =tipo_cli.values;
    var optionSelect =tipo_cli.options[tipo_cli.selectedIndex];
    if(tipo_cli.value == 1){
      let public = "0"+ 4 +"-";
      let cuenta = [];
      for (let i = 1; i<=5; i++){
        let random =Math.ceil(Math.random() * 9);
        cuenta.push(random);
      }
    cuenta.push(date);
    console.log(cuenta.join(''));
    let inputResult = document.querySelector("#cuenta").value = (public  + cuenta.join(''));
    let numCuenta = document.querySelector("#numcuenta").value = (public  + cuenta.join(''));
    let nomCuenta =document.querySelector("#nomcuenta").value = (optionSelect.text);

    }else if(tipo_cli.value == 2){
      let public = "0"+ 2 +"-";
      let cuenta = [];
      for (let i = 1; i<=5; i++){
      let random =Math.ceil(Math.random() * 9);
      cuenta.push(random);
      }
    cuenta.push(date);
    console.log(cuenta.join(''));
      let inputResult = document.querySelector("#cuenta").value = (public + cuenta.join('') );
      let numCuenta = document.querySelector("#numcuenta").value = (public  + cuenta.join(''));
      let nomCuenta =document.querySelector("#nomcuenta").value = (optionSelect.text);

    }else if(tipo_cli.value == 3){
      let public = "0"+ 3 +"-";
      let cuenta = [];
      for (let i = 1; i<=5; i++){
      let random =Math.ceil(Math.random() * 9);
      cuenta.push(random);
      }
    cuenta.push(date);
    console.log(cuenta.join(''));
      let inputResult = document.querySelector("#cuenta").value = (public + cuenta.join('') );
      let numCuenta = document.querySelector("#numcuenta").value = (public  + cuenta.join(''));
      let nomCuenta =document.querySelector("#nomcuenta").value = (optionSelect.text);

    }
  });
  cuenta = [inputResult];
  let cuentaUnica = cuenta;
</script>