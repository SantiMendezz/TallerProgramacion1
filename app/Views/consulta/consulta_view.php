<?php 
    include("app/Models/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM consultas";
    $query=mysqli_query($con,$sql);

?>

<div class="container mt-5 centrar-texto" style="higth: 100rem;">
    <h1 class="centrar-texto pb-2 pt-3">Consultas</h1>
            <div class="col-md-12 ">
                <table class="table table table-dark table-striped" >
                            <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID Contacto</th>
                                        <th>Nombre y Apellido</th>
                                        <th>Telefono</th>
                                        <th>E-mail</th>
                                        <th>Mensaje</th>
                                    </tr>
                            </thead>

                            <tbody>
                                <?php
                                    while($row=mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <th><?php  echo $row['id_contacto']?></th>
                                        <th><?php  echo $row['nya']?></th>
                                        <th><?php  echo $row['telefono']?></th>
                                        <th><?php  echo $row['email']?></th>
                                        <th><?php  echo $row['mensaje']?></th>
                                    </tr>
                                <?php 
                                        }
                                ?>
                        </tbody>
                </table>
         </div>
</div>