

 <link rel="stylesheet" href="assets/css/estilos.css">
 <div class="modal fade" id="basicModal<?php echo $dat->pId ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content tamaño2">
              <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="text-center">Editar Propuesta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               
              <div class="modal-body">
                <form class="needs-validation" novalidate="" action="?controller=candidacy&method=updateProposal" method="POST">
                  <input type="hidden" name="id" value="<?php echo $dat->pId ?>">
                  <div class="card-body">
                    <div class="form-group">           
                      <div class="form-group">
                        <label class="font-weight-bold">Titulo De La Propuesta:</label>
                        <input type="text" class="form-control" required="" name="proposal_tittle" value="<?php echo $dat->proposal_tittle ?>">
                        <div class="invalid-feedback">
                          Olvidaste poner un titulo
                        </div>
                      </div>

                    <div class="form-group">
                      <label class="font-weight-bold">Descripcion:</label>
                      <textarea type="text" class="form-control" required="" name="proposal_description" value = "<?php echo $dat->proposal_description ?>"><?php echo $dat->proposal_description ?></textarea>
                      <div class="invalid-feedback">
                        Olvidaste poner una descripcion
                      </div>
                    </div>

                  </div>
                  <div>

                  <div class="form-group">
                    <button class="btn btn-outline-success btn-block mt-5">Actualizar Propuesta <i class="fas fa-user-check"></i></button> 
                  </div>
                            
            </div>                  
          </div>
        </form>
              </div>
              </div>

            </div>
          </div>
        </div>



 