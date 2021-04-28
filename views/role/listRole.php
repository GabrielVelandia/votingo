
<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">


<!-- basic modal -->
<div class="modal fade m-auto" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño">
          <h4 class="text-center">Registrar Rol</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=role&method=save" method="POST"> 
          <div class="card-body">
            <div class="form-row">
                          
              <div class=" form-group col-md-12">
                <label>Nombre de Rol:</label>
                <input type="text" class="form-control" required="" name="role_name">
                <div class="invalid-feedback">
                  Olvidaste poner un nombre para el Rol
                </div>
              </div>

            </div>

            <div class="form-group">
              <button class="btn btn-outline-success btn-block">Registrar Rol</button> 
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
                  <h4>Listado de Roles</h4>
                    <button type="button" class="btn icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-plus-circle"></i> Agregar</button>
              </div>
              <div class="card-body">
              <div class="table-responsive">
              <table class="table table-striped" id="table-2">
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
                    <td><?php echo $role->id ?></td>
                    <td><?php echo $role->role_name ?></td>
                    <td>
                      <div class="card-body">
                        <a href="?controller=role&method=edit&id=<?php echo $role->id ?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal<?php echo $role->id ?>">
                          <i class="fas fa-pen"></i>
                        </a>
                      </div>
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
<?php foreach ($roles as $role) : ?>
<?php
  include 'modalEditRole.php';
?>
<?php endforeach ?>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>