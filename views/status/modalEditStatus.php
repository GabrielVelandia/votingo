 <div class="modal fade" id="basicModal<?php echo $status->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content tamaño2">
            <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="text-center">Actualizar Estado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              
              <div class="modal-body">
                <form action="?controller=status&method=update" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $status->id ?>" >
                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-6">
                          <label>Nombre de Estado:</label>
                          <input type="text" class="form-control" required="" name="status_name" value="<?php echo $status->status_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un nombre de estado
                          </div>
                        </div>
                     
                        <div class="form-group col-md-6">
                          <label>Tipo de Estado:</label>
                          <select class="form-control" required="" name="typestatus_idfk">
                            <option value="" disabled="">Seleccione...</option>
                            <?php 
                              foreach($typeStatuses as $typeStatus){

                                if ($typeStatus->id == $status->typestatus_idfk) {
                            ?>
                                  <option selected disabled value="<?php echo $typeStatus->id ?>"> <?php echo $typeStatus->typestatus_name ?></option>
                            <?php 
                                }
                                else {
                            ?>
                                  <option value="<?php echo $typeStatus->id ?>"> <?php echo $typeStatus->typestatus_name ?></option>
                            <?php
                                }
                              }
                            ?>
                          </select>
                          <div class="invalid-feedback">
                            Olvidaste poner un Tipo de Estado:
                          </div>
                        </div>

                      </div>
                      <div class="form-group">
                          <button class="btn btn-success btn-block">Actualizar Estado</button> 
                        </div>
                    </div>
                   
                  </form>
              </div>
              </div>

            </div>
          </div>
        </div>