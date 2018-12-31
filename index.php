<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/factura.js"></script>
	<title>Factura</title>
</head>
<body>
<div class="container" style="margin-top: 70px">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading" style="text-align: center">
					<h3>FACTURA</h3>
				</div>
				<div class="panel-body">
					<div class="panel panel-default">
						
						<div class="panel-body">
						<h4>Datos del cliente</h4>
						<div class="row">
							<div class="col-md-4">
								<div  class="form-group">
									<label>Cliente: </label>
									<input type="text" name="" class="form-control input-sm">
								</div>
								<div class="form-group">
									<label>Direccion: </label>
									<input type="text" name="" class="form-control input-sm">
								</div>
							</div>
							<div class="col-md-4">
								<div  class="form-group">
									<label>Fecha: </label>
									<input type="date" name="" class="form-control input-sm">
								</div>
								<div class="form-group">
									<label>RUC: </label>
									<input type="text" name="" class="form-control input-sm">
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-8">
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<th>Id</th>
									<th>Descripcion</th>
									<th>Cantidad</th>
									<th>precio</th>
									<th>Venta</th>
									<tr>
										<td>sdfsd</td>
										<td>sdfsd</td>
										<td>sdfsd</td>
										<td>sdfsd</td>
										<td>sdfsd</td>
									</tr>
								</table>
							</div>
							</div>
							<div  class="col-md-4">
								<div class="form-group">
									<button type="button" class="btn btn-primary">+</button>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-success">u</button>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-danger">d</button>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-md-4 control-label">SubTotal:</label>
									<div class="col-md-8">
									<input type="text" name="" class="form-control input-sm" disabled="true">	
									</div>
									
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">IGV:</label>
									<div class="col-md-8">
									<input type="text" name="" class="form-control input-sm" disabled="true">	
									</div>
									
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Total:</label>
									<div class="col-md-8">
									<input type="text" name="" class="form-control input-sm" disabled="true">	
									</div>
									
								</div>
								</form>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</body>
</html>