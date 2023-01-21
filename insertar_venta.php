<?php
include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$cantidad_producto=$_POST['cantidad_producto'];



$sql="INSERT INTO ventas VALUES('$id_producto','$cantidad_producto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>