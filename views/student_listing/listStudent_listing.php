
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">


	<!-- basic modal -->
<div class="modal fade m-auto" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño">
        <h4 class="text-center">Registrar Estudiante</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=grade&method=save" method="POST">
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Estudiante:</label>
                <select name="user_idfk" class="form-control select2">
                  <option value="">Seleccione...</option>
<?php
                foreach ($users as $user) {
?>
                  <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
<?php
                }
?>              
                </select>
                <div class="invalid-feedback">
                   No Puedes Dejar Este Campo Vacio
                </div>
              </div>
              <div class="form-group col-md-6">
                <label>Curso:</label>
                <select name="level_idfk" class="form-control">
                  <option value="">Seleccione...</option>
<?php
              foreach ($courses as $course) {
?>
                  <option value="<?php echo $course->id ?>"><?php echo $course->code ?></option>
<?php

              }
?>
                </select>
                <div class="invalid-feedback">
                  Olvidaste Seleccionar Un Nivel
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
        
<div class="main-content">
        <section class="section">

          <div class="section-body">
          	 <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Listado De Estudiantes</h4>
                    <button type="button" class="btn btn-icon icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-user-plus"></i> Agregar</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="table-2">
                        <thead>
                          <tr>
                          <th>#</th>
  					                 <th>Nombre Del Estudiante</th>
                             <th>Apellido Del Estudiante</th>
                             <th>Documento</th>
  					                 <th>Curso</th>
                             <th>Jornada</th>
              					     <th>acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($students as $student) : ?>
                          <tr>
                            <td>
                              <?php echo $student->id ?>
                            </td>
                            <td><?php echo $student->name ?></td>
                            <td ><?php echo $student->last_name ?></td>
                            <td><?php echo $student->document ?></td>
                            <td>
                              	<?php echo $student->code ?>
                            </td>
                            <td><?php echo $student->wday_name ?></td>

                            
                            <td>
                              <div class="card-body">
                        
                                <a href="?controller=student_listing&method=edit&id=<?php echo $student->id ?>" type="button" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#basicModal<?php echo $student->id ?>"><i class="fas fa-pen"></i></a>
                              <a href="?controller=student_listing&method=delete&id=<?php echo $student->id ?>" type="button" class="btn btn-icon  btn-dark"><i class="fas fa-trash-alt"></i></a>
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

  <?php foreach ($students as $student) :
      
          include 'editStudent_listing.php';
      ?>
  <?php endforeach ?>
  
  <!-- JS Libraies -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/cleave-js/dist/cleave.min.js"></script>
  <script src="assets/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>

