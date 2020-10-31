<?php 
    require_once RUTA_APP .'/views/inc/header_cp.php';
    $rol = $datos['rol'];
    if ($rol == 1) {
        require_once RUTA_APP .'/views/inc/menuAdmin.php';
    } else {
        require_once RUTA_APP .'/views/inc/menuTIVICOM.php';
    }
    $idempresa = 3;
    $cantidadEx = 0;
?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <form method="POST" action="addproducts" class="factura_repetida" id="productos">           
            <div class="row justify-content-center add_productos">
                <div class="col-md-12 text-center">
                    <h2 class="alert alert-dark" role="alert">Ingreso de Productos</h2>
                </div>
                    <input type="hidden" name="id_empresa[]" value="<?php echo $idempresa;?>" readonly="" id="idempresa">
                    <input type="hidden" name="cantidad_Ex[]" value="<?php echo $cantidadEx;?>" readonly="" id="cantidad_Ex">
                <div class="col-12 text-center input_productos">
                    <input type="text" name="codigo[]" placeholder="Codigo del Producto">
                </div>
                <div class="col-12 text-center input_productos">
                    <input type="text" name="descripcion[]" placeholder="Descripcion">
                </div>
                <div class="col-12 text-center input_productos">
                    <input type="number" name="vneto[]" placeholder="Valor Neto">
                </div>
                <div class="col-12 text-center input_productos">
                    <input type="number" name="vunitario[]" placeholder="Valor Unitario">
                </div>
                <div class="col-12 text-center input_productos">
                    <a type="button" name="remove" class="btn btn-danger" style="color:white;">X</a>
                </div>
            </div>
                <div class="col-sm-12 text-center addproducto">
                    <button type="submit" class="btn btn-primary">Agregar Productos</button>
                    <a type="button" id="agregar_producto" class="btn btn-light">+</a>
                </div>
        </form>
    </div>
<?php require_once RUTA_APP .'/views/inc/footer.php';?>    
</div>
<script type="text/javascript" src="<?php echo RUTA ?>public/js/main.js"></script>