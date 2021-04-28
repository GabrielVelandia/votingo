
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">


<!-- basic modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=user&method=save" method="POST">
          <div class="card-header alert alert-info">
            <h4>Registrar Administrador</h4>
          </div> 
          <div class="card-body">
            <div class="form-row">
                          
              <div class=" form-group col-md-6">
                <label class="font-weight-bold">Nombres:</label>
                <input type="text" class="form-control" required="" name="name">
                <div class="invalid-feedback">
                  Olvidaste poner un nombre
                </div>
              </div>

              <div class="form-group col-md-6">
                <label class="font-weight-bold">Apellidos:</label>
                <input type="text" class="form-control" required="" name="last_name">
                <div class="invalid-feedback">
                  Olvidaste poner un apellido
                </div>
              </div>

            </div>
            <div>

              <div class="form-group">
                <label class="font-weight-bold">N° de Documento:</label>
                <input type="text" class="form-control" required="" name="document">
                <div class="invalid-feedback">
                  Olvidaste poner tu identificación
                </div>
              </div>

              <div>
                <div class="form-group">
                <label class="font-weight-bold">N° de Celular:</label>
                <input type="text" class="form-control" required="" name="cellphone">
                <div class="invalid-feedback">
                  Introduce un número de celular
                </div>
              </div>

              <div class="form-group">
                <label class="font-weight-bold">Email</label>
                <input type="email" class="form-control" required="" name="email">
                <div class="invalid-feedback">
                  Oh no! este correo no es válido
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-outline-success btn-block mt-5">Registrar Usuario <i class="fas fa-user-check"></i></button> 
              </div>
                            
            </div>                  
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
        
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="card-header">
                    <h4>Listado de Administradores</h4>
              </div>
              <div class="card-body">
              <div class="table-responsive">
              <table class="table table-striped table-hover" id="table-2">
                <thead>
                  <tr>
    					      <th>Nombre</th>
    					      <th>Apellidos</th>
    					      <th>Identificación</th>
    					      <th>Celular</th>
    					      <th>Email</th>
    					      <th>Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user) : ?>
                  <tr>
                    <td class="font-weight-bold"><?php echo $user->name ?></td>
                    <td class="font-weight-bold"><?php echo $user->last_name ?></td>
                    <td class="font-weight-bold"><?php echo $user->document ?></td>
                    <td class="font-weight-bold"><?php echo $user->cellphone ?></td>
                    <td class="font-weight-bold"><?php echo $user->email ?></td>
                    <td class="font-weight-bold">
                      <?php  
  						      	 if ($user->status_name == 'Habilitado') {
    						      ?>
    							      <div class="badge badge-success badge-shadow"><?php echo $user->status_name ?></div>
    						      <?php  
    						      	}
    						      	elseif($user->status_name == 'Inhabilitado'){
    						      ?>
    							      <div class="badge badge-danger badge-shadow"><?php echo $user->status_name ?></div>
    						      <?php
    						      	}
    						      ?>
                    </td>
                    </tr>
                      <?php endforeach ?> 
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php foreach ($users as $user) : ?>
<?php
  include 'modalEditAdmin.php';
?>
<?php endforeach ?>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>

>





