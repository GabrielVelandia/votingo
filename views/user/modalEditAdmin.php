 <div class="modal fade" id="basicModal<?php echo $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="modal-body">
                <form action="?controller=user&method=updateAdmin" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $user->id ?>" >
                    <div class="card-header alert alert-primary">
                      <h4>Actualizar Administrador</h4>
                    </div>
                    

                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-6">
                          <label>Nombres:</label>
                          <input type="text" class="form-control" required="" name="name" value="<?php echo $user->name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un nombre
                          </div>
                        </div>
                     
                        <div class="form-group col-md-6">
                          <label>Apellidos:</label>
                          <input type="text" class="form-control" required="" name="last_name" value="<?php echo $user->last_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un apellido
                          </div>
                        </div>

                      </div>
                      
                         <div class="form-group">
                            <label>N° de Documento:</label>
                            <input type="text" class="form-control" required="" name="document" value="<?php echo $user->document ?>">
                            <div class="invalid-feedback">
                              Olvidaste poner tu identificación
                            </div>
                          </div>

                          <div>
                            <div class="form-group">
                            <label>N° de Celular:</label>
                            <input type="text" class="form-control" required="" name="cellphone" value="<?php echo $user->cellphone ?>">
                            <div class="invalid-feedback">
                              Introduce un número de celular
                            </div>
                          </div>

                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required="" name="email" value="<?php echo $user->email ?>">
                            <div class="invalid-feedback">
                              Oh no! este correo no es válido
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