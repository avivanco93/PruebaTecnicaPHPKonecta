<?php

include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$cantidad_producto=$_POST['cantidad_producto'];


$sql="UPDATE ventas SET id_producto='$id_producto',cantidad_producto='$cantidad_producto' WHERE id_producto='$id_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>