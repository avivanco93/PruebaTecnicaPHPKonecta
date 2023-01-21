<?php 
    include("conexion.php");
    $con=conectar();

   $id_producto=$_GET['id_producto'];

   $sql="SELECT * FROM ventas WHERE id_producto='$id_producto'";
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
        <title>Actualizar Ventas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update_venta.php" method="POST">
                    
                                <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']  ?>">
                                <h2>No se puede editar id productos por ser unicos</h2>
                                <h3>No repetir id</h3>


                                
                               <input type="text" class="form-control mb-3" name="id_producto" placeholder="Id Producto" value="<?php echo $row['id_producto']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidad_producto" placeholder="Cantidad producto" value="<?php echo $row['cantidad_producto']  ?>">


                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>