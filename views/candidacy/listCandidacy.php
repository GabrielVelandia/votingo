
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/styles/edit.css">
        
<div class="main-content">
        <section class="section">

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h2 class="text-center">Candidatura</h2>
                  </div>
                  <div class="card-body w-100">
                    <ul class="nav nav-pills content-justify-center d-flex" id="myTab3" role="tablist">
                      <li class="nav-item w-25 p-2 flex-fill bd-highlight">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                          aria-controls="home" aria-selected="true" size='23'>Personeros</a>
                      </li>
                      <li class="nav-item w-25 p-2 flex-fill bd-highlight">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                          aria-controls="profile" aria-selected="false">Contralor</a>
                      </li>
                      <li class="nav-item w-25 p-2 flex-fill bd-highlight">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                          aria-controls="contact" aria-selected="false">Cabildante</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-hover" id="table-1">
                                <thead >
                                  <tr>
                                    <th>Foto</th>
                                    <th>Nombre Estudiante</th>
                                    <th>Tipo de Candidato</th>
                                    <th>Grado</th>
                                    <th>Curso</th>
                                    <th>Propuestas</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($candidacies as $candidacy) :
                                  if ($candidacy->candidatetype_name=='Personero') { ?>
                                  <tr>
                                    <td>
                                    <?php if (isset($candidacy->photo)) {  ?><img style="width: 150px; height: 150px; border-radius: 50%;" src="data:image/jpeg;base64,<?php echo base64_encode($candidacy->photo); ?>"><?php }else{ ?>
                                      <p>SIN FOTO</p>
                                      <?php }?></td>
                                    <td><?php echo $candidacy->candidate; ?></td>
                                    <td><?php echo $candidacy->candidatetype_name; ?></td>
                                    <td><?php echo $candidacy->grade_name; ?></td>
                                    <td><?php echo $candidacy->code; ?></td>
                                    <td>
                                      
                                      <span data-toggle="tooltip" data-placement="right" title="Mostrar Propuestas">
                                        <a href="?controller=candidacy&method=getByIdProposal&id=<?php echo $candidacy->id ?>" type="button" class="btn btn-icon btn-warning"><i class="fas fa-address-book"></i></a>
                                      </span>
                                  </td>
                                  </tr>
                                <?php } ?>
                                  <?php endforeach ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                    
                      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-hover" id="table-2">
                                <thead >
                                  <tr>
                                    <th>Foto</th>
                                    <th>Nombre Estudiante</th>
                                    <th>Tipo de Candidato</th>
                                    <th>Grado</th>
                                    <th>Curso</th>
                                    <th>Propuestas</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($candidacies as $candidacy) :
                                  if ($candidacy->candidatetype_name=='Contralor') { ?>
                                  <tr>
                                    <td><?php if (isset($candidacy->photo)) {  ?><img style="width: 150px; height: 150px; border-radius: 50%;" src="data:image/png;base64,<?php echo base64_encode($candidacy->photo); ?>"><?php }else{ ?>
                                      <p>SIN FOTO</p>
                                      <?php }?></td>
                                    <td><?php echo $candidacy->candidate; ?></td>
                                    <td><?php echo $candidacy->candidatetype_name; ?></td>
                                    <td><?php echo $candidacy->grade_name; ?></td>
                                    <td><?php echo $candidacy->code; ?></td>
                                    <td>
                                        <span data-toggle="tooltip" data-placement="right" title="Mostrar Propuestas">
                                          <a href="?controller=candidacy&method=getByIdProposal&id=<?php echo $candidacy->id ?>" type="button" class="btn btn-icon btn-warning"><i class="fas fa-address-book"></i></a>
                                        </span>  
                                    </td>
                                  </tr>
                                  <?php } ?>
                                  <?php endforeach ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-3" style="width: 100%;">
                               <thead >
                                  <tr>
                                    <th>Foto</th>
                                    <th>Nombre Estudiante</th>
                                    <th>Tipo de Candidato</th>
                                    <th>Grado</th>
                                    <th>Curso</th>
                                    <th>Propuestas</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($candidacies as $candidacy) : 
                                  if ($candidacy->candidatetype_name=='Cabildante') { ?>
                                  <tr>
                                    <td><?php if (isset($candidacy->photo)) {  ?><img style="width: 150px; height: 150px; border-radius: 50%;" src="data:image/png;base64,<?php echo base64_encode($candidacy->photo); ?>"><?php }else{ ?>
                                      <p>SIN FOTO</p>
                                      <?php }?></td>
                                    <td><?php echo $candidacy->candidate; ?></td>
                                    <td><?php echo $candidacy->candidatetype_name; ?></td>
                                    <td><?php echo $candidacy->grade_name; ?></td>
                                    <td><?php echo $candidacy->code; ?></td>
                                    <td>
                                      <span data-toggle="tooltip" data-placement="right" title="Mostrar Propuestas">
                                        <a href="?controller=candidacy&method=getByIdProposal&id=<?php echo $candidacy->id ?>" type="button" class="btn btn-warning btn-md"><i class="fas fa-address-book"></i></a>
                                      </span>
                                  </td>
                                  </tr>
                                <?php } ?>
                                  <?php endforeach ?>
                                </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  

