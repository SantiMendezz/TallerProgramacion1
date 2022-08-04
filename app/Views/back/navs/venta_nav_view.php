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
                      <a class="nav-link" href="<?php echo base_url('venta-cabecera-list'); ?>">Ventas Cabecera</a>
                      <a class="nav-link" href="<?php echo base_url('venta-detalle-list'); ?>">Ventas Detalle</a>
                      <a class="nav-link" href="<?php echo base_url('cerrar'); ?>">Cerrar Sesión</a>
                    </div>
                  </div>
                  </div>
              </nav>