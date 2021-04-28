<link rel="stylesheet" href="assets/css/estilos.css">
<div class="modal fade" id="basicModal<?php echo $course->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño">
          <h4 class="text-center">Editar Curso</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 
      <div class="modal-body">
        <form action="?controller=course&method=update" method="post" class="needs-validation" novalidate="">
          <input type="hidden" name="id" value="<?php echo $course->id ?>">



          <div class="card-body">
            <div class="row">

              <div class=" form-group col-md-6">
                <label>Codigo:</label>
                <input type="number" class="form-control" required="" name="code" value="<?php echo $course->code ?>">
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
                    if ($grade->id == $course->grade_idfk) {
                  ?>
                      <option selected value="<?php echo $grade->id ?>"><?php echo $grade->grade_name ?></option>

                    <?php
                    } else {
                    ?>
                      <option value="<?php echo $grade->id ?>"><?php echo $grade->grade_name ?></option>

                  <?php

                    }
                  }
                  ?>

                </select>
                <div class="invalid-feedback">
                  Olvidaste poner un grado
                </div>
              </div>

            </div>

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
            <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                          </div>
                    </div>
          </div>

        </form>
      </div>
    </div>

  </div>
</div>
</div>



<!-- JS Libraies -->
<script src="assets/bundles/sweetalert/sweetalert.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/sweetalert.js"></script>