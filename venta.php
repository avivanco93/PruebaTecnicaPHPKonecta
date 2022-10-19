<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_array($query);

    
           //Realizar una consulta que permita conocer cuál es el producto más vendido.
           //SELECT MAX(cantidad_producto) FROM ventas;
    ?>

    <?php                                    
         function actualizaStock($id_producto, $stockADescontar){
             $query = "select stock from productos where id_producto = $id";
             $res = $this->con->ejecutar($query);
             
             $stockActual= 0;
             if($reg = mysql_fetch_array($res)){
                $stockActual = $reg[0];
             }

             $stockActual -= $stockADescontar;

             $query = "update producto set stock = $stockActual where id = $id_producto";
             $this->con->ejecutar($query);
        }
        ?>
            

<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    <title>Ventas</title>
</head>
<body>
    <h1>Ventas</h1>

    <div class="container mt-8">
                    <div class="row"> 
                        
                        
                        <div class="col-md-3">
                            <h1>Realiza venta</h1>
                                <form action="insertar_producto.php" method="POST">
                                    <input type="number" class="form-control mb-3" name="id_producto" placeholder="ID Producto venta:">
                                    <input type="number" class="form-control mb-3" name="cantidad_producto" placeholder="Cantidad">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Cantidad Venta</th>
                                    
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['id_producto']?></th>    
                                                <th><?php  echo $row['cantidad_producto']?></th> 
                                                                                     
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