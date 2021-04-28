<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">



<!-- basic modal -->
<div class="modal fade m-auto" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño">
          <h4 class="text-center">Registrar Grado</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=grade&method=save" method="POST">
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Nombre Del Grado:</label>
                <input type="text" name="grade_name" class="form-control" required="">
                <div class="invalid-feedback">
                  No Puedes Dejar Este Campo Vacio
                </div>
              </div>
              <div class="form-group col-md-6">
                <label>Nivel:</label>
                <select name="level_idfk" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                    foreach ($levels as $level) {

                    ?>
                      <option value="<?php echo $level->id ?>"><?php echo $level->level_name ?></option>
                    <?php

                    }
                    ?>
                  </select>
                <div class="invalid-feedback">
                  Olvidaste Seleccionar Un Nivel
                </div>
              </div>
            </div>
            </div>

              <div class="modal-footer">
                 <button type="submit" id="btnGuardar" class="btn btn-success btn-block">Registrar</button>
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
              <h4>Listado de Grados</h4>
              <button type="button" class="btn btn-icon icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-plus"></i> Agregar</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="table-2">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Grado</th>
                      <th>Nivel</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($grades as $grade) : ?>
                      <tr>
                        <td>
                          <?php echo $grade->id ?>
                        </td>
                        <td>
                          <?php echo $grade->grade_name ?>
                        </td>
                        <td class="align-middle">
                          <?php echo $grade->level_name ?>
                        </td>
                        <td>
                            <a href="?controller=Grade&method=edit&id=<?php echo $grade->id ?>" data-toggle="modal" data-target="#basicModal<?php echo $grade->id ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-pen"></i></a>
                            <a href="?controller=grade&method=delete&id=<?php echo $grade->id ?>" type="button" class="btn btn-icon" style="background-color: #ea4038; color: #fff;"><i class="fas fa-trash-alt"></i></a>
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

<?php foreach ($grades as $grade) : ?>
  <?php
  include 'modalEditGrade.php';
  ?>
<?php endforeach ?>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>