
<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">


<!-- basic modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
          <div class="modal-content tamaño2">
            <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="text-center">Actualizar Estado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=status&method=save" method="POST">
          
          <div class="card-body">
            <div class="form-row">
                          
              <div class=" form-group col-md-6">
                <label>Nombre de Estado:</label>
                <input type="text" class="form-control" required="" name="status_name">
                <div class="invalid-feedback">
                  Olvidaste poner un nombre para el Estado
                </div>
              </div>

              <div class=" form-group col-md-6">
                <label>Tipo de Estado:</label>
                <select class="form-control" required="" name="typestatus_idfk">
                            <option value="" disabled="">Seleccione...</option>
                            <?php 
                              foreach($typeStatuses as $typeStatus){

                                if ($typeStatus->id == $status->typestatus_idfk) {
                            ?>
                                  <option selected disabled value="<?php echo $typeStatus->id ?>"> <?php echo $typeStatus->typestatus_name ?></option>
                            <?php 
                                }
                                else {
                            ?>
                                  <option value="<?php echo $typeStatus->id ?>"> <?php echo $typeStatus->typestatus_name ?></option>
                            <?php
                                }
                              }
                            ?>
                          </select>
                <div class="invalid-feedback">
                  Olvidaste poner un tipo para el Estado
                </div>
              </div>

            </div>

            <div class="form-group">
              <button class="btn btn-success btn-block">Registrar Estado</button> 
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
                  <h4>Listado de Estados</h4>
                    <button type="button" class="btn icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-plus-circle"></i> Agregar</button>
                    <a href="?controller=typeStatus" type="button" class="btn btn-icon icon-left btn-warning ">Tipo Estado</a>
              </div>
              <div class="card-body">
              <div class="table-responsive">
              <table class="table table-striped table-hover" id="table-2">
                <thead>
                  <tr>
                    <th>#</th>
    				<th>Nombre</th>
    				<th>Tipo de Estado</th>
    				<th>Acciones</th>	      	      
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($statuses as $status) : ?>
                  <tr>
                    <td><?php echo $status->id ?></td>
                    <td><?php echo $status->status_name ?></td>
                    <td><?php echo $status->name_type ?></td>
                    <td>
                      <div class="card-body">
                        <a href="?controller=status&method=edit&id=<?php echo $status->id ?>" type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#basicModal<?php echo $status->id ?>">
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
<?php foreach ($statuses as $status) : ?>
<?php
  include 'modalEditStatus.php';
?>
<?php endforeach ?>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>