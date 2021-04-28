
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">


<!-- basic modal -->
<link rel="stylesheet" href="assets/css/estilos.css">
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño">     
            <h4>Registrar Estudiante</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=user&method=saveStudent" method="POST">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <label class="font-weight-bold">Nombres:</label>
                <input type="text" class="form-control" required="" name="name">
                <div class="invalid-feedback">
                  Olvidaste poner un nombre
                </div>
              </div>
 
              <div class="col">
                <label class="font-weight-bold">Apellidos:</label>
                <input type="text" class="form-control" required="" name="last_name">
                <div class="invalid-feedback">
                  Olvidaste poner un apellido
                </div>
              </div>
            </div>
              <div class="row mt-3">
                <div class="col">
                  <label class="font-weight-bold">N° de Documento:</label>
                  <input type="text" class="form-control" required="" name="document">
                  <div class="invalid-feedback">
                    Olvidaste poner tu identificación
                  </div>
                </div>

                <div>
                  <div class="col">
                  <label class="font-weight-bold">N° de Celular:</label>
                  <input type="text" class="form-control" required="" name="cellphone">
                  <div class="invalid-feedback">
                    Introduce un número de celular
                  </div>
                </div>
              </div>

              <div class="row p-3">
                <div class="col">
                    <label class="font-weight-bold">Email:</label>
                    <input type="email" class="form-control" required="" name="email">
                    <div class="invalid-feedback">
                      Oh no! este correo no es válido
                    </div>
                </div>
                <div>

                <div class="col">
                    <label>Curso:</label>
                    <select name="course_idfk" class="form-control scrollbar">
                        <option value="">Seleccione...</option>
                        <?php
                        foreach ($coursesJ as $course) {

                        ?>
                          <option name="course_idfk" value="<?php echo $course->id ?>"><?php echo $course->code ?> - <?php echo $course->curso ?></option>
                        <?php

                        }
                        ?>
                      </select>
                    <div class="invalid-feedback">
                      Olvidaste poner un grado
                    </div>
                  </div>
                  
              </div>
              <div class="col-12 mt-3">
                <button class="btn btn-outline-success btn-block mt-4">Registrar Usuario <i class="fas fa-user-check"></i></button> 
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
                    <h4>Listado de Estudiantes</h4>
                    <button type="button" class="btn btn-icon icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-user-plus"></i> Agregar</button>
              </div>
              <div class="card-body">
              <div class="table-responsive">
              <table class="table table-striped table-hover" id="table-2">
                <thead>
                  <tr>
    					      <th>Nombre</th>
    					      <th>Apellidos</th>
    					      <th>Identificación</th>
                    <th>Curso</th>
    					      <th>Celular</th>
    					      <th>Email</th>
    					      <th>Estado</th>
    					      <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user) : 
                    if ($user->code =="-1") {

                  }else{

                  ?> 
                  <tr>
                    <td class="font-weight-bold"><?php echo $user->name ?></td>
                    <td class="font-weight-bold"><?php echo $user->last_name ?></td>
                    <td class="font-weight-bold"><?php echo $user->document ?></td>
                    <td class="font-weight-bold"><?php echo $user->code ?></td>
                    <td class="font-weight-bold"><?php echo $user->cellphone ?></td>
                    <td class="font-weight-bold"><?php echo $user->email ?></td>
                    <td class="font-weight-bold">
                      <?php  
                       if ($user->status_name == 'Habilitado') {
                      ?>
                        <div class="badge badge-success badge-shadow"><?php echo $user->status_name ?></div>
                      <?php  
                        }
                        elseif($user->status_name == 'Inhabilitado'){
                      ?>
                        <div class="badge badge-danger badge-shadow"><?php echo $user->status_name ?></div>
                      <?php
                        }
                      ?>
                    </td>
                    <td>
 
                        <span data-toggle="tooltip" data-placement="left" title="Editar Usuario">
                          <a href="?controller=user&method=edit&id=<?php echo $user->id ?>" type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#basicModal<?php echo $user->id ?>"><i class="fas fa-user-edit"></i></a>
                        </span>
                         
                         <?php if ($user->role_name !=2 ) {?>
                            <span data-toggle="tooltip" data-placement="right" title="Asignar Candidatura">
                            <a href="?controller=user&method=getByStudentListId&id=<?php echo $user->idsl ?>" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?php echo $user->id ?>"><i class="far fa-plus-square"></i></a>
                            </span>
                          <?php }else{ ?>
                            <span data-toggle="tooltip" data-placement="right" title="Ya esta postulado">
                            <a href="#" type="button" class="btn btn disabled btn-dark"><i class="far fa-plus-square"></i></a>
                            </span>
                          <?php } ?>
                        

                      </td>
                    </tr>
                    <?php } ?>
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
<?php foreach ($users as $user) : ?>
<?php
  include 'modalEditStudent.php';
?>
<?php endforeach ?>
<?php foreach ($users as $user) : ?>
<?php
  include 'modalAssignedCandidacy.php';
?>
<?php endforeach ?>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>

>





