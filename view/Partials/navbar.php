<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top text-shadow" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo getUrl("Inicio","Inicio","inicio"); ?>" style="text-decoration:none;">                
                    <img src="images/piecitos.png" alt="Logo PIECITOS" width="32" class="mr-2">
                    PIECITOS
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Piecitos
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo getUrl("Inicio","Inicio","inicio"); ?>"style="text-decoration:none;" >Inicio</a></li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo getUrl("Tienda","Tienda","catalogo"); ?>"style="text-decoration:none;"  >Tienda</a></li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo getUrl("Admin","Admin","vista"); ?>"style="text-decoration:none;" >Admin</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="<?php echo getUrl("Acceso","Acceso","iniciar"); ?>"style="text-decoration:none;"  >Iniciar Sesión</a></li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo getUrl("Acceso","Acceso","registrar"); ?>"style="text-decoration:none;"  >Registrarme</a></li>

                    </ul>                    
                </div>
            </div>
</nav>