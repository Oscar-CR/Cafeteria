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
    <title>Contacto</title>
    <script>
        function alerta() {
            alert("Mensaje enviado");
        }
    </script>
</head>

<body class="about-body">
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
                    <li> <a href="https://oscar-cr.github.io/Cafeteria/mapa.html"> <img src="https://img.icons8.com/ios-filled/30/ffffff/treasure-map.png" /><b>Mapa del sitio</b> </a></li>
                </ul>
            </div>
            <script>
                function mensaje() {
                    alert("¡Mensaje enviado, gracias por su opinion!")
                }
            </script>

        </header>
    </div>
    <section class="separador"></section>

    <section class="contacto-formulario">
        <div class="formulario">
            <h2><b>¡Escríbenos!</b></h2>
            <form action="./mensaje.php" method="POST">

                <p>Numero o correo de contacto</p>
                <input class="form-control" name="contacto" type="text" placeholder="Escribe un correo o numero de telefono para contactarte">
                <br>
                <p>Mensaje</p>
                <textarea class="form-control" name="mensaje" cols="30" rows="10"></textarea>
                <br>
                <button class="btn btn-dark" type="submit" name="submit" onclick="alerta()">ENVIAR</button>
            </form>
        </div>

        <div class="mapa">
            <h2><b>¡Visítanos!</b></h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15040.783504835685!2d-99.187569!3d19.5332024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x961cb1dafd5d1266!2sTecNM%20-%20Campus%20Tlalnepantla!5e0!3m2!1ses-419!2smx!4v1625082839663!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <label>Av. Instituto Tecnológico s/n, La Comunidad, 54070 Tlalnepantla de Baz, Méx.</label>
        </div>
    </section>

    <section class="separador"></section>
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