<?php
function conectar(){
    $host="localhost:0428";
    $user="root";
    $pass="";

    $bd="stock";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>