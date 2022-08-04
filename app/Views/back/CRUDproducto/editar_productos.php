<div class ="card-body cuerpo-form centrar-texto" media="(max-width:768px)" style="height: 65px;rem;max-height:80rem;">
    <div class="col-md-3 container">
        <h3 class="centrar-texto">Edición de usuario</h3>
            <?php $validation = \Config\Services::validation(); ?>
            <form action="<?php echo base_url('/edicion-producto') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $producto['id'];?>">
            <div>
            <label class="ml-2">Nombre Producto</label>
                <input type="text" class="form-control mb-3" name="nombre_prod" value="<?php echo $producto['nombre_prod'];?>">
            </div>
            <?php 
                $img =  $producto['imagen'];
            ?>
            <div>
            <label class="ml-2">Imagen</label>
                <input type="file" class="form-control mb-3" name="imagen" src="<?php echo base_url($img); ?>">
            </div>
            <div>
            <label class="ml-2">ID Categoria</label>
                <input type="number" class="form-control mb-3" name="categoria_id" value="<?php echo $producto['categoria_id'];?>">
            </div>
            <div>
            <label class="ml-2">Precio</label>
                <input type="number" class="form-control mb-3" name="precio" value="<?php echo $producto['precio'];?>">
            </div>
            <div>
            <label class="ml-2">Precio Venta</label>
                <input type="number" class="form-control mb-3" name="precio_vta" value="<?php echo $producto['precio_vta'];?>">
            </div>
            <div>
            <label class="ml-2">Stock</label>
                <input type="number" class="form-control mb-3" name="stock" value="<?php echo $producto['stock'];?>">
            </div>
            <label class="ml-2">Stock Mínimo</label>
                <input type="number" class="form-control mb-3" name="stock_min" value="<?php echo $producto['stock_min'];?>">
            </div>
            <div>
                <input type="hidden" class="form-control mb-3" name="eliminado" value="<?php echo $producto['eliminado'];?>">
            </div>
            <div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>