<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Get Shit Done Bootstrap Wizard by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">

  <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-color: #f1f3f4">
    <!--   Creative Tim Branding   -->
          


    <!--   Big container   -->
    <div class="container">

        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="" method="post">
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                      <div class="wizard-header">
                          <h3>
                             <b>Elecciones</b><br>
                          </h3>
                          <div>
                            <div class="logo-container">

                            <img class="logo" src="assets/img/logoo.png">
                          </div> 
                      </div>
                      </div>

            <div class="wizard-navigation">
              <ul>
                              <li><a href="#personero" data-toggle="tab">Personeros</a></li>
                              <li><a href="#comptroller" data-toggle="tab">Contralores</a></li>
                              <li><a href="#lobbyist" data-toggle="tab">Cabildantes</a></li>
                          </ul>

            </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="personero">
                                <h4 class="info-text">Escoja Un Personero</h4>
                                  <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <?php
                                          foreach ($candidacies as $candidacy) :
                                            if ($candidacy->candidatetype == 'Personero') {
                                      ?>
                                      <div class="col-sm-4">
                                        <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                                            <div class="choice" data-toggle="wizard-radio">
                                              <input type="radio" name="name" value="Design">
                                              <input type="hidden" name="candidacy_idfk" value="<?php echo $candidacy->id ?>">
                                             <a href="?controller=voting&method=update&id=<?php echo $candidacy->id ?>">
                                              <div class="icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                              </a>  
                                                  <div class="card-body">
                                                    <h4><?php echo $candidacy->Candidate?></h4>
                                                    <h5><?php echo $candidacy->code?></h5>
                                                    <h5>Tarjeton</h5>
                                                  </div>
                                            </div>
                                          </div>
                                        </div>
                                        <?php
                                            }
 
                                      ?>
                                      <?php endforeach  ?>
                                        
                                      </div>

                                     </div>
                                    </div>

                                   <div class="tab-pane" id="comptroller">
                                <h4 class="info-text">Escoja Un Contralor</h4>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <?php
                                          foreach ($candidacies as $candidacy) :
                                            if ($candidacy->candidatetype == 'Contralor') {
                                      ?>
                                      <div class="col-sm-4">
                                        <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                                            <div class="choice" data-toggle="wizard-radio">
                                              <input type="radio" name="jobb" value="Design">
                                              <a href="?controller=voting&method=update&id=<?php echo $candidacy->id ?>">
                                                <div class="icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                               </a> 
                                                  <div class="card-body">
                                                    <h4><?php echo $candidacy->Candidate?></h4>
                                                    <h5><?php echo $candidacy->code?></h5>
                                                    <h5>Tarjeton</h5>
                                                  </div>
                                            </div>
                                          </div>
                                        </div>
                                        <?php
                                            }
 
                                      ?>
                                      <?php endforeach  ?>
                                        </div>
                                       </div>
                                      </div> 

                            <div class="tab-pane" id="lobbyist">
                                <h4 class="info-text">Escoja Un Cabildante</h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <?php
                                          foreach ($candidacies as $candidacy) :
                                            if ($candidacy->candidatetype == 'Cabildante') {
                                      ?>
                                      <div class="col-sm-4">
                                        <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                                            <div class="choice" data-toggle="wizard-radio">
                                              <input type="radio" name="jobb" value="Design">
                                                <div class="icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                  <div class="card-body">
                                                    <h4><?php echo $candidacy->Candidate?></h4>
                                                    <h5><?php echo $candidacy->code?></h5>
                                                    <h5>Tarjeton</h5>
                                                  </div>
                                            </div>
                                          </div>
                                        </div>
                                        <?php
                                            }
 
                                      ?>
                                      <?php endforeach  ?>
                                        </div>
                                       </div>
                                      </div> 
                                     </div>      
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente' />
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finalizar' />

                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

</div>

</body>

  <!--   Core JS Files   -->
  <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="assets/js/gsdk-bootstrap-wizard.js"></script>

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="assets/js/jquery.validate.min.js"></script>

</html>
