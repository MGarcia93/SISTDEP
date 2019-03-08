<div class="container-fluid">
	<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 my-2 mx-auto">
		<!--Formulario de generacion-->
	    <div class="card rounded-1">
			<div class="card-header">
	            <h4 class="mb-0">Buscar</h4>
	    	</div>

	       	<div class="card-body">
	        	<form class="form -inline text-center" role="form" novalidate="" method="POST">
	        		<label for="code">Codigo </label>
	        		<input type="text" name="codigo" id="code" class="mr-5">
	        		<label for="description">Descripcion </label>
	        		<input type="text" name="DESCRIPCION" id="description" class="mr-5">
	        		<label for="client"> Cliente </label>
	        		<select name="cliente"  id="client"  class="text-center" style="width: 15em;">
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
	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 my-2 mx-auto table-responsive" >
		<table class="table table-bordered table-striped text-center">
			<thead>
				<tr>
					<th scope="col">Fecha</th>
					<th scope="col">Proveedor</th>
					<th scope="col">Cliente</th>
					<th scope="col">Remito</th>
					<th scope="col">Codigo</th>
					<th scope="col">Descripcion</th>
					<th scope="col">Cantidad</th>
					<th scope="col">Posicion</th>
					<th scope="col">Unidad Medida</th>
					<th scope="col">Observacion</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td scope="row">24/12/2018</td>
					<td>comercio exterior</td>
					<td>MAPA</td>
					<td>259571</td>
					<td>1905032</td>
					<td>Guante multiuso S</td>
					<td>140</td>
					<td>IN0102</td>
					<td>bulto</td>
					<td>R3127/2</td>
				</tr>
				<tr>
					<td scope="row">24/12/2018</td>
					<td>comercio exterior</td>
					<td>MAPA</td>
					<td>259571</td>
					<td>1905032</td>
					<td>Guante multiuso S</td>
					<td>140</td>
					<td>IN0102</td>
					<td>bulto</td>
					<td>R3127/2</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
