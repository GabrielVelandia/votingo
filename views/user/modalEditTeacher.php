<link rel="stylesheet" href="assets/css/estilos.css">
 <div class="modal fade" id="basicModal<?php echo $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content tamaño2">
              <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="text-center">Editar Docente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="modal-body p-1">
                <form action="?controller=user&method=updateTeacher" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $user->id ?>" >
                    <div class="card-body">
                      <div class="row">
                         <div class="col">
                          <label class="font-weight-bold">Nombres:</label>
                          <input type="text" class="form-control" required="" name="name" value="<?php echo $user->name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un nombre
                          </div>
                        </div>
                     
                        <div class="col">
                          <label class="font-weight-bold">Apellidos:</label>
                          <input type="text" class="form-control" required="" name="last_name" value="<?php echo $user->last_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un apellido
                          </div>
                        </div>

                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <label class="font-weight-bold">N° de Documento:</label>
                              <input type="text" class="form-control" required="" name="document" value="<?php echo $user->document ?>">
                              <div class="invalid-feedback">
                                Olvidaste poner tu identificación
                              </div>
                            </div>

                            <div>
                              <div class="col">
                              <label class="font-weight-bold">N° de Celular:</label>
                              <input type="text" class="form-control" required="" name="cellphone" value="<?php echo $user->cellphone ?>">
                              <div class="invalid-feedback">
                                Introduce un número de celular
                              </div>
                          
                        </div>
                      
                      </div>

                          <div class="col-12 mt-3">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" required="" name="email" value="<?php echo $user->email ?>">
                            <div class="invalid-feedback">
                              Oh no! este correo no es válido
                            </div>
                          </div>
                    </div>
                      <div class="form-group mt-4">
                        <button class="btn btn-outline-success btn-block mt-2">Actualizar Usuario <i class="fas fa-user-edit"></i></button> 
                      </div>
                    </div>
                   
                  </form>
              </div>
              </div>

            </div>
          </div>
        </div>