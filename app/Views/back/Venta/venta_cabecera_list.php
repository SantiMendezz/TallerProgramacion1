<?php 
    include("app/Models/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas_cabecera";
    $query=mysqli_query($con,$sql);

?>

<div class="container mt-5 centrar-texto" style="higth: 100rem;">
    <h1 class="centrar-texto pb-2 pt-3">Ventas</h1>
            <div class="col-md-12 ">
                <table class="table table table-dark table-striped" >
                            <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha</th>
                                        <th>Usuario ID</th>
                                        <th>Total Venta</th>
                                    </tr>
                            </thead>

                            <tbody>
                                <?php
                                    while($row=mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <th><?php  echo $row['id']?></th>
                                        <th><?php  echo $row['fecha']?></th>
                                        <th><?php  echo $row['usuario_id']?></th>
                                        <th><?php  echo $row['total_venta']?></th>
                                    </tr>
                                <?php 
                                        }
                                ?>
                        </tbody>
                </table>
         </div>
</div>