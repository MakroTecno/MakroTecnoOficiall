<?php 
	require_once RUTA_APP .'/views/inc/header_cp.php';
    $rol = $datos['rol'];
    if ($rol == 1) {
        require_once RUTA_APP .'/views/inc/menuAdmin.php';
    }
?>
<div class="app-main__outer">
	<div class="app-main__inner">
		<div class="row justify-content-center">
			<form method="POST" action="newMarca">
				<div class="col-12 text-center">
					<div class="form-group">
						<label for="nc">Nombre de la Empresa</label>
						<input id="nc" type="text" name="name_company" class="form-control">
					</div>
				</div>
				<div class="col-12 text-center">
					<div class="form-group">
						<label for="de">Direccion de la Empresa</label>
						<input id="de" type="text" name="address_company" class="form-control">
					</div>
				</div>
				<div class="col-12 text-center">
					<div class="form-group">
						<label for="ne">Nit de la Empresa</label>
						<input id="ne" type="text" name="nit_company" class="form-control">
					</div>
				</div>
				<div class="col-12 text-center">
				<input type="submit" class="btn btn-secondary btn_actualizar" name="Registrar" value="Registrar Empresa">
				</div>
			</form>
		</div>
	</div>
	<?php require_once RUTA_APP .'/views/inc/footer.php'; ?>
</div>
<script type="text/javascript" src="<?php echo RUTA ?>public/js/main.js"></script>