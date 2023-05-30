<?php include("../../recursos/header/header.php"); ?> 


<div class="cuerpo">
    <div class="contenedor">
        <header>Actualizar Afiliado</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Actualizar Datos</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" placeholder="Ingrese el nombre" required>
                        </div>

                        <div class="input-field">
                            <label>Apellido</label>
                            <input type="text" placeholder="Ingrese el apellido" required>
                        </div>

                        <div class="input-field">
                            <label>Cédula</label>
                            <input type="text" placeholder="Ingrese la cédula" required>
                        </div>

                        <div class="input-field">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" placeholder="Ingrese la fecha de nacimiento" required>
                        </div>

                        <div class="input-field">
                            <label>Correo Electronico</label>
                            <input type="mail" placeholder="Ingrese el correo" required>
                        </div>

                        <div class="input-field">
                            <label>N° Celular</label>
                            <input type="number" placeholder="Ingrese el númeo celular" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" placeholder="Enter ID number" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Authority</label>
                            <input type="text" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Issued State</label>
                            <input type="text" placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" placeholder="Enter your issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Expiry Date</label>
                            <input type="date" placeholder="Enter expiry date" required>
                        </div>
                    </div>    
                </div> 

                <button class="nextBtn">
                    <div class="btnText">
                        <span>
                            Siguiente <i class="fas fa-arrow-alt-circle-right"></i>
                        </span>
                        
                    </div>        
                </button>

            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Detalles de Dirección</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>País</label>
                            <input type="text" placeholder="Permanent or Temporary" required>
                        </div>

                        <div class="input-field">
                            <label>Provincia</label>
                            <input type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>Distrito</label>
                            <input type="text" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>Corregimiento</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>Calle</label>
                            <input type="number" placeholder="Enter block number" required>
                        </div>

                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" placeholder="Enter ward number" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Detalle del Beneficiario</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Apellido</label>
                            <input type="text" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Cédula</label>
                            <input type="text" placeholder="Enter grandfther name" required>
                        </div>

                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Apellido</label>
                            <input type="text" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Cédula</label>
                            <input type="text" placeholder="Enter grandfther name" required>
                        </div>

                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <span class="btnText">Regresar</span>
                        </div>
                        
                        <button>
                            <span class="btnText">Añadir</span>
                            <i class="fas fa-check-circle"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
</div>

<script>
    const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));

</script>
</body>
</html>