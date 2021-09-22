    <link href="css_inicio/css_admin.css" rel="stylesheet">

    <style>
        #revision {
            font-weight: bold;
            background-color: #eddcd25c;        }
        #revision > a > span {
            color: #fff !important;       }
        #mainNav {
            background: #6d6d41;        }
        .text-shadow {
            text-shadow: 0 0 0 rgba(255, 255, 255, 0.5);        }
    </style>

    <!-- Page Wrapper -->
    <div class="mt-7">
        <div id="wrapper">

            <!-- Sidebar -->
            <?php 
                include_once '../view/partials/navbar_admin.php';
            ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
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

                        <!-- Page Heading - Ventas -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0" style="color:#505050">Ventas</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm border-0" style="background:#CB997E">
                                <i class="fas fa-download fa-sm text-white-50"></i> 
                                Generar Reporte
                            </a>
                        </div>

                        <!-- Page Heading - Ventas por Tiempo -->
                        <div class="row d-flex justify-content-center flex-wrap" style="gap:20px">
                            <!-- Cada Tarjeta donde aparece cada Estadística Unificada "Números"  -->
                            <!-- Dia -->
                            <div class="mt-5">
                                <div class="card" style="width: 20rem;background:#6d6d41;color:#FFF1E6 !important;">
                                    <div class="card-body">
                                        <div class="card-parte-superior row">

                                            <div class="card-icono rounded" style="background:#d09508">
                                                <i class="fas fa-shopping-bag"
                                                    style="font-size: 35px;color: #FFF1E6"></i>
                                            </div>

                                            <div class="ml-auto mr-3 mb-3 col-md-12
                                        " style="text-align: right;">
                                                <p class="card-title mb-0">Ventas del Día</p>

                                                <h4 class="card-text" style="color:#DDBEA9">$16.000</h4>
                                            </div>
                                        </div>

                                        <div class="actualizado border-top pt-2"
                                            style="border-color:#FFF1E6 !important">
                                            <i class="far fa-clock"></i>
                                            Actualizado justo ahora
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Semanas -->
                            <div class="mt-5">
                                <div class="card" style="width: 20rem;background:#6d6d41;color:#FFF1E6 !important;">
                                    <div class="card-body">
                                        <div class="card-parte-superior row">

                                            <div class="card-icono rounded" style="background:#43aa8b">
                                                <i class="fas fa-cash-register"
                                                    style="font-size: 35px;color: #FFF1E6"></i>
                                            </div>

                                            <div class="ml-auto mr-3 mb-3 col-md-12
                                        " style="text-align: right;">
                                                <p class="card-title mb-0">Ventas de las Semanas</p>

                                                <h4 class="card-text" style="color:#DDBEA9">$56.000</h4>
                                            </div>
                                        </div>

                                        <div class="actualizado border-top pt-2"
                                            style="border-color:#FFF1E6 !important">
                                            <i class="far fa-clock"></i>
                                            Actualizado hace 24 horas
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Meses -->
                            <div class="mt-5">
                                <div class="card" style="width: 20rem;background:#6d6d41;color:#FFF1E6 !important;">
                                    <div class="card-body">
                                        <div class="card-parte-superior row">

                                            <div class="card-icono rounded row" style="background:#277da1">
                                                <i class="fas fa-store-alt" style="font-size: 35px;color: #FFF1E6"></i>
                                            </div>

                                            <div class="ml-auto mr-3 mb-3 col-md-12
                                        " style="text-align: right;">
                                                <p class="card-title mb-0">Ventas de los Meses</p>

                                                <h4 class="card-text" style="color:#DDBEA9">$420.000</h4>
                                            </div>
                                        </div>

                                        <div class="actualizado border-top pt-2"
                                            style="border-color:#FFF1E6 !important">
                                            <i class="far fa-clock"></i>
                                            Actualizado hace 1 mes
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Años - Diagrama de Barras -->
                        </div>
                        <div class="row d-flex justify-content-center px-5">
                            <div class="mt-5" style="min-width: 20rem; width:100%;">
                                <div class="card" style="background:#6d6d41;color:#FFF1E6 !important;">
                                    <div class="card-body">
                                        <div class="card-parte-superior row">

                                            <div class="card-icono-diagrama rounded" style="background:#ef476f;">

                                            </div>
                                        </div>
                                        <p class="text-right" style="margin-top:-40px">Ventas por Año</p>
                                        <div class="actualizado border-top pt-2"
                                            style="border-color:#FFF1E6 !important; margin-top:-10px">
                                            <i class="far fa-clock"></i>
                                            Actualizado haces 6 meses
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider">

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Tasks
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Pending Requests</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> Direct
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> Social
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-info"></i> Referral
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="small font-weight-bold">Server Migration <span
                                                class="float-right">20%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Sales Tracking <span
                                                class="float-right">40%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Customer Database <span
                                                class="float-right">60%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Payout Details <span
                                                class="float-right">80%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Account Setup <span
                                                class="float-right">Complete!</span></h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>