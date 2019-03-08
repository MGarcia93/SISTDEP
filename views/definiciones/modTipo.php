<div class="container-fluid my-3">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-10 table-responsive mx-auto">	
		<form action="<?=url_base?>tipoArticulo/modify" method="POST">
			 <caption class="text-center">
			 	<h3 class="mx-auto bg-light text-center">Modificacion</h3>
			 </caption>
			<table class="table table-bordered table-striped text-center">
				<!--EMCABEZADO DE TABLA-->
	  			<thead>
				    <tr>
				      <th scope="col">Codigo</th>
				      <th scope="col">Nombre</th>
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
				      	<input type="text" name="nombre" value='<?=$fila->nombre?>' class="text-center">
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