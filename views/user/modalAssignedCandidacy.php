<!-- Modal with form -->
<link rel="stylesheet" href="assets/css/estilos.css">
        <div class="modal fade" id="exampleModal<?php echo $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content tamaño2">
              <div class="modal-header card-header alert alert-primary text-center tamaño">
                <h4 class="modal-title" id="formModal">Asignar una candidatura</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> 
              <div class="modal-body">
                 <input type="hidden" class="form-control" required="" name="id" value="<?php echo $user->idsl ?>">
                <form action="?controller=user&method=CandidacyStudent" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <h5 class="font-weight-bold">Estudiante: <span class="text-success"><?php echo $user->name;  ?></span></h5>
                          

                        <div class="form-group">
                          <div class="fallback">
                          <label class="font-weight-bold">Foto:</label>
                          <input name="photo" type="file" class="form-control">
                          </div>                         
                        </div>
                    
                      <div class="form-group mt-3">
                        <label class="font-weight-bold">Candidaturas:</label>
                        <select name="candidatetype_idfk" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php
                            foreach ($cTypes as $cType) {

                            ?>
                              <option value="<?php echo $cType->id ?>"><?php echo $cType->candidatetype_name ?></option>
                            <?php

                            }
                            ?>
                          </select>
                        <div class="invalid-feedback">
                          Olvidaste poner una Candidatura
                        </div>                  
                    </div>
                  </div>

                  <input type="hidden" class="form-control" required="" name="studentlist_idfk" value="<?php echo $user->idsl ?>">

                  <input type="hidden" class="form-control" required="" name="user_idfk" value="<?php echo $user->id ?>">
                  <input type="hidden" class="form-control" required="" name="name" value="<?php echo $user->name ?>">
                  <input type="hidden" class="form-control" required="" name="email" value="<?php echo $user->email ?>">

                  <div class="form-group">
                  <button class="btn btn-outline-success btn-block mt-5">Postular Estudiante<i class="fas fa-user-check"></i></button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>