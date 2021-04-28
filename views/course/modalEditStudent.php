 <link rel="stylesheet" href="assets/css/estilos.css">
 <div class="modal fade" id="basicModal<?php echo $dat->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content tamaño2">
              <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="text-center">Editar Estudiante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               
              <div class="modal-body">
                <form action="?controller=user&method=updateStudent" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $dat->id ?>" > 
                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-6">
                          <label class="font-weight-bold">Nombres:</label>
                          <input type="text" class="form-control" required="" name="name" value="<?php echo $dat->name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un nombre
                          </div>
                        </div>
                     
                        <div class="form-group col-md-6">
                          <label class="font-weight-bold">Apellidos:</label>
                          <input type="text" class="form-control" required="" name="last_name" value="<?php echo $dat->last_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un apellido
                          </div>
                        </div>

                      </div>
                      
                         <div class="form-group">
                            <label class="font-weight-bold">N° de Documento:</label>
                            <input type="text" class="form-control" required="" name="document" value="<?php echo $dat->document ?>">
                            <div class="invalid-feedback">
                              Olvidaste poner tu identificación
                            </div>
                          </div>

                          <div>
                            <div class="form-group">
                            <label class="font-weight-bold">N° de Celular:</label>
                            <input type="text" class="form-control" required="" name="cellphone" value="<?php echo $dat->cellphone ?>">
                            <div class="invalid-feedback">
                              Introduce un número de celular
                            </div>
                          </div>

                          <div class="row p-1">
                            <div class="col">
                                <label class="font-weight-bold">Email:</label>
                                <input type="email" class="form-control" required="" name="email" value="<?php echo $dat->email ?>">
                                <div class="invalid-feedback">
                                  Oh no! este correo no es válido
                                </div>
                            </div>
                            <div>


                            <div class="col">
                                <label>Curso:</label>
                                <select name="course_idfk" class="form-control">
                                    <option value="" disabled="">Seleccione...</option>
                                    <?php
                                    foreach ($coursesJ as $course) {
                                      if ($course->id == $dat->course_idfk) {
                                    ?>
                                      <option selected name="course_idfk" value="<?php echo $course->id ?>"><?php echo $course->code ?> - <?php echo $course->curso ?></option>
                                    <?php 
                                }
                                else {
                            ?>
                                      <option name="course_idfk" value="<?php echo $course->id ?>"><?php echo $course->code ?> - <?php echo $course->curso ?></option>
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
                    </div>
                      <div class="form-group">
                        <button class="btn btn-outline-success btn-block mt-5">Actualizar Usuario <i class="fas fa-user-edit"></i></button> 
                      </div>
                    </div>
                   
                  </form>
              </div>
              </div>

            </div>
          </div>
        </div>