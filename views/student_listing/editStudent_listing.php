<div class="modal fade" id="basicModal<?php echo $student->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="modal-body">
                <form action="?controller=student_listing&method=update" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $student->id ?>" >
                    <div class="card-header alert alert-primary">
                      <h4>Actualizar Listado De Estudiante</h4>
                    </div>
                    

                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-12">
                          <label>Nombre Del Estudiante</label>
                          <input type="text" class="form-control" required="" name="user_idfk" value="<?php echo $student->name ?>">
                          <div class="invalid-feedback">
                            Olvidaste Cambiar El Nombre Del Estudiante
                          </div>
                        </div>

                      
                         <div class=" form-group col-md-12">
                          <label>Apellido Del Estudiante</label>
                          <input type="text" class="form-control" required="" name="user_idfk" value="<?php echo $student->last_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste Cambiar El Apellido Del Estudiante
                          </div>
                        </div>

                      
                         <div class=" form-group col-md-12">
                          <label>Documento Del Estudiante</label>
                          <input type="number" class="form-control" required="" name="user_idfk" value="<?php echo $student->document ?>">
                          <div class="invalid-feedback">
                            Olvidaste Cambiar El Documento Del Estudiante
                          </div>
                        </div>


                        <div class="form-group col-md-12">
                          <label>Curso:</label>
                          <input type="text" class="form-control" required="" name="course_idfk" value="<?php echo $student->code ?>">
                          <div class="invalid-feedback">
                            Olvidaste Cambiar El Curso Del Estudiante
                          </div>
                        </div>

                        <div class=" form-group col-md-12">
                          <label>Jornada</label>
                          <input type="text" class="form-control" required="" name="course_idfk" value="<?php echo $student->wday_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste Cambiar la Jornada Del Estudiante
                          </div>
                        </div>

                      </div>       
                    </div>
                       <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                          </div>
                    </div>
                   
                  </form>
              </div>
              </div>

            </div>
          </div>
        </div>