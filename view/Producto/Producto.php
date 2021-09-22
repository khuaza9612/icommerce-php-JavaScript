<link href="css_inicio/css_admin.css" rel="stylesheet">
<style>
    #productos {
        font-weight: bold;
        background-color: #eddcd25c;    }
    #productos > a > span {
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
                    <button id="BtnAñadir" class="btn position-relative px-5" style="background:#885a42;color:white;margin-top: -40px; border-radius: 0px 0px 15px 15px;margin-left:50%" data-url="<?php echo getUrl("Producto","Producto","getInsert",false,"ajax"); ?>" data-tipo="producto">
                        <i class="fas fa-folder-plus mr-1"></i>
                        <span id="VersionPrueba">Añadir Producto</span>
                    </button>

                    <!-- Page Heading - Ventas -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0" style="color:#505050">Vista General de los Productos</h1>
                    </div>
                    <!-- <div id="muestraE">
                        
                    </div> -->
                    <!-- Page Heading - Ventas por Tiempo -->
                    <div class="d-flex justify-content-center flex-wrap" style="gap:20px">
                        <!-- Cada Tarjeta donde aparece cada Estadística Unificada "Números"  -->
                        <?php

                        if (mysqli_fetch_row($productos) > 0) {
                            foreach ($productos as $pro) {
                        ?>
                            <div class="card box-shadow my-3" style="width: 23%;background:#FFF1E6">
                                <div class="position-relative">
                                    <div class="row col-md-12 mx-auto position-absolute">
                                        <div class="mx-auto">
                                            <button class="btn btn-info editarModal" id="<?php echo "BtnEditar".$pro['Pro_Id']; ?>" data-url="<?php echo getUrl("Producto","Producto","getUpdate",false,"ajax") ?>" data-id="<?php echo $pro['Pro_Id']; ?>" data-tipo="producto">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger eliminarModal" id="<?php echo "BtnEliminar".$pro['Pro_Id']; ?>" data-url="<?php echo getUrl("Producto","Producto","getDelete",false,"ajax"); ?>" data-id="<?php echo $pro['Pro_Id'] ?>" data-tipo="producto">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <img class="card-img-top size-productos" src="<?php echo $pro['Pro_Imagen']; ?>" alt="Imagen de <?php echo $pro['Pro_Nombre']; ?>">
                                    <span class="badge badge-info position-absolute" style="bottom:0px;left:0;font-size:20px;border-radius: 0px 10px 10px 0px;"><?php echo number_format($pro['Pro_Cantidad']); ?> disponibles</span>
                                </div>
                                <div class="card-body pt-2">

                                    <h5 class="card-title text-center font-weight-bold">
                                        <?php echo $pro['Pro_Nombre']; ?>
                                    </h5>
                                    <div class="row">
                                        <div class="row" style="width: 108.6%;">
                                            <span class="badge badge-dark position-relative ml-auto" style="font-size:20px;border-radius: 15px 0px 0px 15px;"><?php echo "Costo: $".number_format($pro['Pro_Costo']); ?></span>
                                        </div>
                                        <div class="row" style="width: 108.6%;">
                                            <span class="badge badge-warning position-relative ml-auto" style="font-size:20px;color:#6d6d41 !important;border-radius: 15px 0px 0px 15px;"><?php echo "Precio: $".number_format($pro['Pro_Precio']); ?></span>
                                        </div>
                                        <div class="row" style="width: 108.6%;">
                                            <span class="badge badge-primary position-relative ml-auto" style="font-size:20px;color:#fff !important;border-radius: 15px 0px 0px 15px;"><?php echo "Descuento: ".$pro['Pro_Descuento']."%"; ?></span>
                                        </div>
                                        <div class="row" style="width: 108.6%;">
                                            <span class="badge badge-secondary position-relative ml-auto pl-5" style="font-size:15px;color:#fff !important;border-radius: 0px 0px 0px 15px;">
                                                <?php if ($pro['Pro_Descuento'] != 0) {
                                                    echo "$".number_format($pro['Pro_Precio'] - (($pro['Pro_Precio'] * $pro['Pro_Descuento']) / 100));
                                                } else { 
                                                    echo "$".number_format($pro['Pro_Precio']);
                                                } ?>
                                            </span>
                                        </div>
                                        <div class="col-md-12 row d-flex mt-2" style="justify-content: space-around;">
                                            <div>
                                                <span class="font-weight-bold">Categoria:</span><p><?php echo $pro['Cat_Nombre'] ?></p>
                                            </div>
                                            <div>
                                                <span class="font-weight-bold w-60">Color:</span> <p class="w-100"><?php echo $pro['Col_Nombre'] ?></p>
                                            </div>
                                        </div>

                                            <p class="mx-auto">
                                                <a class="py-0 text-light btn btn-quitar" style="background: #CB997E;color:white !important" data-toggle="collapse" href="<?php echo '#collapseExample'.$pro['Pro_Id'] ?>" role="button" aria-expanded="false" aria-controls="<?php echo 'collapseExample'.$pro['Pro_Id'] ?>">
                                                    Descripción del Producto
                                                </a>
                                            </p>
                                            <div class="collapse  mx-auto" id="<?php echo 'collapseExample'.$pro['Pro_Id'] ?>">
                                                <div class="card card-body" style="margin-top: -10px; padding: 15px 10px;">
                                                        <?php echo $pro['Pro_Descripcion']; ?>
                                                        
                                                        <span class="font-weight-bold w-100 mt-3">Suministrado por la empresa: </span><p><?php echo $pro['Prov_Nombre'] ?></p>

                                                        <span class="font-weight-bold w-100">Ingresado por: </span><p><?php echo $pro['Usu_Nombre']." ".$pro['Usu_Apellido']; ?></p>

                                                        <span class="font-weight-bold w-100">Registrado el: </span><p><?php echo substr($pro['Pro_Fecha_Registro'],0,10)."<span class='font-weight-bold'> Hora: </span>".substr($pro['Pro_Fecha_Registro'],11,26); ?></p>
                                                </div>
                                            </div>
                                    </div>                                   
                                </div>
                            </div>
                        <?php
                            }
                        } else {
                            echo "No hay productos que mostrar";
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