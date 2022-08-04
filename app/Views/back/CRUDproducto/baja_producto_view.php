<?php 
    include("app/Models/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);

?>

<div class="container mt-5 centrar-texto" style="higth: 100rem;">
    <h1 class="centrar-texto pb-2 pt-3">Lista Productos Eliminados</h1>
            <div class="col-md-12 ">
                <table class="table table table-dark table-striped" >
                            <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre Prod</th>
                                        <th>Precio</th>
                                        <th>Precio Venta</th>
                                        <th>Stock</th>
                                        <th>Eliminado</th>
                                        <th>Imagen</th>
                                        <th>Opciones</th>
                                    </tr>
                            </thead>

                            <tbody>
                                <?php
                                    while($row=mysqli_fetch_array($query)){
                                        if(($row['eliminado']) == 'SI') {
                                ?>
                                    <tr>
                                        <th><?php  echo $row['id']?></th>
                                        <th><?php  echo $row['nombre_prod']?></th>
                                        <th><?php  echo $row['precio']?></th>
                                        <th><?php  echo $row['precio_vta']?></th>
                                        <th><?php  echo $row['stock']?></th>    
                                        <th><?php  echo $row['eliminado']?></th>    
                                        <?php $imagen = $row['imagen']; ?>
                                        <?php $id = $row['id']; ?>

                                        <td><img height="60px" width="85px" src="<?=base_url()?>/public/assets/uploads/<?=$imagen?>"></td>

                                        <th><a href="<?php echo base_url('alzar-usuario/'.$id);?>" class="btn btn-primary">Alta</a></th>
                                    </tr>
                                <?php 
                                        }
                                     }
                                ?>
                        </tbody>
                </table>
         </div>
</div>