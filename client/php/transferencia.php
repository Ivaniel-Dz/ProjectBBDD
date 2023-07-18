<?php 

?>

<form action="registra-transf.php" method="POST" class="form">
  <header>Transferencia</header>
  <h3>Sus de Datos</h3>
  <div class="form first">
    <div class="column">
      <div class="input-box">
        <label># Cuenta</label>
        <input type="text" name="nombre" readonly  />
      </div>
      <div class="input-box">
        <label>Monto Disponible</label>
        <input type="text" name="apellido" readonly/>
      </div>
      <div class="input-box">
        <label>Tipo Cuenta</label>
        <input type="text" name="iden" readonly />
      </div>
    </div>
    <br>
    <h3>Datos de Destino</h3>
    <div class="column">
      <div class="input-box">
          <label># Cuenta</label>
          <input type="text" name="cuenta" placeholder="Ingrese el # cuenta"  />
      </div>
      <div class="input-box">
        <label>Nombre Cuenta </label>
        <input type="text" name="nombre" placeholder="Ingrese nombre cuenta"  />
      </div>
      <div class="input-box">
        <label>Monto a Transfererir</label>
        <input type="number" name="monto" placeholder="Ingrese el monto a pagar"/>
      </div>
    </div>

    <div class="column">
      <div class="input-box">
          <label>Descripcion</label>
          <textarea class="textarea" name="descripcion" style="resize: none;" rows="3" cols="30" placeholder="Ingrese la descripcion"></textarea>
      </div>
      <div class="input-box">
          <label>Fecha</label>
          <input type="date" name="fecha" placeholder="Ingrese la provincia"  />
      </div>
      <div class="input-box">
        <label>Hora</label>
        <input type="time" name="hora" placeholder="Ingrese el distrito"  />
      </div>
    </div>
    </div>
    <button>Enviar</button>
</form>

