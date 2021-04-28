<!-- basic modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño"> 
      <h4>Registrar Propuesta</h4>    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=candidacy&method=saveProposal" method="POST">
          <input type="hidden" name="candidacy_idfk" value="<?php echo $candidateP[0]->id_candidato?>" >
          <div class="card-body">
            <div class="form-group">           
              <div class="form-group">
                <label class="font-weight-bold">Titulo De La Propuesta:</label>
                <input type="text" class="form-control" required="" name="proposal_tittle">
                <div class="invalid-feedback">
                  Olvidaste poner un titulo
                </div>
              </div>

              <div class="form-group">
                <label class="font-weight-bold">Descripcion:</label>
                <textarea type="text" class="form-control" required="" name="proposal_description"></textarea>
                <div class="invalid-feedback">
                  Olvidaste poner una descripcion
                </div>
              </div>

            </div>
            <div>

              <div class="form-group">
                <button class="btn btn-outline-success btn-block mt-5">Registrar Propuesta <i class="fas fa-user-check"></i></button> 
              </div>
                            
            </div>                  
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>