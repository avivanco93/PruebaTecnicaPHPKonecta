<?php

include("conexion.php");
$con=conectar();


$id_producto=$_GET['id_producto'];
$sql="DELETE  FROM ventas WHERE id_producto='$id_producto'";



$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>
