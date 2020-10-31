<?php 
    require_once RUTA_APP .'/views/inc/header_cp.php';
    $rol = $datos['rol'];
        if ($rol == 1 or $rol == 3) {
            require_once RUTA_APP .'/views/inc/menuAdmin.php';
        }
        elseif($rol == 9){
            require_once RUTA_APP .'/views/inc/menuMod.php';
        } 
        elseif($rol == 2 or $rol == 4) {
            require_once RUTA_APP .'/views/inc/menuTIVICOM.php';
        }
        elseif ($rol == 5 or $rol == 7) {
            require_once RUTA_APP .'/views/inc/menuCredifacil.php';
        }
        elseif ($rol == 6 or $rol == 8) {
            require_once RUTA_APP .'/views/inc/menuDistriJ.php';
        }
     $nombre = $datos['nombre'];
     $apellido = $datos['apellido'];
     $cod_vendedor = $datos['codven'];   
?>
               
                    
                    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <p><?php echo 'Bienvenid@ ' . $nombre . ' ' . $apellido . '<br>' . ' Tu codigo de Venta es: ' . $cod_vendedor?></p>
                                </div>
                                    </div>
                        </div>            
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">pruebas</div>
                                            <div class="widget-subheading">pruebas</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>pruebas</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">pruebas</div>
                                            <div class="widget-subheading">pruebas</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>pruebas</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">pruebas</div>
                                            <div class="widget-subheading">pruebas</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>pruebas</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">pruebas</div>
                                            <div class="widget-subheading">pruebas</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><span>pruebas</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            pruebas
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <p>pruebas</p>
                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">pruebas</h6>
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <p>pruebas</p>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <p>pruebas</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <p>pruebas</p>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            pruebas
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <p>pruebas</p>
                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">pruebas</h6>
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <p>pruebas</p>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <p>pruebas</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <p>pruebas</p>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <?php require_once RUTA_APP .'/views/inc/footer.php';?>    
                </div>
        </div>
    </div>
<script src="<?php echo RUTA ?>public/js/main.js"></script>
</body>
</html>
