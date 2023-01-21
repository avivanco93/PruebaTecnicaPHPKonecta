<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre_producto=$_POST['nombre_producto'];
$referencia=$_POST['referencia'];
$precio=$_POST['precio'];
$peso=$_POST['peso'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$fecha_creacion=$_POST['fecha_creacion'];


$sql="INSERT INTO productos VALUES('$id','$nombre_producto','$referencia','$precio','$peso','$categoria','$stock','$fecha_creacion')";
$query= mysqli_query($con,$sql);



if($query){
    Header("Location: productos.php");
    
}else {
}
?>