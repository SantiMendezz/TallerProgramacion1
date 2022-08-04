<?php $session = session();
          $nombre= $session->get('nombre');
          $perfil=$session->get('perfil_id');?>

            <?php if($perfil == '2') {?>
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #42C2FF">
                <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url('principal'); ?>">
                <img src="<?php echo base_url('public/assets/img/icon-nav.png');?>" alt="" width="60" class="imagen-nav"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link" href="<?php echo base_url('principal'); ?>">Home</a>
                      <a class="nav-link" href="<?php echo base_url('tienda'); ?>">Tienda</a>
                      <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
                      <a class="nav-link" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
                      <a class="nav-link" href="<?php echo base_url('contactanos'); ?>">Contactanos</a>
                      <a class="nav-link" href="<?php echo base_url('mostrar-carrito'); ?>">
                        <img src="<?php echo base_url('public/assets/img/carrito.png');?>" alt="" width="30" class="imagen-nav"/>
                      </a>
                      <a class="nav-link" href="<?php echo base_url('cerrar'); ?>">
                        <img src="<?php echo base_url('public/assets/img/cerrarSesion.png');?>" alt="" width="30" class="imagen-nav"/>
                      </a>
                    </div>
                  </div>
                  </div>
              </nav>
            
            <?php } else if( (($perfil =='1')) ) { ?> 
               <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c7c4c4cf">
                <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>">
                <img src="<?php echo base_url('public/assets/img/admin.png');?>" alt="" width="60" class="imagen-nav"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link" href="<?php echo base_url('user-list'); ?>">CRUD Usuarios</a>
                      <a class="nav-link" href="<?php echo base_url('producto-list'); ?>">CRUD productos</a>
                      <a class="nav-link" href="<?php echo base_url('venta-cabecera-list'); ?>">Ventas</a>
                      <a class="nav-link" href="<?php echo base_url('consultas-list'); ?>">Consultas</a>
                      <a class="nav-link" href="<?php echo base_url('cerrar'); ?>">Cerrar Sesión</a>
                    </div>
                  </div>
                  </div>
              </nav>

          <!--------------------- Para todos los usuarios------------------------->
            <?php } else if( (($perfil != '1')|| ($perfil != '2')) ) { ?> 
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #42C2FF">
                <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url('principal'); ?>">
                <img src="<?php echo base_url('public/assets/img/icon-nav.png');?>" alt="" width="60" class="imagen-nav"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link" href="<?php echo base_url('principal'); ?>">Home</a>
                      <a class="nav-link" href="<?php echo base_url('tienda'); ?>">Tienda</a>
                      <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
                      <a class="nav-link" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
                      <a class="nav-link" href="<?php echo base_url('contactanos'); ?>">Contactanos</a>
                      <a class="nav-link" href="<?php echo base_url('registrarse'); ?>">Registro</a>
                      <a class="nav-link" href="<?php echo base_url('login'); ?>">Sign In</a>
                    </div>
                  </div>
                  </div>
              </nav>
            <?php } ?>