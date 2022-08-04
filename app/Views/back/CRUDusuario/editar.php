<div class ="card-body cuerpo-form" media="(max-width:768px)" style="height:55rem;max-height:80rem;">
    <div class="col-md-3 container">
        <h3 class="centrar-texto">Edición de usuario</h3>
            <?php $validation = \Config\Services::validation(); ?>
            <form action="<?php echo base_url('/edit-de-usuario') ?>" method="POST">
            <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $usuario['id'];?>">
            <div>
                <label class="ml-2">Nombre</label>
            <input type="text" class="form-control mb-3" name="nombre" value="<?php echo $usuario['nombre'];?>">
                <!-- Error -->
                <!-- <?php if($validation->getError('nombre')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('nombre'); ?>
                    </div>
                <?php }?> -->
            </div>
            <div>
            <label class="ml-2">Apellido</label>
            <input type="text" class="form-control mb-3" name="apellido" value="<?php echo $usuario['apellido'];?>">
                <!-- Error -->
                <!-- <?php if($validation->getError('apellido')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('apellido'); ?>
                    </div>
                <?php }?> -->
            </div>
            <div>
            <label class="ml-2">E-mail</label>
            <input type="email" class="form-control mb-3" name="email" value="<?php echo $usuario['email'];?>">
                <!-- Error -->
                <!-- <?php if($validation->getError('email')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?> -->
            </div>
            <div>
            <label class="ml-2">Nombre de Usuario</label>
            <input type="text" class="form-control mb-3" name="usuario" value="<?php echo $usuario['usuario'];?>">
                <!-- Error -->
                <!-- <?php if($validation->getError('usuario')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('usuario'); ?>
                    </div>
                <?php }?> -->
            </div>
            <div>
            <label class="ml-2">Contraseña</label>
            <input type="password" class="form-control mb-3" name="password" value="<?php echo $usuario['password'];?>">
                <!-- Error -->
                <!-- <?php if($validation->getError('password')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('password'); ?>
                    </div>
                <?php }?> -->
            </div>
            <div>
            <label class="ml-2">Perfil ID</label>
                <input type="text" class="form-control mb-3" name="perfil_id" value="<?php echo $usuario['perfil_id'];?>">
                <!-- Error -->
                <!-- <?php if($validation->getError('perfil_id')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('perfil_id'); ?>
                    </div>
                <?php }?> -->
            </div>
            <div>
                <input type="hidden" class="form-control mb-3" name="baja" value="<?php echo $usuario['baja'];?>">
            </div>
            <div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>