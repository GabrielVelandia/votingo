<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

<!-- basic modal -->
<div class="modal fade m-auto" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño">
          <h4 class="text-center">Registrar Jornada</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body m-1">
        <form class="needs-validation" novalidate="" action="?controller=WDay&method=save" method="POST">
          
          <div class="card-body">
            <div class="form-row">

              <div class=" form-group col-md-12">
                <label>Nombre De La Jornada :</label>
                <input type="text" name="wday_name" class="form-control" required="">
                <div class="invalid-feedback">
                  Olvidaste poner un nombre de una jornada
                </div>
              </div>

            </div>
            </div>
             <div class="modal-footer">
                  <button type="submit" id="btnGuardar" class="btn btn-success btn-block">Registrar Jornada</button>
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
              <h4>Listado de Jornada</h4>
              <button type="button" class="btn btn-icon icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-plus"></i> Agregar</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-2">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Jornada</th>
                      <th>acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($working_day as $wdays) : 

                        if ($wdays->wday_name=="Mañana" || $wdays->wday_name=="Tarde") {
                        ?>
                      <tr>
                        <td>
                          <?php echo $wdays->id ?>
                        </td>
                        <td><?php echo $wdays->wday_name ?></td>
                        <td>
                          <div class="card-body">
                            <a href="?controller=WDay&method=edit&id=<?php echo $wdays->id ?>" data-toggle="modal" data-target="#basicModal<?php echo $wdays->id ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-pen"></i></a>
                            <a href="?controller=wday&method=delete&id=<?php echo $wdays->id ?>" type="button" class="btn btn-icon" style="background-color: #ea4038; color: #fff;"><i class="fas fa-trash-alt"></i></a>
                          </div>
                        </td>
                      </tr>
                        <?php  
                        }
                      ?>                      
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

                      <?php foreach ($working_day as $wdays) : ?>
                       <?php
                        include 'modalEditWDay.php';
                        ?>
                      <?php endforeach ?>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>