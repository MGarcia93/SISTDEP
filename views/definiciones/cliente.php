<div class="row mx-2 my-2">
    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10 offset-sm-1 my-2">
    	<!--Formulario de generacion-->
	    <div class="card rounded-1">
			<div class="card-header">
	            <h4 class="mb-0">Generar Cliente</h4>
	    	</div>

	       	<div class="card-body">
	        	<form class="form" action="<?=url_base?>cliente/add" method="POST">
	           		<div class="form-group">
						<label for="name">Clientes</label>
						<input type="text" name="nombre" id="name" class="form-control">
			        </div>
				     <div class="form-group">
						<label for="locate">Domicilio</label>
						<input type="text" name="direccion" id="locate" class="form-control">
						
					</div>
					<div class="form-group">
						<label for="tel">Telefono</label>
						<input type="text" name="telefono" id="tel" class="form-control">
					</div>
					<div class="form-group">
						<label for="c">Cuit</label>
						<input type="text" name="cuit" id="c" class="form-control">
					</div>
					<button type="submit" name="generar"  class="btn btn-success">Generar</button>
				</form>
			</div>
			<!--FIN DE CUERPO DE LA CARTA-->
		</div>
		<!--FIN DE LA CARTA-->
	</div>
	<!--FIN DE FORMULARIO-->
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-md-1 my-2 table-responsive">
		<!--TABLA CON DATOS DE ARTICULOS CARGADOS-->
		<table class="table table-bordered table-striped text-center">
			<!--EMCABEZADO DE TABLA-->
  			<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Domicilio</th>
			      <th scope="col">Telefono</th>
			      <th scope="col">CUIT</th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			    </tr>
		  	</thead>
		  	<!--CUERPO DE TABLA-->
		  	<tbody>
		  		<?php if($datos):?>
		  		<?php foreach ($datos as $fila):		?>
			    <tr>
			      <th scope="row"><?=$fila->id?></th>
			      <td><?=$fila->nombre?></td>
			      <td><?=$fila->direccion?></td>
			      <td><?=$fila->telefono?></td>
			      <td><?=$fila->cuit?></td>
			      <td>
			      		<a href="<?=url_base?>cliente/showMod&id=<?=$fila->id?>"class="btn btn-success">Modificar</a>
			      </td>
			      <td>

			      		<a class="btn btn-danger" href="<?=url_base?>cliente/delete&id=<?=$fila->id?>">Borrar</a>
			      </td>
			    </tr>
			<?php endforeach;?>
		<?php endif;?>
			  
		  	</tbody>
		</table>
	</div>
</div>
