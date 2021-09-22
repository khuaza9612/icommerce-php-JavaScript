<link href="css_inicio/css_admin.css" rel="stylesheet">
<style>
    #usuarios {
        font-weight: bold;
        background-color: #eddcd25c;    }
    #usuarios > a > span {
        color: #fff !important;     }
    #mainNav {
        background: #6d6d41;    }

    .text-shadow {
        text-shadow: 0 0 0 rgba(255, 255, 255, 0.5);    }
</style>

<!-- Page Wrapper -->
<div class="mt-7">
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
            include_once '../view/partials/navbar_admin.php';
        ?>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background: #eddcd2;">

                <!-- Topbar -->                
                <?php
                    include_once '../view/partials/navbar_admin_top.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <button id="BtnAñadir" class="btn position-relative px-5" style="background:#885a42;color:white;margin-top: -40px; border-radius: 0px 0px 15px 15px;margin-left:50%" data-url="<?php echo getUrl("Usuario","Usuario","getInsert",false,"ajax"); ?>"  data-tipo="usuario">
                        <i class="fas fa-user-plus"></i>
                        <span id="VersionPrueba">Añadir Usuario</span>
                    </button>

                    <!-- Page Heading - Ventas -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0" style="color:#505050">Lista de Usuarios</h1>
                    </div>
                    <!-- <div id="muestraE">
                        
                    </div> -->
                    <!-- Page Heading - Ventas por Tiempo -->
                    <div class="d-flex justify-content-center flex-wrap" style="gap:20px">
                        <!-- Cada Tarjeta donde aparece cada Estadística Unificada "Números"  -->
                        <?php

                        if (mysqli_fetch_row($usuarios) > 0) {
                            foreach ($usuarios as $usu) {
                        ?>
                            <div class="card box-shadow my-3" style="max-width:253px;width: 23%;background:#FFF1E6">
                                <div class="position-relative">
                                    <div class="row col-md-12 mx-auto position-absolute">
                                        <div class="mx-auto">
                                            <button class="btn btn-info editarModal" id="<?php echo "BtnEditar".$usu['Usu_Id']; ?>" data-url="<?php echo getUrl("Usuario","Usuario","getUpdate",false,"ajax") ?>" data-id="<?php echo $usu['Usu_Id']; ?>" data-tipo="usuario">
                                                <i class="fas fa-user-edit"></i>
                                            </button>
                                            <button class="btn btn-danger eliminarModal" id="<?php echo "BtnEliminar".$usu['Usu_Id']; ?>" data-url="<?php echo getUrl("Usuario","Usuario","getDelete",false,"ajax"); ?>" data-id="<?php echo $usu['Usu_Id'] ?>" data-tipo="usuario">
                                                <i class="fas fa-user-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2 pr-0">
                                    <div class="col-md-12 row mt-4">
                                        <?php 
                                            if (!isset($usu['Usu_Imagen']) || ($usu['Usu_Imagen'] == "")) {
                                                $usu['Usu_Imagen'] = "images/Usuarios/desconocido.svg";
                                            }
                                        ?>
                                        <img src="<?php echo $usu['Usu_Imagen'] ?>" alt="<?php echo $usu['Usu_Nombre']." ".$usu['Usu_Apellido'] ?>" class="rounded-circle mx-auto size-productos" style="width:50%; height:6rem;">
                                    </div>
                                    <h5 class="card-title text-center font-weight-bold">
                                        <?php echo $usu['Usu_Nombre']." ".$usu['Usu_Apellido']; ?>
                                    </h5>
                                    <div class="row">
                                        <div class="row mb-2" style="width: 90%;margin-left: 1.7rem;">

                                            <div class="row w-100">
                                                <span class="bg-danger position-relative ml-auto px-2" style="font-size:20px;color:#fff !important;border-radius: 15px 0px 0px 15px;"><?php echo $usu['Rol_Nombre']; ?></span>
                                            </div>

                                            <div class="row w-100">
                                                <span class="bg-dark position-relative ml-auto px-2 text-light" style="font-size:20px;border-radius: 15px 0px 0px 15px;"><?php echo $usu['Usu_Num_Identificacion']; ?></span>
                                            </div>
                                            <div class="row w-100">
                                                <span class="bg-secondary position-relative ml-auto pl-3 pr-1" style="font-size:15px;color:#fff !important;border-radius: 0px 0px 0px 15px;"><?php echo $usu['Tipo_Nombre']; ?></span>
                                            </div>
                                        </div>
                                        <p class="w-100">
                                            <?php echo $usu['Usu_Direccion']; ?>
                                        </p>
                                        <p class="mx-auto">
                                            <a class="py-0 text-light btn btn-quitar" style="background: #CB997E;color:white !important" data-toggle="collapse" href="<?php echo '#collapseExample'.$usu['Usu_Id'] ?>" role="button" aria-expanded="false" aria-controls="<?php echo 'collapseExample'.$usu['Usu_Id'] ?>">
                                                Detalles del Usuario
                                            </a>
                                        </p>
                                        <div class="collapse  mx-auto" id="<?php echo 'collapseExample'.$usu['Usu_Id'] ?>">
                                            <div class="card card-body" style="margin-top: -10px; padding: 15px 10px;">

                                                <span class="font-weight-bold w-100">Correo: </span><p><?php echo $usu['Usu_Correo']; ?></p>

                                                <span class="font-weight-bold w-100 mt-3">Telefono: </span><p><?php echo $usu['Usu_Telefono']; ?></p>
                                            </div>
                                        </div>                                        
                                    </div>                                   
                                </div>
                            </div>
                        <?php
                            }
                        } else {
                            echo "No hay usuarios que mostrar";
                        }
                        ?>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; PIECITOS 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
            </div>
        </div>
    </div>
</div>