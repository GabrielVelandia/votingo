<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/css/estilos.css">

<!-- basic modal -->
<div class="modal fade m-auto" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño">
          <h4 class="text-center">Registrar Curso</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body m-1">
        <form class="needs-validation" novalidate="" action="?controller=course&method=save" method="POST">
          <div class="card-body mb">
            <div class="form-row">

              <div class=" form-group col-md-6">
                <label>Codigo:</label>
                <input type="number" name="code" class="form-control" required="">
                <div class="invalid-feedback">
                  Olvidaste poner un codigo
                </div>
              </div>

              <div class="form-group col-md-6">
                <label>Grado:</label>
                <select name="grade_idfk" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                    foreach ($grades as $grade) {

                    ?>
                      <option value="<?php echo $grade->id ?>"><?php echo $grade->grade_name ?></option>
                    <?php

                    }
                    ?>
                  </select>
                <div class="invalid-feedback">
                  Olvidaste poner un grado
                </div>
              </div>

            </div>
            <div>

            <div class="row">
                <div class="col">
                <label>Director de Grupo:</label>
                <select name="user_idfk" class="form-control">
                  <option value="">Seleccione...</option>
                  <?php
                  foreach ($users as $user) {
                    if ($user->id == $course->user_idfk) {
                  ?>
                      <option selected value="<?php echo $user->id ?>"><?php echo $user->name ?></option>

                    <?php
                    } else {
                    ?>
                      <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>

                  <?php

                    }
                  }
                  ?>

                </select>
                <div class="invalid-feedback">
                  Olvidaste poner una Jornada
                </div>
              </div>
            
            <div class="col">
                <label>Jornada:</label>
                <select name="wday_idfk" class="form-control">
                  <option value="">Seleccione...</option>
                  <?php
                  foreach ($wdays as $wday) {
                    if ($wday->id == $course->wday_idfk) {
                  ?>
                      <option selected value="<?php echo $wday->id ?>"><?php echo $wday->wday_name ?></option>

                    <?php
                    } else {
                    ?>
                      <option value="<?php echo $wday->id ?>"><?php echo $wday->wday_name ?></option>

                  <?php

                    }
                  }
                  ?>

                </select>
                <div class="invalid-feedback">
                  Olvidaste poner una Jornada
                </div>
              </div>
            </div>
            </div>

            </div>
          </div>
                <div class="modal-footer">
                    <button type="submit" id="btnGuardar" class="btn btn-success btn-block">Registrar Curso</button>
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
              <h4>Listado de Cursos</h4>
               <button type="button" class="btn btn-icon icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-plus"></i>Agregar</button>
              <a href="?controller=course&method=index" type="button" class="btn btn-icon icon-left btn-warning ">Cambiar Vista</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="table-2">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Codigo</th>
                      <th>Grado</th>
                      <th>Director de Curso</th>
                      <th>Jornada</th>
                      <th>Proceso Electoral</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($courses as $course) : 
                        if ($course->code=="-1") {
                          
                        }else{
                          ?>
                      <tr>
                        <td>
                          <?php echo $course->id ?>
                        </td>
                        <td><?php echo $course->code ?></td>
                        <td>
                          <?php echo $course->grade_name ?>
                        </td>
                        <td>
                          <?php echo $course->Dt ?>
                        </td>
                        <td>
                          <?php echo $course->wday_name ?>
                        </td>
                        <td>
                          <?php if (empty($course->eprocess_idfk)) { ?>
                            <p>No iniciado</p>
                          <?php } else{ ?>
                            <?php echo $course->eprocess_idfk ?>
                          <?php } ?>
                        </td>
                        <td>
                          <?php echo $course->status_name ?>
                        </td>
                        <td>
                          <span data-toggle="tooltip" data-placement="left" title="Editar Curso">
                            <a href="?controller=course&method=edit&id=<?php echo $course->id ?>" data-toggle="modal" data-target="#basicModal<?php echo $course->id ?>" class="btn btn-icon btn-primary" type="button" ><i class="fas fa-pen"></i></a>
                          </span>
                          <span data-toggle="tooltip" data-placement="right" title="Mostrar Listado">
                            <a href="?controller=course&method=getByIdCourseEs&id=<?php echo $course->id ?>" type="button" class="btn btn-icon btn-warning" ><i class="fas fa-address-book"></i></a>
                          </span>
                                                    
                                                    
                                               
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
<?php foreach ($courses as $course) : ?>
  <?php
  include 'modalEditCourse.php';
  ?>
<?php endforeach ?>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>