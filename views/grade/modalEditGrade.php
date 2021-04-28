<div class="modal fade" id="basicModal<?php echo $grade->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="card-header alert alert-primary col-md-12">
          <h4>Actualizar Grado</h4>
        </div>
      </div>

      <div class="modal-body">
        <form action="?controller=grade&method=update" method="post" class="needs-validation" novalidate="">
          <input type="hidden" name="id" value="<?php echo $grade->id ?>">



          <div class="card-body">
            <div class="row">

              <div class=" form-group col-md-12">
                <label>Nombre Del Grado:</label>
                <input type="text" class="form-control" required="" name="grade_name" value="<?php echo $grade->grade_name ?>">
                <div class="invalid-feedback">
                  Olvidaste Digitar un Grado
                </div>
              </div>
            </div>
            <div class=" form-group col-md-12">
              <label>Nivel:</label>
              <select name="level_idfk" class="form-control">
                <option value="">Seleccione...</option>
                <?php
                foreach ($levels as $level) {
                  if ($level->id == $grade->level_idfk) {
                ?>
                    <option selected value="<?php echo $level->id ?>"><?php echo $level->level_name ?></option>

                  <?php
                  } else {
                  ?>
                    <option value="<?php echo $level->id ?>"><?php echo $level->level_name ?></option>

                <?php

                  }
                }
                ?>

              </select>
              <div class="invalid-feedback">
                Olvidaste Seleccionar Un Nivel
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