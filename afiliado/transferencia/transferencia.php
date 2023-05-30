<?php include("../../recursos/header/headerAfiliado.php"); ?>  

<div class="cuerpo">
    <div class="contenedor">
        <header>Transferencia</header>

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

                <div class="details ID">
                    <span class="title">Datos del Recibidor</span>

                    <div class="fields">
                        <div class="input-field">
                            <label># Cuenta</label>
                            <input type="text" placeholder="Ingrese el número de la cuenta" required>
                        </div>

                        <div class="input-field">
                            <label>Nombre Cuenta</label>
                            <input type="text" placeholder="Nombre de la cuenta" required>
                        </div>

                        <div class="input-field">
                            <label>Apellido Cuenta</label>
                            <input type="text" placeholder="Apellido de la cuenta" required>
                        </div>

                        <div class="input-field">
                            <label>Monto a enviar</label>
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
                            Enviar <i class="fas fa-arrow-alt-circle-right"></i>
                        </span>
                        
                    </div>        
                </button>

            </div>
        </form>
    </div>
</div>
<br>
 <?php include("historialTrans.php"); ?>  
</body>
</html>