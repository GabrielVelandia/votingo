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
              <a href="?controller=course&method=indexTwo" type="button" class="btn btn-icon icon-left btn-warning ">Cambiar Vista</a>
            </div>
                <ul class="nav nav-pills row justify-content-center w-100 ml-auto" id="myTab3" role="tablist">
                    
                    <li class="nav-item w-25">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true" size='23'>Jornada Mañana</a>
                    </li>
                    <li class="nav-item w-25">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Jornada Tarde</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($courses as $course) :
                                    if ($course->wday_name=='Mañana') {?> 
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="card card-statistic-1">
                                        <div class="card-icon l-bg-purple-dark">
                                            <?php echo $course->numberStudents ?>
                                        <i class="fas fa-user-graduate"></i>

                                        </div>
                                        <div class="card-wrap">
                                            <div class="padding-20">
                                                <div class="text-right">
                                                    <h3 class="font-light mb-0">
                                                        <i class="ti-arrow-up text-success"></i>
                                                        <?php echo $course->code ?>
                                                    </h3>
                                                    <span class="text-muted"><?php echo $course->grade_name ?></span>
                                                </div>
                                                <div class="btn-group mb-3 float-right" role="group" aria-label="Basic example">
                                                  <span data-toggle="tooltip" data-placement="left" title="Editar Curso">
                                                    <a href="?controller=course&method=edit&id=<?php echo $course->id ?>" data-toggle="modal" data-target="#basicModal<?php echo $course->id ?>" class="btn btn-icon btn-primary btn-mb" type="button"><i class="fas fa-pen"></i></a>
                                                  </span>
                                                  <span data-toggle="tooltip" data-placement="right" title="Mostrar Listado">
                                                    <a href="?controller=course&method=getByIdCourseEs&id=<?php echo $course->id ?>" type="button" class="btn btn-icon btn-warning btn-mb"><i class="fas fa-address-book"></i></a>
                                                  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($courses as $course):
                                    if ($course->wday_name == 'Tarde') {?>
                                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                      <div class="card card-statistic-1">
                                          <div class="card-icon l-bg-cyan-dark">
                                              <?php echo $course->numberStudents ?>
                                              <i class="fas fa-user-graduate"></i>
                                          </div>
                                          <div class="card-wrap">
                                              <div class="padding-20">
                                                  <div class="text-right">
                                                      <h3 class="font-light mb-0">
                                                          <i class="ti-arrow-up text-success"></i>
                                                          <?php echo $course->code ?>
                                                      </h3>
                                                      <span class="text-muted"><?php echo $course->grade_name ?></span>
                                                  </div>
                                                  <div class="btn-group mb-3 float-right" role="group" aria-label="Basic example">
                                                    <span data-toggle="tooltip" data-placement="left" title="Editar Curso">
                                                      <a href="?controller=course&method=edit&id=<?php echo $course->id ?>" data-toggle="modal" data-target="#basicModal<?php echo $course->id ?>" class="btn btn-icon btn-primary btn-mb" type="button" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>
                                                    </span>
                                                    <span data-toggle="tooltip" data-placement="right" title="Mostrar Listado">
                                                      <a href="?controller=course&method=getByIdCourseEs&id=<?php echo $course->id?>" type="button" class="btn btn-icon btn-warning btn-mb"><i class="fas fa-address-book"></i></a>
                                                    </span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php }?>
                                  <?php endforeach?>
                            </div>
                        </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
        
<?php foreach ($courses as $course): ?>
  <?php
include 'modalEditCourse.php';
?>
<?php endforeach?>
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>