<?php
    include('sql.php');
    $con=conectar();

    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $genero=$_POST['genero'];
    $pais=$_POST['pais'];

    $sql="INSERT INTO usuarios (nombre,correo,pass,genero,pais) VALUES ('$user','$email','$pass','$genero','$pais')";
    $query=mysqli_query($con,$sql);


    if($query){
        Header("Location: login.php");
    }else{
        Header("Location: registrarse.php");
    }

?>