<div class="container-fluid">
	<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12 my-2 mx-auto">
		<!--Formulario de generacion-->
	    <div class="card rounded-1">
			<div class="card-header">
	            <h4 class="mb-0">Generar Cliente</h4>
	    	</div>

	       	<div class="card-body">
	        	<form class="form -inline text-center" role="form" novalidate="" method="POST">
	        		<label for="client"> Cliente </label>
	        		<select name="cliente"  id="client"  class="text-center" style="width: 15em;" required>
	        			<option>-</option>
	        			<option>Mapa</option>
	        			<option>MARQUEZ</option>
	        		</select>
	        		<input type="submit" name="buscar" class="btn btn-success mx-5" value="BUSCAR">
				</form>
			</div>
		</div>	
	</div>
</div>
<div class="container-fluid">
	<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 my-2 mx-auto table-responsive" >
		<table class="table table-bordered table-striped text-center">
			<thead>
				<tr>
					<th scope="col">Codigo</th>
					<th scope="col">Descripcion</th>
					<th scope="col">Unidad Medida</th>
					<th scope="col">Cantidad</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					<td scope="row">s1006</td>
					<td> Scrap</td>
					<td>Pallet</td>
					<td>1</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>