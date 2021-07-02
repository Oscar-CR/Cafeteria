<?php
include("sql.php");
$con = conectar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inicio</title>
</head>

<body class="tienda-body">

    <div class="header-fixed">
        <header>
            <div class="header-img">
                <a href="./tienda.php"> <img src="./img/logoCafeteria.jpg" alt="logo"> </a>
            </div>
            <div class="header-opt">
                <ul>
                <li> <a href="./tienda.php"> <img src="https://img.icons8.com/ios-filled/30/ffffff/online-store.png" /> <b>Tienda</b> </a> </li>
                    <li> <a href="./acerca.html"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/guest-male.png" /> <b>Acerca de</b> </a> </li>
                    <li> <a href="./contacto.php"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/mail-account.png" /><b>Contacto</b> </a> </li>
                    <li> <a href="./mapa.html"> <img src="https://img.icons8.com/ios-filled/30/ffffff/treasure-map.png" /><b>Mapa del sitio</b></a> </li>
                </ul>
            </div>
        </header>
    </div>
    <section class="separador"></section>

    <section class="anuncio">
        <h3>¡50% de descuento en tu primer compra!</h3>
    </section>

    <section class="tienda-promo">
       <div class="producto">
            <div class="img-contenedor" >
               <img src="https://images.unsplash.com/photo-1504753793650-d4a2b783c15e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=333&q=80" alt="img">
           </div>
           <p>Producto1</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsum, quam, sit minus nam 
           </p>
           <label >Precio unitario: </label>
           <input type="text"  readonly value="$100">
           <br>
           <br>
           
           <button class="btn btn-warning" > COMPRAR
           </button>
       </div>
       <div class="producto">
           <div class="img-contenedor" >
               <img src="https://images.unsplash.com/photo-1527156231393-7023794f363c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=354&q=80" alt="logo">
           </div>

           <p>Producto2</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsum, quam, sit minus nam 
           </p>
           <label >Precio unitario: </label>
           <input type="text"  readonly value="$70">
           <br>
           <br>
           
           <button class="btn btn-warning" > COMPRAR
           </button>
       </div>
       <div class="producto">
            <div class="img-contenedor" >
               <img src="https://images.unsplash.com/photo-1593443320739-77f74939d0da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=376&q=80" alt="img">
           </div>
           <p>Producto3</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsum, quam, sit minus nam 
           </p>
           <label >Precio unitario: </label>
           <input type="text"  readonly value="$90">
           <br>
           <br>
           
           <button class="btn btn-warning" > COMPRAR
           </button>
       </div>
       <div class="producto">
            <div class="img-contenedor" >
               <img src="https://images.unsplash.com/photo-1558122104-355edad709f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="img">
           </div>
           <p>Producto4</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsum, quam, sit minus nam 
           </p>
           <label >Precio unitario: </label>
           <input type="text"  readonly value="$55">
           <br>
           <br>
           
           <button class="btn btn-warning" > COMPRAR
           </button>
       </div>
       <div class="producto">
            <div class="img-contenedor" >
               <img src="https://images.unsplash.com/photo-1544390439-b970ba140d45?ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NTl8OTI5NjA0fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="img">
           </div>
           <p>Producto5</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsum, quam, sit minus nam 
           </p>
           <label >Precio unitario: </label>
           <input type="text"  readonly value="$120">
           <br>
           <br>
           
           <button class="btn btn-warning" > COMPRAR
           </button>
       </div>
       <div class="producto">
            <div class="img-contenedor" >
               <img src="https://images.unsplash.com/photo-1582202737800-8ab9a8cc6e6a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80" alt="img">
           </div>
           <p>Producto6</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsum, quam, sit minus nam 
           </p>
           <label >Precio unitario: </label>
           <input type="text"  readonly value="$80">
           <br>
           <br>
           
           <button class="btn btn-warning" > COMPRAR
           </button>
       </div>

    </section>

    <section class="footer">
        <div class="footer-text">
            <p> <b> Derechos Reservados, sitio creado con fines educativos. Desarrollado por Oscar Chavez Rosales</b> </p>
            <a href="https://github.com/Oscar-CR"><img src="https://img.icons8.com/ios-filled/35/ffffff/github-2.png" alt="github" /></a>
            <a href="https://twitter.com/7CoffeShop1"><img src="https://img.icons8.com/ios-filled/35/ffffff/twitter-squared.png" alt="twitter" /></a>
            <a href="https://www.instagram.com/7coffee_shop/"><img src="https://img.icons8.com/ios-filled/35/ffffff/instagram-new.png" alt="instagram" /></a>
            <a href="https://www.facebook.com/Coffee-Shop-104113535271574"><img src="https://img.icons8.com/ios-filled/35/ffffff/facebook--v1.png" alt="facebook" /> </a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>