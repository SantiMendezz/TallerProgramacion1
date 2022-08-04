<?php 
    include("app/Models/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);

?>
<main class="contenedor">
    <h1 class="centrar-texto pb-2 pt-3">Productos</h1>
    <div class="pagina-contenido">
    <?php
        while($row=mysqli_fetch_array($query)){
            if((($row['eliminado']) == 'NO') && (($row['stock']) > ($row['stock_min'])) ) {
    ?>
    <?php $imagen = $row['imagen']; ?>
    <?php $id = $row['id']; ?>
        <div class="contenido-producto">
            <h4><?php  echo $row['nombre_prod']?></h4>
            <img src="<?=base_url()?>/public/assets/uploads/<?=$imagen?>">
            <p>
            <?php 
                if($row['stock'] == 0) {
                    echo '<span class="badge badge-danger">Sin Stock</span>';
                } elseif($row['stock_min'] >= $row['stock']) {
                    echo '<span class="badge badge-warning">Últimas unidades!</span>';
                } else {
                    echo '<span class="badge badge-success">Stock Disponible</span>';
                }
            ?>
            </p>
            <h4>$<?php  echo $row['precio_vta']?></h4>

            <?php 
                helper('form');
                if(($row['stock'] > 0)) {
                    // Se envia los datos en forma de formulario para agregar al carrito
                    echo form_open('agregar-carrito');
                    echo form_hidden('id' , $row['id']);
                    echo form_hidden('precio_vta', $row['precio_vta']);
                    echo form_hidden('nombre_prod', $row['nombre_prod']);
            ?>
            <div>
                <?php 
                    $btn = array (
                        'class' => 'boton boton-secundario',
                        'value' => 'Agregar al carrito',
                        'name' => 'action'
                    );
                    echo form_submit($btn);
                    echo form_close();
                ?>
            </div>
            <?php 
                // echo "<button href='#' class='boton boton-secundario'>Agregar</button>";
            ?>
        </div>
        <?php } } }?>
    </div>
</main>