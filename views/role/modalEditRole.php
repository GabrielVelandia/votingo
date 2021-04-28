 <div class="modal fade" id="basicModal<?php echo $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content tamaño2">
            <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="text-center">Actualizar Rol</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              
              <div class="modal-body">
                <form action="?controller=role&method=update" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $role->id ?>" >
                
                    

                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-12">
                          <label>Nombre de Rol:</label>
                          <input type="text" class="form-control" required="" name="role_name" value="<?php echo $role->role_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner el nombre de Rol
                          </div>
                        </div>

                      </div>
                      <div class="form-group">
                          <button class="btn btn-outline-success btn-block">Actualizar Rol</button> 
                        </div>
                    </div>
                   
                  </form>
              </div>
              </div>

            </div>
          </div>
        </div>