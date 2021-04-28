<div class="main-content">
  <section class="section">
    <div class="section-body d-flex justify-content-center ">
      <div class="col-7" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <form class="needs-validation" novalidate="" action="?controller=candidatetype&method=update" method="POST">
                  <input type="hidden" name="id" value="<?php echo $data[0]->id ?>" >
                    <div class="card-header alert alert-primary">
                      <h4>Actualizar Rol de Candidatura</h4>
                    </div>
                    

                    <div class="card-body">
                      
                      <div class="card-body">
                          <div class="form-group">
                          <label>Rol de Candidatura:</label>
                          <input type="text" class="form-control" required="" name="candidatetype_name" value="<?php echo $data[0]->candidatetype_name ?>">
                          <div class="invalid-feedback">
                            Campo Vacio, ingresa un Rol de Candidatura
                          </div>
                        </div>
                        <div class="form-group col-12  d-flex justify-content-center m-2">
                           <div class="modal-footer ">
                              <!-- <button class="btn btn-outline-success">Actualizar Rol de Candidatura <i class="fas fa-user-edit"></i></button>  -->
                               
                                    <button class="btn btn-outline-success" id="swal-2">Actualizar Rol de Candidatura <i class="fas fa-user-edit"></i></button>
                               
                              <button href="?controller=candidatetype"  class="btn btn-danger">Volver <i class="fas fa-arrow-left"></i></button>
                            </div>
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
    </div>
  </section>
</div>
  <!-- JS Libraies -->
  <script src="assets/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/sweetalert.js"></script>