<?php
    include('sql.php');
    $con=conectar();

    $contacto=$_POST['contacto'];
    $mensaje=$_POST['mensaje'];
    
    $sql="INSERT INTO mensajes (contacto,mensaje) VALUES ('$contacto','$mensaje')";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contacto.php");
    }else{
        Header("Location: contacto.php");
    }

?>