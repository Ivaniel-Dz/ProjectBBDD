<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="tabs">
                <ul>
                    <li class="sign_in_li">Afiliado</li>
                    <li class="sign_up_li">Administrador</li>
                    <li class="sign_dep_li">Deposito/Retiro</li>
                </ul>
            </div>
        
            <div class="sign_in">
                <div class="icon-button"> 
                    <span>INICIA SESION</span>
                </div>
                <div class="input_field">
                    <input type="text" placeholder="Cédula" class="input">
                </div>
                <div class="input_field">
                    <input type="password" placeholder="Contraseña" class="input">
                </div>
                <div class="btn"><a href="afiliado/historial/historial.php">Ingresar</a></div>
                
            </div>
            
            <div class="sign_up">
                <div class="icon-button"> 
                    <span>INICIA SESION</span>
                </div>
                <div class="input_field">
                    <input type="text" placeholder="Cédula" class="input">
                </div>
                <div class="input_field">
                    <input type="password" placeholder="Contraseña" class="input">
                </div>
                <div class="btn"><a href="pages/inicio/Inicio.php">Ingresar</a></div>
            </div>

            <div class="sign_dep">
                <div class="icon-button"> 
                    <span>INICIA SESION</span>
                </div>
                <div class="input_field">
                    <input type="text" placeholder="Cédula" class="input">
                </div>
                <div class="input_field">
                    <select name="" id="" class="select">
                        <option value="">Depósito</option>
                        <option value="">Retiro</option>
                    </select>
                </div>
                <div class="btn"><a href="dep-ret/deposito/deposito.php">Ingresar</a></div>
            </div>   
        </div>
    </div>
    <script src="js/form.js"></script>
</body>

</html>