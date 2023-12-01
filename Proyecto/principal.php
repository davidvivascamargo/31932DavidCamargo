<?php
include "conexion.php";

$userName = $_POST["userName"];//HuronMarron
$password = $_POST["password"];//123456

$q = "SELECT COUNT(*) AS contar FROM registros WHERE userName= '$userName' AND password = '$password'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    echo "Ingresaste";
    header("location: ./dashboard.php");
}else{

        header("location: ./index.php");

echo "error";
   
}


?>