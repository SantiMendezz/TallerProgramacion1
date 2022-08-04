<?php 
    include("app/Models/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas_detalle";
    $query=mysqli_query($con,$sql);

?>

<div class="container mt-5 centrar-texto" style="higth: 100rem;">
    <h1 class="centrar-texto pb-2 pt-3">Ventas Detalle</h1>
            <div class="col-md-12 ">
                <table class="table table table-dark table-striped" >
                            <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Venta ID</th>
                                        <th>Producto ID</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Total</th>
                                    </tr>
                            </thead>

                            <tbody>
                                <?php
                                    while($row=mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <th><?php  echo $row['id']?></th>
                                        <th><?php  echo $row['venta_id']?></th>
                                        <th><?php  echo $row['producto_id']?></th>
                                        <th><?php  echo $row['cantidad']?></th>
                                        <th><?php  echo $row['precio']?></th>
                                        <th><?php  echo $row['total']?></th>
                                    </tr>
                                <?php 
                                        }
                                ?>
                        </tbody>
                </table>
         </div>
</div>