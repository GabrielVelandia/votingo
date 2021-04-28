
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">


  <!-- basic modal -->
        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                 <form class="needs-validation" novalidate="" action="?controller=candidatetype&method=save" method="POST">
                    <div class="card-header alert alert-primary">
                      <h4>Actualizar Rol de Candidatura</h4>
                    </div> 
                    <div class="card-body">
                          <div class="form-group">
                          <label>Rol de Candidatura:</label>
                          <input type="text" class="form-control" required="" name="candidatetype_name">
                          <div class="invalid-feedback">
                            Campo Vacio, ingresa un Rol de Candidatura
                          </div>
                        </div>

                          <div class="form-group  d-flex justify-content-center">
                            <div class="modal-footer br">
                            <button class="btn btn-outline-success">Registrar Rol de Candidatura <i class="fas fa-plus"></i></button>
                            <button type="button" data-dismiss="modal" class="btn btn-icon icon-left btn-danger ml-2">Cancelar
                            <i class="far fa-window-close"></i></button>
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
        
<div class="main-content">
        <section class="section">

          <div class="section-body">
                <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Listado de Tipo de Candidato</h4>
                    <button type="button" class="btn btn-icon icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-user-plus"></i> Agregar</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="table-2">
                        <thead>
                          <tr>
                            <th># </th>
                            <th>Nombre</th>
                            <th>Acciones</th>

                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($CandidateTypes as $CandidateType) : ?>
                          <tr>
                            <td><?php echo $CandidateType->id ?></td>
                            <td><?php echo $CandidateType->candidatetype_name ?></td>

                            <td>
                              <span data-toggle="tooltip" data-placement="right" title="Editar Tipo de Candidato">
                                <a href="?controller=CandidateType&method=edit&id=<?php echo $CandidateType->id ?>" type="button" class="btn-icon btn btn-primary" data-toggle="modal" data-target="#basicModal<?php echo $CandidateType->id ?>"><i class="fas fa-edit"></i></a>
                              </span>
                            </td>

                            
                          </tr>
                          </tr>
                          <?php endforeach ?> 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </section>
  </div>
  
                      <?php foreach ($CandidateTypes as $CandidateType) : ?>
                         <?php
                          include 'modalEditCandidateType.php';
                          ?>
                      <?php endforeach ?>

  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>

