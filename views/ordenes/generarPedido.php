 <!-- formulario de generacion-->
<div class="row  my-2">
   <div class="card rounded-1 mx-auto">
		<div class="card-header">
            <h4 class="mb-0">Generar Posicion</h4>
    	</div>
       	<div class="card-body">
	    	<form  action="<?=url_base?>generar/ingreso" target="popup"
			onsubmit="window.open('', 'popup', 'width = 600, height = 400')" class="form-inline" method="POST">
	    	<div class="form-group mx-2 ">
	   		<label for="name">Codgio</label>
			<input type="text" name="pasillo" id="name" class="form-control form-control-sm">
			</div>

			<!--LISTA DESPLEGABLE DE CLIENTES-->
			<div class="form-group">
				<label for="client">Cliente</label>
				<select id="client" name="cliente">
					<option value='-'>-</option>
					<?php var_dump($datosClientes);
					while ($fila=$datosClientes->fetch_object()):
						var_dump($fila);?>
						<option value=<?=$fila->id?>> <?=$fila->nombre?> </option>
					<?php endwhile;?>
				</select>
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
			      <th scope="col">Codigo</th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Cantidad</th>
			      <th scope="col">Posicion</th>
			    </tr>
		  	</thead>
		  	<!--CUERPO DE TABLA-->
		  	<tbody>
		  		<?php if($datos):?>
		  		<?php while($fila=$datos->fetch_object()):?>
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
			    <?php endwhile;?>
			<?php endif;?>
		  	</tbody>
		</table>
	</div>
	
</div>
