
<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">


        
<div class="main-content">
  <section class="section">
    <div class="section-body">
    <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $_SESSION['user']->name ?>  <?php echo $_SESSION['user']->last_name ?></a>
                      </div>
                      <div class="author-box-job"><?php echo $_SESSION['user']->rol ?></div>
                    </div>
                    <div class="text-center mt-4">
                      <h5 class="text-dark">Detalles Personales</h5>
                    <div class="card-body">
                      <div class="py-1">
                        <p class="clearfix">
                          <span class="float-left font-weight-bold">
                            Identificación
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $_SESSION['user']->document ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left font-weight-bold">
                            N° Celular
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $_SESSION['user']->cellphone ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left font-weight-bold">
                            Email
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $_SESSION['user']->email ?>
                          </span>
                        </p>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">Editar información personal</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Cambiar Contraseña</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                          <div class="card-header">
                            <h4><span class="text-info"><?php echo $_SESSION['user']->rol ?></span> : <?php echo $_SESSION['user']->name ?> <?php echo $_SESSION['user']->last_name ?></h4>
                          </div>
                        <form action="?controller=user&method=updateProfile" method="post" class="needs-validation">
                          <input type="hidden" name="id" value="<?php echo $_SESSION['user']->id ?>">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Nombres</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['user']->name ?>">
                                <div class="invalid-feedback">
                                  Campo vacio, introduce un nombre
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" name="last_name" value="<?php echo $_SESSION['user']->last_name ?>">
                                <div class="invalid-feedback">
                                  Campo vacio, Introduce un apellido
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Número de Identificación</label>
                                <input type="number" class="form-control" name="document" value="<?php echo $_SESSION['user']->document ?>">
                                <div class="invalid-feedback">
                                  Campo vacio, introduce un Documento
                                </div>
                              </div>
                              <div class="form-group col-md-5 col-12">
                                <label>Número de celular</label>
                                <input type="number" class="form-control" name="cellphone" value="<?php echo $_SESSION['user']->cellphone ?>">
                                <div class="invalid-feedback">
                                  Campo vacio, Introduce un Numero 
                                </div>
                              </div>
                              <div class="form-group col-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['user']->email ?>">
                                  <div class="invalid-feedback">
                                  Campo vacio, introduce un correo electronico
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary">Guardar Cambios</button>
                          </div>
                          <p><span class="font-weight-bold">Recuerda,</span> Si modificas tus datos tu sesión caducará</p>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                          <form action="?controller=user&method=resetpassword" method="post" class="needs-validation">
                          <div class="card-header">
                            <h4><span class="text-info"><?php echo $_SESSION['user']->rol ?></span> : <?php echo $_SESSION['user']->name ?> <?php echo $_SESSION['user']->last_name ?></h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <h6 class="font-weight-bold text-dark">Contraseña predeterminada</h6>
                                <input type="text" class="form-control col-12" name="currentPassword" value="<?php echo $_SESSION['user']->password ?>">
                                <div class="invalid-feedback">
                                  Campo vacio, introduce un nombre
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <h6 class="font-weight-bold text-dark">Contraseña Nueva</h6>
                                <input type="text" class="form-control col-12" name="newPassword">
                                <div class="invalid-feedback">
                                  Campo vacio, introduce una clave
                                </div>
                              </div>
                            </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary">Guardar Cambios</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </section>
</div>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>