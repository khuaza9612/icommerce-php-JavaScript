<link href="css_inicio/css_admin.css" rel="stylesheet">
<style>
    #proveedores {
        font-weight: bold;
        background-color: #eddcd25c;    }
    #proveedores > a > span {
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
                    <button id="BtnAñadir" class="btn position-relative px-5" style="background:#885a42;color:white;margin-top: -40px; border-radius: 0px 0px 15px 15px;margin-left:50%" data-url="<?php echo getUrl("Proveedor","Proveedor","getInsert",false,"ajax"); ?>"  data-tipo="proveedor">
                        <i class="fas fa-id-card-alt"></i>
                        <span id="VersionPrueba">Añadir Proveedor</span>
                    </button>

                    <!-- Page Heading - Ventas -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0" style="color:#505050">Lista de Proveedores</h1>
                    </div>
                    <!-- <div id="muestraE">
                        
                    </div> -->
                    <!-- Page Heading - Ventas por Tiempo -->
                    <div class="d-flex justify-content-center flex-wrap" style="gap:20px">
                        <!-- Cada Tarjeta donde aparece cada Estadística Unificada "Números"  -->
                        <?php

                        if (mysqli_fetch_row($proveedores) > 0) {
                            foreach ($proveedores as $prov) {
                        ?>
                            <div class="card box-shadow my-3" style="width: 23%;background:#FFF1E6">
                                <div class="position-relative">
                                    <div class="row col-md-12 mx-auto position-absolute">
                                        <div class="mx-auto">
                                            <button class="btn btn-info editarModal" id="<?php echo "BtnEditar".$prov['Prov_Id']; ?>" data-url="<?php echo getUrl("Proveedor","Proveedor","getUpdate",false,"ajax") ?>" data-id="<?php echo $prov['Prov_Id']; ?>" data-tipo="proveedor">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger eliminarModal" id="<?php echo "BtnEliminar".$prov['Prov_Id']; ?>" data-url="<?php echo getUrl("Proveedor","Proveedor","getDelete",false,"ajax"); ?>" data-id="<?php echo $prov['Prov_Id'] ?>" data-tipo="proveedor">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2 pr-0">

                                    <h5 class="card-title text-center font-weight-bold mt-5">
                                        <?php echo $prov['Prov_Nombre']; ?>
                                    </h5>
                                    <div class="row">
                                        <div class="row mb-2" style="width: 90%;margin-left: 1.7rem;">
                                            <div class="row w-100">
                                                <span class="bg-dark position-relative ml-auto px-2 text-light" style="font-size:20px;border-radius: 15px 0px 0px 15px;"><?php echo $prov['Prov_Razon_Social']; ?></span>
                                            </div>

                                            <div class="row w-100">
                                                <span class="bg-warning position-relative ml-auto px-2" style="font-size:20px;color:#6d6d41 !important;border-radius: 15px 0px 0px 15px;"><?php echo $prov['Prov_Telefono']; ?></span>
                                            </div>

                                            <div class="row w-100">
                                                <span class="bg-primary position-relative ml-auto px-2" style="font-size:20px;color:#fff !important;border-radius: 15px 0px 0px 15px;"><?php 
                                                    $cont=true;
                                                    foreach ($cantidades as $cant) {
                                                        if ($cant['Prov_Id'] == $prov['Prov_Id']) {
                                                            echo "Productos: ".$cant['Cantidad'];
                                                            $cont = false;
                                                        }
                                                    }
                                                    if ($cont) {echo "Productos: 0";}
                                                ?></span>
                                            </div>
                                        </div>
                                        <p>
                                            <?php echo $prov['Prov_Direccion']; ?>
                                        </p>
                                        <p class="mx-auto">
                                            <a class="py-0 text-light btn btn-quitar" style="background: #CB997E;color:white !important" data-toggle="collapse" href="<?php echo '#collapseExample'.$prov['Prov_Id'] ?>" role="button" aria-expanded="false" aria-controls="<?php echo 'collapseExample'.$prov['Prov_Id'] ?>">
                                                Descripción del Proveedor
                                            </a>
                                        </p>
                                        <div class="collapse  mx-auto" id="<?php echo 'collapseExample'.$prov['Prov_Id'] ?>">
                                            <div class="card card-body" style="margin-top: -10px; padding: 15px 10px;">
                                                    
                                                    <span class="font-weight-bold w-100 mt-3">Correo: </span><p><?php echo $prov['Prov_Correo']; ?></p>

                                                    <span class="font-weight-bold w-100 mt-3">Registrado por: </span><p><?php echo $prov['Usu_Nombre']." ".$prov['Usu_Apellido']; ?></p>

                                                    <span class="font-weight-bold w-100">Registrado el: </span><p><?php echo substr($prov['Prov_Fecha_Registro'],0,10)."<span class='font-weight-bold'> Hora: </span>".substr($prov['Prov_Fecha_Registro'],11,26); ?></p>
                                            </div>
                                        </div>
                                        <p class="mx-auto">
                                            <a class="py-0 text-light btn btn-quitar" style="background: #CB997E;color:white !important" data-toggle="collapse" href="<?php echo '#collapseExamples'.$prov['Prov_Id'] ?>" role="button" aria-expanded="false" aria-controls="<?php echo 'collapseExamples'.$prov['Prov_Id'] ?>">
                                                Productos
                                            </a>
                                        </p>
                                        <div class="collapse mx-auto w-100" id="<?php echo 'collapseExamples'.$prov['Prov_Id'] ?>">
                                            <div class="card card-body" style="margin-top: -10px; padding:10px;width:90%">
                                                    
                                                <?php
                                                    foreach ($productos as $pro) {
                                                        if ($prov['Prov_Id'] == $pro['Prov_Id']) {
                                                ?>                                                
                                                    <div class="py-2 " style="border-bottom:3px solid slategrey">
                                                        <p class="my-0 font-weight-bold text-center"><?php echo $pro['Pro_Nombre']; ?></p>
                                                        <p class="my-0"><?php echo $pro['Pro_Cantidad']." disponibles"; ?></p>
                                                        <p class="my-0"><?php echo "<span class='font-weight-bold'>Costo:</span> $".number_format($pro['Pro_Costo']); ?></p>
                                                    </div>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        <?php
                            }
                        } else {
                            echo "No hay proveedores que mostrar";
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