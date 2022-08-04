<!-- Informacion se host, user y root se encuentra en la parte de privilegios de PHP MyAdmin-->
<!-- La con inicia la conexion y la conecta con la base de datos bd y retorna la conexion -->
<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="santiago";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>