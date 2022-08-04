<main>
  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('public/assets/img/nike-blancas-slide.jpg'); ?>" class="d-block w-100 img-carousel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('public/assets/img/nike-basket-slide.jpg'); ?>" class="d-block w-100 img-carousel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('public/assets/img/nike-blancas-con-medias.jpg'); ?>" class="d-block w-100 img-carousel" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Destacado -->
  <div id="ribbon" class="container-fluid">
    <div id="destacado" class="container w-50 px-5 rounded-lg">

      <div class="row align-items-center">
        <div class="col-sm p-3">
          <img src="<?php echo base_url('public/assets/img/nike-airmax.jpg'); ?>" class="w-75 mx-auto d-block" alt="">
        </div>

        <div class="col-sm p-3 text-light text-center">
          <p class="destacado-texto">Destacado:</p>
          <h4 class="destacado-h4 text-shadow">Nike Air Max</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Separador -->
  <div id="separator-ribbon">
    <div class="content bg-separador"></div>
  </div>

  <!-- Gloves de imagenes -->
  <section class="contenedor sombra">
    <div class="gloves">

      <div class="glove">
        <h3>Mujer</h3>
          <a href="#">
            <img src="<?php echo base_url('public/assets/img/woman-glove-principal.jpg'); ?>" class="img-glove-women">
          </a>
      </div>

      <div class="glove">
        <h3>Hombre</h3>
          <a href="#">
            <img src="<?php echo base_url('public/assets/img/man-glove-princial.webp'); ?>" class="img-glove-man">
          </a>
      </div>

      <div class="glove">
        <h3>Niños</h3>
          <a href="#">
            <img src="<?php echo base_url('public/assets/img/kids-glove-principal.jpg'); ?>" class="img-glove-kids">
          </a>
      </div>

    </div>
  </section>

  <!-- Marcas -->
    <section class="contenedor-marcas">
    <h3>Confían en nosotros:</h3>
    <div class="marcas">
      <div class="marca"> 
          <img src="<?php echo base_url('public/assets/img/nike.png'); ?>" class="png-marca">
      </div>

      <div class="marca">
          <img src="<?php echo base_url('public/assets/img/adidas.png'); ?>" class="png-marca">
      </div>

      <div class="marca">
          <img src="<?php echo base_url('public/assets/img/puma.png'); ?>" class="png-marca">
      </div>

      <div class="marca">
          <img src="<?php echo base_url('public/assets/img/jordan.png'); ?>" class="png-marca">
      </div>

      <div class="marca">
          <img src="<?php echo base_url('public/assets/img/converse.png'); ?>" class="png-marca">
      </div>
    </div>
  </section>

</main>