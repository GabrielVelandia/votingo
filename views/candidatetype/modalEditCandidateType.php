<div class="modal fade" id="basicModal<?php echo $CandidateType->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <div class="card-header alert alert-primary col-md-12">
                      <h4>Actualizar Usuario</h4>
                </div>
              </div>
              
              <div class="modal-body">
                <form action="?controller=CandidateType&method=update" method="post" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $CandidateType->id ?>" >
                    
                    

                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-12">
                          <label>Tipo de Candidatura</label>
                          <input type="text" class="form-control" required="" name="candidatetype_name" value="<?php echo $CandidateType->candidatetype_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un nombre
                          </div>
                        </div>
                    </div>
                      <div class="form-group col-12  d-flex justify-content-center m-auto">
                           <div class="modal-footer ">
                              <!-- <button class="btn btn-outline-success">Actualizar Rol de Candidatura <i class="fas fa-user-edit"></i></button>  -->
                               
                                    <button class="btn btn-outline-success" id="swal-2">Actualizar Rol de Candidatura <i class="fas fa-user-edit"></i></button>
                               
                                     <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Volver <i class="fas fa-arrow-left"></i></button>
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