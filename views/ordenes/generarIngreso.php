

 <!-- formulario de generacion-->

<div class="container-fluid  my-2 mx-auto col-lg-6 col-md-6 col-sm-8 col-xs-10">
	<form  action="<?=url_base?>generar/ingreso" target="popup"
		onclick="window.open('', 'popup', 'width = 600, height = 400')s" 
		method="POST" id="myForm" >
   <div class="card rounded-1 ">
		<div class="card-header">
            <h4 class="mb-0 d-inline-block">Generar Orden de Ingreso</h4>
            <div class="form-group mx-4 d-inline-block">
	   		<label for="name" >Fecha Ingreso</label>
			<input type="date" name="fecha" id="name"  >
			<input type="text" id="contador" name="cont" value=0 hidden>
			</div>

			<!--LISTA DESPLEGABLE DE CLIENTES-->
			<div class="form-group d-inline-block ">
				<label for="client">Cliente</label>
				<select id="client" name="cliente">
					<option value='-'>-</option>
					<?php var_dump($datosClientes);
					foreach ($datosClientes as $fila):
						var_dump($fila);?>
						<option value=<?=$fila->id?>> <?=$fila->nombre?> </option>
					<?php endforeach;?>
				</select>
			</div>
			<div class="form-group d-inline-block">
			<button type="submit" name="generar"  class="btn btn-success mx-2">Generar</button>
			</div>
    	</div>
       	<div class="card-body table-responsive">
		<!--TABLA CON DATOS DE ARTICULOS CARGADOS-->
		<table class="table table-striped text-center" id="myTable" >
			<!--EMCABEZADO DE TABLA-->
			<thead >
			    <tr>
			      <th scope="col"> Codigo </th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Cantidad</th>
			    </tr>
		  	</thead>
		  	<!--CUERPO DE TABLA-->
		  	<tbody >
				<tr>
					<td scope="col">
						<input type="text"  name="codigo" class="form-control">
					</td>
					<td scope="col">
						<input type="text" name="descripcion" class="form-control">
					</td>
					<td scope="col">
						<input type="text" name="cantidad" class="form-control" >
					</td>
				</tr>
		  	</tbody>
		</table>
		
	   	<a class="btn btn-success text-center" href="javascript:createLine('myTable','myForm','codigo')"><span class="glyphicon glyphicon-plus"> Nueva linea</span></a>
		</div>
		<!--din de cuerpo de carta-->
	</div>
	<!--fin de carta-->
	</form>
</div>
	


