<div class="content">	
	<div class="content-prepare">
    	<main class="container">
			<section class="col-md-12 text-center">
				<h1>Listado de Roles</h1>

				<div>
					<h2>Roles</h2>
					<a href="?controller=rol&method=add" class="btn btn-success">Agregar</a>
				</div>

				<section class="col-md-12 table-responsive">
					<table class="table table-striped table-hover">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Nombre</th>
					      <th>Acciones</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach ($roles as $role) : ?>
						    <tr>
						      <td><?php echo $role->ID_ROL ?></td>
						      <td><?php echo $role->NOMBRE_ROL ?></td>
						      
						
						      <td>
						      	<a href="?controller=rol&method=edit&id=<?php echo $role->ID_ROL ?>" class="btn btn-primary">Editar</a>
						      	
						      </td>
						    </tr>
						  <?php endforeach ?> 
					  </tbody>
					</table>
				</section>	
			</section>
		</main>
    </div>
</div>
