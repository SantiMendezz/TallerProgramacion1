<div class ="card-body cuerpo-form" media="(max-width:768px)" style="height:55rem;max-height:80rem;">
    <div class="col-md-3 container">
        <h3 class="centrar-texto">Alta de usuarios</h3>
            <?php $validation = \Config\Services::validation(); ?>
            <form action="<?php echo base_url('/insertar') ?>" method="POST">
            <div>
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                <!-- Error -->
                <?php if($validation->getError('nombre')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('nombre'); ?>
                    </div>
                <?php }?>
            </div>
            <div>
                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                <!-- Error -->
                <?php if($validation->getError('apellido')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('apellido'); ?>
                    </div>
                <?php }?>
            </div>
            <div>
                <input type="email" class="form-control mb-3" name="email" placeholder="Email">
                <!-- Error -->
                <?php if($validation->getError('email')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?>
            </div>
            <div>
                <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                <!-- Error -->
                <?php if($validation->getError('usuario')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('usuario'); ?>
                    </div>
                <?php }?>
            </div>
            <div>
                <input type="password" class="form-control mb-3" name="password" placeholder="Password">
                <!-- Error -->
                <?php if($validation->getError('password')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('password'); ?>
                    </div>
                <?php }?>
            </div>
            <!-- <div>
                <input type="text" class="form-control mb-3" name="perfil_id" placeholder="Perfil"> -->
                <!-- Error -->
                <!-- <?php if($validation->getError('perfil_id')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('perfil_id'); ?>
                    </div>
                <?php }?> -->
            <!-- </div> -->
            <!-- <div>
                <input type="text" class="form-control mb-3" name="baja" placeholder="Baja">
            </div> -->
            <div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>