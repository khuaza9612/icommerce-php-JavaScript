<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark d-fixed" style="height:100hw" id="admin_Navbar">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item mt-4 mb-2" id="revision">
            <a class="nav-link" href="<?php echo getUrl("Admin","Admin","vista"); ?>">
                <i class="fas fa-chart-bar"></i>
                <span class="admin_Navegacion">Revisión</span>
            </a>
        </li>

        <!--! Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading admin_Navegacion_titulo">
            PRODUCTOS
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item"  id="productos">
            <a class="nav-link" href="<?php echo getUrl("Producto","Producto","catalogo") ?>">
                <i class="fas fa-cubes"></i>
                <span class="admin_Navegacion">Vista General</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="a_icono nav-link collapsed" data-toggle="collapse" href="#tipos_categorias" role="button" aria-expanded="false" aria-controls="tipos_categorias" data-id="iconoCategoria">
                <i class="fas fa-cube"></i>
                <span class="admin_Navegacion">Categorías</span>
                <i id="iconoCategoria" class="iconoFlechas_Admin fas fa-chevron-right flecha-derecha align-middle"></i>
            </a>
            <div class="collapse" id="tipos_categorias">
                <div class="bg-white py-2 collapse-inner rounded mr-auto">
                    <h6 class="sidebar-heading admin_Navegacion_titulo">Tipo de Productos:</h6>
                    <a class="collapse-item"
                        href="<?php echo getUrl("Producto","Producto","producto_categoria","alfombra") ?>"><i class="fas fa-paw"></i><span class="admin_Navegacion"> Alfombras</span></a>
                    <a class="collapse-item"
                        href="<?php echo getUrl("Producto","Producto","producto_categoria","cojin") ?>"><i class="fas fa-couch"></i><span class="admin_Navegacion"> Cojines</span></a>
                    <a class="collapse-item"
                        href="<?php echo getUrl("Producto","Producto","producto_categoria","tapete") ?>"><i class="fas fa-shoe-prints"></i><span class="admin_Navegacion"> Tapetes</span></a>
                    <a class="collapse-item"
                        href="<?php echo getUrl("Producto","Producto","producto_categoria","mantenimiento") ?>"><i class="fas fa-pump-soap"></i><span class="admin_Navegacion"> Mantenimiento</span></a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item" id="proveedores">
            <a class="nav-link" href="<?php echo getUrl("Proveedor","Proveedor","lista") ?>">
                <i class="fas fa-user-tie"></i>
                <span class="admin_Navegacion">Proveedores</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item" id="usuarios">
            <a class="nav-link" href="<?php echo getUrl("Usuario","Usuario","lista") ?>">
                <i class="fas fa-users"></i>
                <span class="admin_Navegacion">Usuarios</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-md-inline mt-3" >
        <button class="rounded-circle border-0 py-2 px-3" style="background: #A5A58D;" id="admin_Boton_Ocultar" ><i class="fas fa-angle-left text-light" id="admin_Icono_Ocultar"></i></button>
    </div>
</ul>