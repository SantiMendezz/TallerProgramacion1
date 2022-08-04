<?php 
    include("app/Models/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

?>

<div class="container mt-5" style="higth: 100rem;">
    <h1 class="centrar-texto pb-2 pt-3">Lista de Usuarios de Baja</h1>
            <div class="col-md-12 ">
                <table class="table table table-dark table-striped" >
                            <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Usuario</th>
                                        <th>Password</th>
                                        <th>Perfil ID</th>
                                        <th>Baja</th>
                                        <th></th>
                                    </tr>
                            </thead>

                            <tbody>
                                <?php
                                    while($row=mysqli_fetch_array($query)){
                                        if(($row['baja']) == 'SI') {
                                ?>
                                    <tr>
                                        <th><?php  echo $row['id']?></th>
                                        <th><?php  echo $row['nombre']?></th>
                                        <th><?php  echo $row['apellido']?></th>
                                        <th><?php  echo $row['email']?></th>
                                        <th><?php  echo $row['usuario']?></th>    
                                        <th><?php  echo $row['password']?></th>    
                                        <th><?php  echo $row['perfil_id']?></th>    
                                        <th><?php  echo $row['baja']?></th>    
                                        <?php $id = $row['id']; ?>
                                        <th><a href="<?php echo base_url('alta-usuario/'.$id);?>" class="btn btn-primary">Alta</a></th>
                                    </tr>
                                <?php 
                                        }
                                     }
                                ?>
                        </tbody>
                </table>
         </div>
</div>