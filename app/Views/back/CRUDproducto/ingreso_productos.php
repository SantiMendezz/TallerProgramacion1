<!-- Ingreso de productos -->
<div class="container mt-2 mb-0">
    <div class="card" style="width: 100%;" >
      <div class= "titulo-form-productos text-align-center justify-content-center card-header text-center">
        <h2>Ingresar datos producto</h2>
      </div>
    
      <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?php echo base_url('/Producto-controller') ?>" enctype="multipart/form-data">
      
        <div class ="card-body cuerpo-form" media="(max-width:768px)">
          
          <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input name="nombre_prod" type="text"  class="form-control" placeholder="Zapatilla ..." >
            <!-- Error -->
                <?php if($validation->getError('nombre_prod')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('nombre_prod'); ?>
                    </div>
                <?php }?>
          </div>

          <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Imagen</label>
            <input name="imagen" type="file" class="form-control"  placeholder="">
          </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
              <input type="number" name="categoria" class="form-control" placeholder="1 o 2" >
              <!-- Error -->
                <?php if($validation->getError('categoria')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('categoria'); ?>
                    </div>
                <?php }?>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Precio</label>
              <input name="precio"  type="number" class="form-control"  placeholder="$..." >
              <!-- Error -->
                <?php if($validation->getError('precio')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('precio'); ?>
                    </div>
                <?php }?>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Precio de Venta</label>
              <input  type="number" name="precio_vta" class="form-control" placeholder="$">
               <!-- Error -->
                <?php if($validation->getError('precio_vta')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('precio_vta'); ?>
                    </div>
                <?php }?>
            </div>
          
          <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Stock</label>
            <input name="stock" type="number" class="form-control"  placeholder="0...">
            <!-- Error -->
                <?php if($validation->getError('stock')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('stock'); ?>
                    </div>
                <?php }?>
          </div>

          <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Stock Minimo</label>
            <input name="stock_min" type="number" class="form-control"  placeholder="0...">
            <!-- Error -->
                <?php if($validation->getError('stock_min')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('stock_min'); ?>
                    </div>
                <?php }?>
          </div>

            <div class="campo campo-botones">
                <input type="submit" value="Enviar" class="boton boton-primario">
                <!-- <input type="submit" value="Limpiar" class="boton boton-negro"> -->
            </div>
        </div>
      </form>
    </div>
</div>