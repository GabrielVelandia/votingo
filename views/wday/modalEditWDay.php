<div class="modal fade" id="basicModal<?php echo $wdays->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <div class="card-header alert alert-primary col-md-12">
                      <h4>Actualizar Jornada</h4>
                </div>
              </div>
              
              <div class="modal-body">
                <form action="?controller=wday&method=update" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $wdays->id ?>" >
                    
                    

                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-12">
                          <label>Jornada:</label>
                          <input type="text" class="form-control" required="" name="wday_name" value="<?php echo $wdays->wday_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner una jornada
                          </div>
                        </div>
                    </div>
                  </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                          </div>
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