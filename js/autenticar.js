function validar(){
    let us = document.getElementById("usuario").value;
    let pa=document.getElementById("pass").value;
    window.location= 'tienda.php';
    if(us=="oscar chavez" && pa=="Tec21proSP25"){
        window.location= 'tienda.php';
    }else{
        window.location='tienda.php';
    }

}
