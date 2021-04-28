 <div class="modal fade" id="basicModal<?php echo $typeStatus->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
  <div class="modal-dialog" role="document">
          <div class="modal-content tamaño2">
            <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="text-center">Actualizar Tipo Estado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              
              <div class="modal-body">
                <form action="?controller=typeStatus&method=update" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $typeStatus->id ?>" >
                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-12">
                          <label>Nombre de Tipo Estado:</label>
                          <input type="text" class="form-control" required="" name="typestatus_name" value="<?php echo $typeStatus->typestatus_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un nombre de estado
                          </div>
                        </div>

                      </div>
                      <div class="form-group">
                          <button class="btn btn-success btn-block">Actualizar Tipo de Estado</button> 
                        </div>
                    </div>
                   
                  </form>
              </div>
              </div>

            </div>
          </div>
        </div>