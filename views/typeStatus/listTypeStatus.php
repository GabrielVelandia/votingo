
<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">


<!-- basic modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
          <div class="modal-content tamaño2">
            <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="text-center">Registrar Tipo Estado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=typeStatus&method=save" method="POST">
          <div class="card-body">
            <div class="form-row">
                          
              <div class=" form-group col-md-12">
                <label>Nombre de Tipo Estado:</label>
                <input type="text" class="form-control" required="" name="typestatus_name">
                <div class="invalid-feedback">
                  Olvidaste poner un nombre para el Estado
                </div>
              </div>

            </div>

            <div class="form-group">
              <button class="btn btn-success btn-block">Registrar Tipo Estado</button> 
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
                  <h4>Listado de Tipo Estados</h4>
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
                  <?php foreach ($typeStatuses as $typeStatus) : ?>
                  <tr>
                    <td><?php echo $typeStatus->id ?></td>
                    <td><?php echo $typeStatus->typestatus_name ?></td>
                    <td>
                      <div class="card-body">
                        <a href="?controller=typeStatus&method=edit&id=<?php echo $typeStatus->id ?>" type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#basicModal<?php echo $typeStatus->id ?>">
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
<?php foreach ($typeStatuses as $typeStatus) : ?>
<?php
  include 'modalEditTypeStatus.php';
?>
<?php endforeach ?>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>