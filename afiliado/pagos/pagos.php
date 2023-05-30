<?php include("../../recursos/header/headerAfiliado.php"); ?>  

<div class="cuerpo">
    <div class="contenedor">
        <header>Pago</header>

        <form action="../historial/historial.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Sus Datos</span>

                    <div class="fields">
                        <div class="input-field">
                            <label># Cuenta</label>
                            <span>65874</span>
                        </div>

                        <div class="input-field">
                            <label>Saldo Total</label>
                            <span>$ 1500.00</span>
                        </div>

                        <div class="input-field">
                            <label>Tipo Cuenta</label>
                            <span>AHORRO</span>
                        </div>
                </div>
<!-- ----------------------------------------------------------------------------- -->
                <div class="details ID">
                    <span class="title">Datos del Pago</span>

                    <div class="fields">
                        <div class="input-field">
                            <label># Cuenta</label>
                            <input type="text" placeholder="Ingrese el número de la cuenta" required>
                        </div>

                        <div class="input-field">
                            <label>Servicio</label>
                            <select name="" id="">
                                <option value="">Electricidad</option>
                                <option value="">Agua</option>
                                <option value="">Internet</option>
                                <option value="">Telefonía</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Apellido Cuenta</label>
                            <input type="text" placeholder="Apellido de la cuenta" required>
                        </div>

                        <div class="input-field">
                            <label>Monto a pagar</label>
                            <input type="number" placeholder="Ingrese el monto a enviar" required>
                        </div>

                        <div class="input-field">
                            <label>Fecha</label>
                            <input type="date" placeholder="Ingrese la fecha de hoy" required>
                        </div>

                        <div class="input-field">
                            <label>Descripcion</label>
                            <input type="text" placeholder="Ingrese la descripcion">
                        </div>
                    </div>    
                </div> 

                <button class="nextBtn">
                    <div class="btnText">
                        <span>
                            Pagar <i class="fas fa-arrow-alt-circle-right"></i>
                        </span>
                        
                    </div>        
                </button>

            </div>
        </form>
    </div>
</div>
<br>
 <?php include("historialPago.php"); ?>  
</body>
</html>