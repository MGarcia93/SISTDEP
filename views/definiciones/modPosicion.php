<div class="container-fluid my-3">
	<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 table-responsive mx-auto">
		<form action="<?=url_base?>posicion/modify" method="POST">
			<caption class="text-center">
			 	<h3 class="mx-auto bg-light text-center">Modificacion</h3>
			 </caption>
		<table class="table table-bordered table-striped text-center">
			<!--EMCABEZADO DE TABLA-->
  			<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Pasillo</th>
			      <th scope="col">Columna</th>
			      <th scope="col">Fila</th>
			      <th scope="col">Altura</th>
			      <th scope="col"></th>
			    </tr>
		  	</thead>
		  	<!--CUERPO DE TABLA-->
		  	<tbody>
			    <tr>

			      <th scope="row">
			      	<input type="text" name="id" value='<?=$fila->id?>' readonly class="text-center">	
			      </th>
			      <td>
			      	<input type="text" name="pasillo" value='<?=$fila->pasillo?>' class="text-center">
			      </td>
			      <td>
			      	<input type="text" name="columna" value='<?=$fila->columna?>' class="text-center">
			      </td>
			      <td>
			      	<input type="text" name="fila" value='<?=$fila->fila?>' class="text-center">
			      </td>
			      <td>
			      	<input type="text" name="altura" value='<?=$fila->altura?>' class="text-center">
			      </td>
			      <td>
			      		<input type="submit" class="btn btn-success" value="Modificar">
			      </td>

			    </tr>
			  
		  	</tbody>
		</table>
</form>	
	</div>
	
</div>
	