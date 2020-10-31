<?php 
    require_once RUTA_APP .'/views/inc/header_cp.php';
    $rol = $datos['rol'];
    if ($rol == 1) {
        require_once RUTA_APP .'/views/inc/menuAdmin.php';
    } else {
        require_once RUTA_APP .'/views/inc/menuTIVICOM.php';
    }
    date_default_timezone_set('America/Bogota');
    $fecha_venta = date('Y-m-d g:i');
?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <form method="POST" action="ganancias">           
            <div class="row justify-content-center add_productos">
                <input type="hidden" name="fecha_venta" value="<?php echo $fecha_venta?>" id="fecha_venta">
                <div class="col-md-12 text-center">
                    <h2 class="alert alert-dark" role="alert">Venta y Ganancia de Productos</h2>
                </div>
                <div class="col-12 text-center input_productos">
                    <label for="dp">Descripcion de la Venta</label>
                </div>
                <div class="col-12 text-center input_productos">
                    <input id="dp" type="text" name="descripcion">
                </div>
                <div class="col-12 text-center input_productos">
                    <label for="vg">Venta General</label>
                </div>
                <div class="col-12 text-center input_productos">
                    <input id="vg" type="number" name="vgeneral">
                </div>
                <div class="col-12 text-center input_productos">
                    <label for="gn">Ganancias</label>
                </div>

                <div class="col-12 text-center input_productos">
                    <input id="gn" type="number" name="ganancias">
                </div>
            </div>
                <div class="col-sm-12 text-center addproducto">
                    <button type="submit" class="btn btn-primary">Agregar Entrada</button>
                </div>
        </form>
    </div>
<?php require_once RUTA_APP .'/views/inc/footer.php';?>    
</div>
<script type="text/javascript" src="<?php echo RUTA ?>public/js/main.js"></script>