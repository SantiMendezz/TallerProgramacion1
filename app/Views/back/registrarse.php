<!-- Archivo correxpondiente a la vista de Register -->
<div class="container mt-2 mb-0">
    <div class="card" style="width: 100%;" >
      <div class= "titulo-form text-align-center justify-content-center card-header text-center">
        <h2>Registrarse</h2>
      </div>
    
      <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?php echo base_url('/enviar-form') ?>">
      
        <div class ="card-body cuerpo-form" media="(max-width:768px)">
          <div class="mb-2">
          <label for="exampleFormControlInput1" class="form-label">Nombre</label>
          <input name="nombre" type="text"  class="form-control" placeholder="nombre/s" >
            <!-- Error -->
                <?php if($validation->getError('nombre')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('nombre'); ?>
                    </div>
                <?php }?>
          </div>
          <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
            <input type="text" name="apellido"class="form-control" placeholder="apellido/s" >
            <!-- Error -->
                <?php if($validation->getError('apellido')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('apellido'); ?>
                    </div>
                <?php }?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">E-mail</label>
          <input name="email"  type="femail" class="form-control"  placeholder="juan@algo.com" >
            <!-- Error -->
                <?php if($validation->getError('email')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?>
          </div>
            <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Usuario</label>
          <input  type="text" name="usuario" class="form-control" placeholder="username">
          <!-- Error -->
                <?php if($validation->getError('usuario')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('usuario'); ?>
                    </div>
                <?php }?>
          </div>
          
          <div class="mb-2">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input name="password" type="password" class="form-control"  placeholder="contraseña">
          <!-- Error -->
                <?php if($validation->getError('password')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('password'); ?>
                    </div>
                <?php }?>
          </div>
            <div class="campo campo-botones">
                <input type="submit" value="Enviar" class="boton boton-primario">
                <input type="submit" value="Limpiar" class="boton boton-negro">
            </div>
        </div>
      </form>
  </div>
</div>