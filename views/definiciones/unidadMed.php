<div class="row mx-2 my-2">
   <div class="card rounded-1 mx-auto">
		<div class="card-header">
            <h4 class="mb-0">Generar Unidad Medida</h4>
    	</div>
       	<div class="card-body">
	    	<form action="<?=url_base?>unidadMed/add" class="form-inline" method="POST">
	    			<div class="form-group mx-2 ">
	   					<label for="name">Nombre</label>
						<input type="text" name="nombre" id="name" class="form-control form-control-sm">
					</div>

					<button type="submit" name="generar"  class="btn btn-success">Generar</button>
				</form>
			</div>
		</div>
	</div>
</div>
	<!--FIN DE FORMULARIO-->
<div class="row2 ">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-md-1 my-2 table-responsive mx-auto">
		<!--TABLA CON DATOS DE ARTICULOS CARGADOS-->
		<table class="table table-bordered table-striped text-center">
			<!--EMCABEZADO DE TABLA-->
  			<thead>
			    <tr>
			      <th scope="col">Codigo</th>
			      <th scope="col">nombre</th>
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
			      <td><?=$fila->nombre?></td>
			      <td>
			      		<a href="<?=url_base?>unidadMed/showMod&id=<?=$fila->id?>" class="btn btn-success" >Modificar</a>
			      </td>
			      <td>

			      		<a class="btn btn-danger" href="<?=url_base?>unidadMed/delete&id=<?=$fila->id?>">Borrar</a>
			      </td>
			    </tr>
			    <?php endforeach;?>
			<?php endif;?>
		  	</tbody>
		</table>
	</div>
</div>
