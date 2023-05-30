<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../css/afiliado/header.css">

    <link rel="stylesheet" href="../../css/transferencia/transferencia.css">
    <link rel="stylesheet" href="../../css/transferencia/historialTranfs.css">

    <link rel="stylesheet" href="../../css/pago/pago.css">
    <link rel="stylesheet" href="../../css/pago/historialpago.css">

    <link rel="stylesheet" href="../../css/historial.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   
    <title>Afiliado</title>
</head>
<body>
<div class="side-menu">
    <div class="brand-name">
        <h2>Cooperativa Anmar</h2>
    </div>
    <a href=""></a>
    <ul>
        <li>
            <a href="../../afiliado/historial/historial.php"><i class="fas fa-history">&nbsp;<span> Historial</span></i></a>
            
        </li>
        <li> 
            <a href="../../afiliado/transferencia/transferencia.php"><i class="fas fa-exchange-alt">&nbsp;<span> Transferencia</span></i></a>
        </li>
        <li>
            <a href="../../afiliado/pagos/pagos.php"><i class="fas fa-hand-holding-usd">&nbsp;<span> Pagos</span></i></a>
        </li>
    </ul>
</div> 

<div class="container">
    <div class="header">
        <div class="nav">

                <div class="search">
                    <input type="text" name="" id="" placeholder="Buscar...">
                    <button type="submit">
                        <img src="../../img/search.svg" alt="">
                    </button>
                </div>

                <div class="user">
                    <a href="../../afiliado/pagos/pagos.php" class="btn">
                        <i class="fas fa-hand-holding-usd">&nbsp; <span>Pagar</span></i>
                    </a>
                    
                    <div class="admin">
                        User <i class="fas fa-user-shield"></i>
                    </div>
                     
                </div>
                <!-- Boton configuración -->
            
        </div>
        
    </div>
</div>

 <nav>
                <div class="content">
                    <div class="img-case">
                        <i class="fas fa-cog"></i>                
                    </div>
                    <span style="--i:5;">
                        <a href="../../index.php">
                        <i class="fas fa-sign-out-alt">&nbsp;<span>Salir</span></i></a>
                    </span>
                </div>
            </nav>   
  

<script>

  // getting HTML elements
  const nav = document.querySelector("nav"),
        toggleBtn = nav.querySelector(".img-case");

    toggleBtn.addEventListener("click" , () =>{
      nav.classList.toggle("open");
    });

  // js code to make draggable nav
  function onDrag({movementY}) { //movementY gets mouse vertical value
    const navStyle = window.getComputedStyle(nav), //getting all css style of nav
          navTop = parseInt(navStyle.top), // getting nav top value & convert it into string
          navHeight = parseInt(navStyle.height), // getting nav height value & convert it into string
          windHeight = window.innerHeight; // getting window height

    nav.style.top = navTop > 0 ? `${navTop + movementY}px` : "1px";
    if(navTop > windHeight - navHeight){
      nav.style.top = `${windHeight - navHeight}px`;
    }
  }

  //this function will call when user click mouse's button and  move mouse on nav
  nav.addEventListener("mousedown", () =>{
    nav.addEventListener("mousemove", onDrag);
  });

  //these function will call when user relase mouse button and leave mouse from nav
  nav.addEventListener("mouseup", () =>{
    nav.removeEventListener("mousemove", onDrag);
  });
  nav.addEventListener("mouseleave", () =>{
    nav.removeEventListener("mousemove", onDrag);
  });

</script> 
