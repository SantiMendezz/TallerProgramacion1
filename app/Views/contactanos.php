<main class="contenedor">
    <div class="presentacion contacto-imagen">
        <div class="presentacion-texto">
            <h1 class="no-margin comer-titulo">Contacto</h1>
        </div>
    </div>
    <hr>
    <h2 class="centrar-texto mt-2">Sneakers Society</h2>
    <p class="centrar-texto">Titular de la empresa: Méndez, Santiago Alfredo.</p>
    <hr>

    <div class="contenedor-map centrar-texto mt-2">
        <h3>Encontranos en:</h3>
        <p>Avenida 3 de abril 558 Dep. 3A- Corrientes Capital, Argentina</p>
        <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.824340299014!2d-58.84528145171905!3d-27.474727560536373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cbdf3f44d99%3A0x21fc1e59b7f7bef0!2sAv.%203%20de%20Abril%20558%2C%20Corrientes!5e0!3m2!1ses!2sar!4v1650894676329!5m2!1ses!2sar" 
        width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="sobre-card mt-5">
        <div class="card" style=" ">
        <div class="card-body">
                <h4 class="card-title">Nuestras Redes</h4>
                <p class="card-text">Seguinos para no perderte ninguna de las novedades!!</p>
                <a href="#" class="boton boton-primario boton-primario-card">Instagram</a>
                <a href="#" class="boton boton-primario boton-primario-card">Facebook</a>
                <a href="#" class="boton boton-primario boton-primario-card">WhatsApp</a>
        </div>
            <img src="<?php echo base_url('public/assets/img/zapas-card.jpg'); ?>" class="card-img-top" alt="...">
        </div>
    </div>

    <h3 class="centrar-texto mt-5">Mandanos tu consulta</h3>
    <div class="contacto-bg"></div>
    <?php $validation = \Config\Services::validation(); ?>
        <form class="formulario" method="post" action="<?php echo base_url('/enviar-consulta') ?>">
            <div class="campo">
                <label class="campo__label" for="nombre">Nombre y Apellido</label>
                <input class="campo__field" type="text" placeholder="Tu Nombre y Apellido" id="nombre" name="nya">
                <!-- Error -->
                <?php if($validation->getError('nya')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('nya'); ?>
                    </div>
                <?php }?>
            </div>
            <div class="campo">
                <label class="campo__label" for="email">Telefono</label>
                <input class="campo__field" type="number" placeholder="Tu Telefono" id="telefono" name="telefono">
                <!-- Error -->
                <?php if($validation->getError('telefono')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('telefono'); ?>
                    </div>
                <?php }?>
            </div>
            <div class="campo">
                <label class="campo__label" for="pais">E-mail</label>
                <input class="campo__field" type="email" placeholder="Tu E-mail" id="email" name="email">
                <!-- Error -->
                <?php if($validation->getError('email')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?>
            </div>
            <div class="campo">
                <label class="campo__label" for="mensaje">Mensaje</label>
                <textarea class="campo__field campo__field-textarea" id="mensaje" name="mensaje"></textarea>
                <!-- Error -->
                <?php if($validation->getError('mensaje')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('mensaje'); ?>
                    </div>
                <?php }?>
            </div>
            <div class="campo campo-botones">
                <input type="submit" value="Enviar" class="boton boton-primario">
                <input type="submit" value="Limpiar" class="boton boton-negro">
            </div>
        </form>
</main>