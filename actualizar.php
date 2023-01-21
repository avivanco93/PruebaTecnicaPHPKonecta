<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM productos WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre Producto" value="<?php echo $row['nombre_producto']  ?>">
                                <input type="text" class="form-control mb-3" name="referencia" placeholder="Referencia" value="<?php echo $row['referencia']  ?>">
                                <input type="number" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                <input type="number" class="form-control mb-3" name="peso" placeholder="Peso" value="<?php echo $row['peso']  ?>">
                                <input type="text" class="form-control mb-3" name="categoria" placeholder="categoria" value="<?php echo $row['categoria']  ?>">
                                <input type="number" class="form-control mb-3" name="stock" placeholder="stock" value="<?php echo $row['stock']  ?>">
                                <input type="date" class="form-control mb-3" name="fecha_creacion" placeholder="Fecha de Creacion" value="<?php echo $row['fecha_creacion']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>