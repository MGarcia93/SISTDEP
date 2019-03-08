<div class="row mx-2 my-2">
    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-8 offset-sm-1 my-2">
    	<!--Formulario de generacion-->
	    <div class="card rounded-1">
			<div class="card-header">
	            <h4 class="mb-0">Buscar</h4>
	    	</div>

	       	<div class="card-body">
	        	<form action="<?=url_base?>articulo/add" class="form"  method="POST">
	        		<div class="form-group">
		           		<label for="name">Codigo</label>
						<input type="text" name="codigo" id="name">
					</div>
					<div class="form-group">
						<label for="description">Descripcion</label>
						<input type="text" name="descripcion" id="description">
					</div>
					<!--LISTA DESPLEGABLE DE CLIENTES-->
					<div class="form-group">
						<label for="client">Cliente</label>
						<select id="client" name="cliente">
							<option value='-'>-</option>
							<?php  foreach ($datosClientes as $fila):	?>	
								<option value=<?=$fila->id?>> <?=$fila->nombre?> </option>
							<?php endforeach;?>
						</select>
					</div>
					<!--LISTA DESPLEGABLE DE UNIDADES DE MEDIDA-->
					<div class="form-group">
						<label for="unid">Unidad de Medida</label>
						<select name="unidad" id="unid">
							<option value="-">-</option>
							<?php foreach ($datosUnidades as $fila):?>
								<option value=<?=$fila->id?>> <?=$fila->nombre?> </option>
							<?php endforeach;?>
						</select>
					</div>
					<!--LISTA DESPLEGABLE DE TIPOS DE ARTICULOS-->
					<div class="form-group">
						<label for="type">Tipo</label>
						<select name="tipo" id="type">
							<option value="-">-</option>
							<?php foreach ($datosTipos as $fila):?>
								<option value=<?=$fila->id?>> <?=$fila->nombre?> </option>
							<?php endforeach;?>
						</select>
					</div>
					<button type="submit" name="generar"  class="btn btn-success">Generar</button>
				</form>
			</div>
		</div>
	</div>
	<!--FIN DE FORMULARIO-->
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-md-1 my-2 table-responsive">
		<!--TABLA CON DATOS DE ARTICULOS CARGADOS-->
		<table class="table table-bordered table-striped text-center">
			<!--EMCABEZADO DE TABLA-->
  			<thead>
			    <tr>
			      <th scope="col">Codigo</th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Cliente</th>
			      <th scope="col">Und de medida</th>
			      <th scope="col">Tipo</th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			    </tr>
		  	</thead>
		  	<!--CUERPO DE TABLA-->
		  	<tbody>
		  		<?php if($datos):
		  		 ?>
		  		<?php foreach ($datos as $fila):	?>	  			
			    <tr>
			      <th scope="row"><?=$fila->codigo?></th>
			      <td><?=$fila->descripcion?></td>
			      <td><?=$fila->cliente?></td>
			      <td><?=$fila->unidad?></td>
			      <td><?=$fila->tipo?></td>
			      <td>
			      		<a href="<?=url_base?>articulo/showMod&id=<?=$fila->id?>"class="btn btn-success">Modificar</a>
			      </td>
			      <td>

			      		<a class="btn btn-danger" href="<?=url_base?>articulo/delete&id=<?=$fila->id?>">Borrar</a>
			      </td>
			    </tr>
				<?php endforeach;?>
			    <?php endif;?>
		  	</tbody>
		</table>
	</div>
</div>