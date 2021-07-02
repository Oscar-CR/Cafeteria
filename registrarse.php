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
    <title>Registrarse</title>
    <script>
        function alerta(){
            alert("Usuario creado exitosamente")
        }
    </script>
</head>

<body class="register-body">

    <main class="register-main">
        <div class="register-formulario">
            <div class="register-header">
                <h2>Registrarse</h2>
            </div>
            <form action="./registrar.php" method="POST">
                <p>Usuario</p>
                <input type="text" name="user" required placeholder="Ingrese un nombre de usuario">
                <br>
                <br>
                <p>Correo</p>
                <input type="email" name="email" placeholder="Ingrese su correo">
                <br>
                <br>
                <p>Contraseña</p>
                <input type="password" name="pass" required placeholder="Ingrese una contraseña">
                <br>
                <br>
                <p>Genero</p>
                <select name="genero" class="form-select form-select-lg mb-3" >
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    <option value="O">Otro</option>
                </select>
                <p>Pais</p>
                <select name="pais" class="form-select form-select-lg mb-3"  >
                    <option value="MEX">Mexico</option>
                    <option value="USA">Estados Unidos de America</option>
                    <option value="BZL">Brazil</option>
                    <option value="COL">Colombia</option>
                    <option value="PER">Peru</option>
                    <option value="HON">Honduras</option>
                    <option value="GUA">Guatemala</option>
                    <option value="CAN">Canada</option>
                    <option value="ESP">Espania</option>
                </select>
                <br>
                <button type="submit" name="submit" onclick="alerta()" class="btn btn-dark">INICIAR SESION</button>
                <br>
            </form>
        </div>
    </main>

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