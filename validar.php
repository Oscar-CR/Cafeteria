<?php
    include('sql.php');
    $con=conectar();
   
	$user =$_POST['user'];
    $pass =$_POST['pass'];

    $sql = "SELECT nombre FROM usuarios where nombre='$user' and pass='$pass'";
    $query=mysqli_query($con,$sql);


    $row = mysqli_fetch_object($query);
    if(($row->nombre)==$user){
        Header("Location: tienda.php");
        mysqli_close($con);
    }else{        
        Header("Location: login.php");
        mysqli_close($con);
    }

   
?>