<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_array($query);

    
           //Realizar una consulta que permita conocer cuál es el producto más vendido.
           //SELECT id_producto, MAX(cantidad_producto)
          //FROM ventas;

       
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
    <h1>Realizar Ventas</h1>

    <div class="container mt-8">
                    <div class="row"> 
                        
                        
                        <div class="col-md-3">
                            <h1>Realiza venta</h1>
                                <form action="insertar_venta.php" method="POST">
                                    <input type="number" class="form-control mb-3" name="id_producto" placeholder="ID Producto venta:">
                                    <input type="number" class="form-control mb-3" name="cantidad_producto" placeholder="Cantidad">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <th><a href="productos.php" class="btn btn-danger">Regresar</a></th> 
                                </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID Producto</th>
                                        <th>Cantidad Venta</th>
                                    
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                                  
                                            while($row=mysqli_fetch_array($query)){
                                                
                                        ?>
                                      
                                            <tr>
                                            <th><?php  echo $row['id_producto']?></th>    
                                                <?php
                                                    //$sql = "UPDATE tutabla SET stock_actual = stock_actual - " . $_REQUEST["unidades"] . " WHERE id_pro = " . $_REQUEST["id_pro"];
                                                   
                                                    
                                                ?>
                                                
                                                <th><?php  echo $row['cantidad_producto']?></th>
                                                <th><a href="actualizarVenta.php?id_producto=<?php echo $row['id_producto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete_venta.php?id_producto=<?php echo $row['id_producto'] ?>" class="btn btn-danger">Eliminar</a></th>                                 
                                            </tr>

                                        <?php
                                           
                                            }

                                        //$this -> con->ejecutar($sql);
                                        //$this-> actualizarStock($p->$id_producto, $p->cantidad_producto);
                                        ?>
                                          
                                </tbody>
                            </table>
                        </div>
                     
                    </div>  
            </div>
            <?php    
            //Descontar stock       
            function actualizarStock($id_producto, $stockADescontar){
                $sql = "SELECT cantidad_producto from ventas where id_producto = $id_producto";
                $res = $this-> con -> ejecutar($sql);

                $stockActual = 0;
                if($reg = mysql_fetch_array($res)){
                    $stockActual = $reg[0];
                }

                $stockActual -= $stockADescontar;

                $sql = "update ventas set cantidad_ventas = $stockActual where = id_producto = $id_producto";
                $this->con->ejecutar($sql);
            }                         
                                            

         
    ?>
            
     
</body>
</html>y