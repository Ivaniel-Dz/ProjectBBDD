<form action="registrar.php" method="POST" class="form">
    <div class="form first">
    <div class="column">
        <div class="input-box">
            <label>Nombre Empresa</label>
            <input type="text" name="nombre" placeholder="Ingrese el nombre" required />
        </div>
        <div class="input-box">
            <label>Acrónimo</label>
            <input type="text" name="apellido" placeholder="Ingrese el apellido" required />
        </div>
    </div>

    <div class="column">
        <div class="input-box">
            <label>NIF</label>
            <input type="text" name="iden" placeholder="Ingrese la Identificación" required />
        </div>
        <div class="input-box">
            <label>E-mail</label>
            <input type="text" name="correo" placeholder="Enter email address" required />
        </div>
    </div>

    <div class="column">
        <div class="input-box">
            <label>Telefono</label>
            <input type="text" name="telefono" placeholder="Enter phone number" required />
        </div>
        <div class="input-box">
            <label>Dirección</label>
            <input type="text" placeholder="Ingrese la dirección" required />
        </div>
    </div>
    </div>

    <button>Siguiente</button>

    <div class="form second">

        <div class="column">
            <div class="input-box">
                <label>Tipo Cuenta</label>
                <div class="select-box">
                    <select name="tipo_cli" id="tipos">
                        <option hidden value="0">Elige</option>
                        <option value="2">Corporativo</option>
                        
                    </select>
                </div>
            </div>
            <div class="input-box">
                <label>Tipo Empresa</label>
                <div class="select-box">
                    <select name="tipo_empr" id="tipo_empr">
                        <option hidden value="0">Elige</option>
                        <option value="2">Gubernamental</option>
                        <option value="3">Privado</option>
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="input-box">
                <label>Servicio</label>
                <input type="text" name="servicio" value="Ahorro" readonly required />
            </div>
            <div class="input-box">
                <label>Saldo</label>
                <input type="number" name="saldo" placeholder="ingrese el monto" required />
            </div>
        </div>
        <div class="column">
            <div class="input-box">
                <label># Cuenta</label>
                <input type="text" name="cuenta" id="cuenta" placeholder="# cuenta" readonly required />
            </div>
            <div class="input-box">
                <label>Fecha Apertura</label>
                <input type="text" name="fecha" id="fecha" readonly required />
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

  let dateNow = document.querySelector("#fecha").value = (day + '/' + month + '/' + year);
  console.log(dateNow);

  let date = "-2022";
  const tipo_cli = document.querySelector("#tipo_empr");
  console.log(tipo_cli);
  tipo_cli.addEventListener("change", () => {
  let valorOption =tipo_cli.values;

  var optionSelect =tipo_cli.options[tipo_cli.selectedIndex];
  if(tipo_cli.value == "2"){
    let public = "0"+ 2 +"-";
    let cuenta = [];
    for (let i = 1; i<=5; i++){
  let random =Math.ceil(Math.random() * 9);
  cuenta.push(random);
  }
  cuenta.push(date);
  console.log(cuenta.join(''));


      let inputResult = document.querySelector("#cuenta").value = (public + cuenta.join('') );
      }else if(tipo_cli.value == "3"){
      let public = "0"+ 3 +"-";
      let cuenta = [];
      for (let i = 1; i<=5; i++){
    let random =Math.ceil(Math.random() * 9);
    cuenta.push(random);
  }
    cuenta.push(date);
    console.log(cuenta.join(''));
      let inputResult = document.querySelector("#cuenta").value = (public + cuenta.join('') );
    }
  });
</script> 