<!-- Vista de login -->
<div class="contenedor login mt-5"  style="width:50%">
  <h3 class="centrar-texto">Inicio de Sesión</h3>

  <?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
  <?php endif;?>

  <form method="get" action="<?php echo base_url('/enviarlogin') ?>">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Dirección e-mail</label>
      <input type="email" name="email" class="form-control" id="InputForEmail" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Nunca compartiremos tu e-mail con nadie.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>

    <!-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->

    <button type="submit text-shadow" class="btn" style="background-color:#42C2FF; color:#000000;">Ingresar</button>
  </form>
</div>

