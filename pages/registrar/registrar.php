<?php include("../../recursos/header/header.php"); ?>  


<div class="cuerpo">
    <div class="contenedor">
        <header>Nuevo Afiliado</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Registrar al Afiliado</span>

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
                            <input type="text" placeholder="Ingrese el correo" required>
                        </div>

                        <div class="input-field">
                            <label>N° Celular</label>
                            <input type="number" placeholder="Ingrese el númeo celular" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Cuenta / Profesión</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Profesión</label>
                            <input type="text" placeholder="Ingrese la profesión" required>
                        </div>

                        <div class="input-field">
                            <label>Tipo Empleo</label>
                            <select name="" id="">
                                <option value="">Seleccione</option>
                                <option value="">-Privado</option>
                                <option value="">-Publico</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Tarjeta/Libreta</label>
                            <select name="" id="">
                                <option value="">Seleccione</option>
                                <option value="">Visa</option>
                                <option value="">Clave</option>
                                <option value="">Libreta</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Número Cuenta</label>
                            


                            <input type="number" placeholder="" required readonly>
                        </div>

                        <div class="input-field">
                            <label>Tipo Cuenta</label>
                            <select name="" id="">
                                <option value="">Seleccione</option>
                                <option value="">Ahorro</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Tipo Ahorro</label>
                            <select name="" id="">
                                <option value="">Seleccione</option>
                                <option value="">Prestamo Auto</option>
                                <option value="">Préstamo Personal</option>
                                <option value="">Préstamo Médico</option>
                                <option value="">Préstamo Vivienda</option>
                            </select>
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
                            <input type="text" placeholder="Ingrese el país" required>
                        </div>

                        <div class="input-field">
                            <label>Provincia</label>
                            <input type="text" placeholder="Ingrese la provincia" required>
                        </div>

                        <div class="input-field">
                            <label>Distrito</label>
                            <input type="text" placeholder="Ingrese el distrito" required>
                        </div>

                        <div class="input-field">
                            <label>Corregimiento</label>
                            <input type="text" placeholder="Ingrese el corregimiento" required>
                        </div>

                        <div class="input-field">
                            <label>Calle</label>
                            <input type="number" placeholder="Ingrese la Calle" required>
                        </div>

                        <div class="input-field">
                            <label># Casa</label>
                            <input type="number" placeholder="Ingrese el # de Casa" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Detalle del Beneficiario</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" placeholder="Nombre del beneficiado" required>
                        </div>

                        <div class="input-field">
                            <label>Apellido</label>
                            <input type="text" placeholder="Apellido del beneficiado" required>
                        </div>

                        <div class="input-field">
                            <label>Cédula</label>
                            <input type="text" placeholder="Cédula del beneficiado" required>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>Nombre</label>
                                <input type="text" placeholder="Nombre del beneficiado" required>
                            </div>

                            <div class="input-field">
                                <label>Apellido</label>
                                <input type="text" placeholder="Apellido del beneficiado" required>
                            </div>

                            <div class="input-field">
                                <label>Cédula</label>
                                <input type="text" placeholder="Cédula del beneficiado" required>
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