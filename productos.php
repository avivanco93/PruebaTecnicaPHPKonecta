<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);

    
//Realizar una consulta que permita conocer cuál es el producto que más stock tiene


//select max(stock) FROM productos;
    
    $row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>STOCK INVENTARIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                    <menu>
                    <a href="venta.php" class="btn btn-info">Ventas</a>
                        
                    </menu>
                        
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                     <input type="number" class="form-control mb-3" name="id" placeholder="ID:">
                                    <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre Producto">
                                    <input type="text" class="form-control mb-3" name="referencia" placeholder="Referencia">
                                    <input type="number" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="number" class="form-control mb-3" name="peso" placeholder="Peso">
                                    <input type="text" class="form-control mb-3" name="categoria" placeholder="Categoria">
                                    <input type="number" class="form-control mb-3" name="stock" placeholder="Cantidad en bodega">
                                    <input type="date" class="form-control mb-3" name="fecha_creacion" placeholder="Fecha Creacion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre Producto</th>
                                        <th>Referencia</th>
                                        <th>Precio</th>
                                        <th>Peso</th>
                                        <th>Categoria</th>
                                        <th>Stock</th>
                                        <th>Fecha de creacion</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['id']?></th>    
                                                <th><?php  echo $row['nombre_producto']?></th>
                                                <th><?php  echo $row['referencia']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['categoria']?></th>
                                                <th><?php  echo $row['stock']?></th>
                                                <th><?php  echo $row['fecha_creacion']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>

           
    </body>
</html>