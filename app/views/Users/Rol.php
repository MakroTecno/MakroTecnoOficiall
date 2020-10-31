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
			<form method="POST" action="Usuarios/modify">
				<div class="col-12">
					<div class="form-group">
						<input type="number" name="cedula" placeholder="Numero de Cedula" class="form-control">
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<select name="privilegio" class="form-control rol">
							<option>Escoja el rol deseado</option>
							<option value="2">Admin_Tivicom</option>
							<option value="3">Administrador</option>
							<option value="4">Mod_Tivicom</option>
							<option value="5">Admin_Credifacil</option>
							<option value="6">Admin_DistriJ</option>
							<option value="7">Mod_Credifacil</option>
							<option value="8">Mod_DistriJ</option>
							<option value="9">Moderador</option>
						</select>
					</div>
				</div>
				<div class="col-12 text-center">
				<input type="submit" class="btn btn-secondary btn_actualizar" name="Registrar" value="Actualizar">
				</div>
			</form>
		</div>
	</div>
	<?php require_once RUTA_APP .'/views/inc/footer.php'; ?>
</div>
<script type="text/javascript" src="<?php echo RUTA ?>public/js/main.js"></script>