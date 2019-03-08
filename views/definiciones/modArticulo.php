<?php 
function comparacion($a,$b){
	if (strcmp($a, $b) == 0){
		return 'selected';
	}
}
?>

<div class="container-fluid my-3">
	<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 table-responsive mx-auto">
		<form action="<?=url_base?>articulo/modify" method="POST">
			<caption class="text-center">
			 	<h3 class="mx-auto bg-light text-center">Modificacion</h3>
			 </caption>
		<table class="table table-bordered table-striped text-center">
			<!--EMCABEZADO DE TABLA-->
  			<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Codigo</th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Cliente</th>
			      <th scope="col">Und de medida</th>
			      <th scope="col">Tipo</th>
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
			      	<input type="text" name="codigo" value='<?=$fila->codigo?>' class="text-center">
			      </td>
			      <td>
			      	<input type="text" name="descripcion" value='<?=$fila->descripcion?>' class="text-center">
			      </td>
			      <td>
			      	<select id="client" name="cliente" class="text-center">
							<option value='-'>-</option>
							<?php while ($campo=$datosClientes->fetch_object()):?>
								<option value=<?=$campo->id?> <?=comparacion($campo->nombre, $fila->cliente) ?> > <?=$campo->nombre?> </option>
							<?php endwhile;?>
						</select>
			      </td>
			      <td>
			      	<select name="unidad" id="unid">
							<option value="-">-</option>
							<?php while ($campo=$datosUnidades->fetch_object()):?>
								<option value=<?=$campo->id?> <?=comparacion($campo->nombre, $fila->unidad) ?> > <?=$campo->nombre?> </option>
							<?php endwhile;?>
						</select>
			      </td>
			      <td>
			      	<select name="tipo" id="type">
							<option value="-">-</option>
							<?php while ($campo=$datosTipos->fetch_object()):?>
								<option value=<?=$campo->id?> <?=comparacion($campo->nombre, $fila->tipo)?> > <?=$campo->nombre?></option>
							<?php endwhile;?>
					</select>
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
	