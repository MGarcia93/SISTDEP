 <!-- formulario de generacion-->
<div class="row  my-2">
   <div class="card rounded-1 mx-auto">
		<div class="card-header">
            <h4 class="mb-0">Generar Posicion</h4>
    	</div>
       	<div class="card-body">
	    	<form  action="<?=url_base?>posicion/add" class="form-inline" method="POST">
	    	<div class="form-group mx-2 ">
	   		<label for="name">Pasillo</label>
			<input type="text" name="pasillo" id="name" class="form-control form-control-sm">
			</div>
			<div class="form-group mx-2">
			<label for="col">Columna</label>

			<input type="number" name="columna" id="col" class="form-control form-control-sm">
			</div>
			<div class="form-group mx-2">
			<label for="row">Fila</label>
			<input type="number" name="fila" id="row "class="form-control form-control-sm">
			</div>
			<div class="form-group mx-2">
			<label for="heightd">Altura</label>
			<input type="number" name="altura" id="height" class="form-control form-control-sm"  step="0.01">
			</div>
			<div class="form-group">
			<button type="submit" name="generar"  class="btn btn-success mx-2">Generar</button>
			</div>
			</form>
		</div>
		<!--din de cuerpo de carta-->
	</div>
	<!--fin de carta-->
</div>
<div class="row2">
	<div class="col-lg-6 mx-auto table-responsive">
		<!--TABLA CON DATOS DE ARTICULOS CARGADOS-->
		<table class="table table-bordered table-striped text-center">
			<!--EMCABEZADO DE TABLA-->
				<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Posicion</th>
			      <th scope="col">Altura en Metros</th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			    </tr>
		  	</thead>
		  	<!--CUERPO DE TABLA-->
		  	<tbody>
		  		<?php if($datos):?>
		  		<?php foreach ($datos as $fila):?>
			    <tr>
					<th scope="row"><?=$fila->id?></th>
					<td><?=$fila->pasillo.$fila->columna.$fila->fila?></td>
					<td><?=$fila->altura?></td>
					 <td>
			      		<a href="<?=url_base?>posicion/showMod&id=<?=$fila->id?>"class="btn btn-success">Modificar</a>
			      	</td>
			      	<td>

			      		<a class="btn btn-danger" href="<?=url_base?>posicion/delete&id=<?=$fila->id?>">Borrar</a>
			      	</td>
			    </tr>
			    <?php endforeach;?>
			<?php endif;?>
		  	</tbody>
		</table>
	</div>
	
</div>
