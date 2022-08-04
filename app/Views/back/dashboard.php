<?php 
    $session = session();
?>
<div class="container">
    <h1 class="centrar-texto">Bienvenid@ <?php echo $session->get('usuario');?>!</h1>
    <img src="<?php echo base_url('public/assets/img/verde-producto.jpg'); ?>" style="width:100%; height:80rem" class="mt-5">
</div>