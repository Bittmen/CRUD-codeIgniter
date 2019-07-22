<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
	body{
		background-color: black;
	}
</style>

<body>

	<div class="container-fluid mt-100">
		<div class="row justify-content-center" style="margin-top: 10%;">
			<div class="col-4 col-md-4">
				<div class="card">
					<div class="card-header">
					 	<strong>Login:</strong>	 usuario - Admin / password - qwerty123!!
					</div>
					<div class="card-body">
						<form action="<?php echo base_url();?>Crud/login" method="POST">
							<div class="form-group row">
								<div class="col-1 col-md-1">
									<span class="fa fa-user"></span>
								</div>
								<div class="col-11 col-md-11 m-0 p-0">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
								</div>	
							</div>
							<div class="form-group row">
								<div class="col-1 col-md-1">
									<span class="fa fa-lock"></span>
								</div>
								<div class="col-11 col-md-11 m-0 p-0">
									<input type="password" class="form-control" name="password" placeholder="Contraseña" required>
								</div>
							</div>
							<div class="form-group">
								<select name="rol" id="rol" required class="form-control">
									<option value="USUARIO">Usuario</option>
									<option value="ADMIN">Administrador</option>
								</select>
							</div>
							<div class="form-group text-center">
								<input type="submit" class="btn btn-md btn-primary" value="Aceptar">
							</div>
						</form>
						<div class="text-center">
							<?= "<span style='color: red;'>". $this->message['message'] ."</span>"?> 
						</div>
					</div>
					<div class="card-footer text-center">
						<a href="">¿Olvidaste tu contraseña?</a> <br>
						<a href="">Registrate aquí</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>