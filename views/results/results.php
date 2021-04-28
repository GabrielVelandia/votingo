<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">

  <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/css/demo.css" rel="stylesheet" />

  <!--script-->
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="funciones.js"></script> 
</head>
<body>
  <div class="main-content">
  <section class="section">
    <div class="section-body">

  <!--   Creative Tim Branding   -->
    <!--   Big container   -->
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
                <div class="wizard-container">
                  <div class="card wizard-card" data-color="orange" id="wizardProfile"> 
                    <form action="" method="post">
                      <div class="wizard-header">
                        <h3>
                                 <b>Resultados Electorales</b><br>
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
                                  <h4 class="info-text">Resultados De Los Personeros</h4>
                                    <div class="row">
                                      <div class="col-sm-10 col-sm-offset-1">
                                        <?php foreach ($results as $result) : 
                                          if ($result->candidatetype_name == 'Personero' || $result->candidatetype_name == 'Voto en blanco') {
                                        ?>
                                            <div class="col-sm-4">
                                            <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                                              <div class="choice">
                                                  <div class="icon">
                                                  <i class="fa fa-user"></i>
                                                    </div>
                                                            <div class="card-body">
                                                                <h4><?php echo $result->candidate ?></h4>
                                                                <h5>Total De Votos: <?php echo $result->number_votes ?></h5>
                                                             </div>   
                                                  </div>  
                                             </div>  
                                        </div>

                                         <?php } else { ?>
                                          <div class="col-sm-4">
                                            <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                                              <div class="choice">
                                                  <div class="icon">
                                                  <i class="fa fa-user"></i>
                                                    </div>
                                                            <div class="card-body">
                                                                <h4><?php echo $result->candidate ?></h4>
                                                                <h5><?php echo $result->code ?></h5>
                                                                <h5>Tarjeton</h5>
                                                                <h5>Total De Votos: <?php echo $result->number_votes ?></h5>
                                                             </div>   
                                                  </div>  
                                             </div>  
                                        </div>
                                      <?php } ?>
                                        <?php
                                            }
 
                                      ?>
                                        <?php endforeach ?> 
                        </div>  
                      </div>  
                  </div>
                  <div class="tab-pane" id="comptroller">
                    <h4 class="info-text">Resultados De Los Contralores</h4>
                    <div class="row">
                      <div class="col-sm-10 col-sm-offset-1">
                        <?php foreach ($results as $result) : 
                          if ($result->candidatetype_name == 'Contralor'  || $result->candidatetype_name == 'Voto en blanco') {
                        ?>
                        <?php if ($result->candidatetype_name== 'Voto en blanco') {?>
                                            <div class="col-sm-4">
                                            <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                                              <div class="choice">
                                                  <div class="icon">
                                                  <i class="fa fa-user"></i>
                                                    </div>
                                                            <div class="card-body">
                                                                <h4><?php echo $result->candidate ?></h4>
                                                                <h5>Total De Votos: <?php echo $result->number_votes ?></h5>
                                                             </div>   
                                                  </div>  
                                             </div>  
                                        </div>

                                         <?php } else { ?>
                         <div class="col-sm-4">
                          <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                            <div class="choice">
                              <div class="icon">
                                                          <i class="fa fa-user"></i>
                                                      </div>
                                                      <div class="card-body">
                                                        <h4><?php echo $result->candidate ?></h4>
                                                          <h5><?php echo $result->code ?></h5>
                                                          <h5>Tarjeton</h5>
                                                        </div> 
                                                        <h5>Total De Votos: <?php echo $result->number_votes ?></h5> 
                                                    </div>  
                          </div>
                        </div>
                        <?php
                      }
                          }
                        ?>
                        <?php endforeach ?> 
                      </div>  
                    </div>  
                  </div>
                  <div class="tab-pane" id="lobbyist">
                    <h4 class="info-text">Resultados De Los Cabildantes</h4>
                    <div class="row">
                      <div class="col-sm-10 col-sm-offset-1">
                        <?php foreach ($results as $result) : 
                          if ($result->candidatetype_name == 'Cabildante' || $result->candidatetype_name == 'Voto en blanco') {
                        ?>
                        <?php if ($result->candidatetype_name== 'Voto en blanco') {?>
                                            <div class="col-sm-4">
                                            <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                                              <div class="choice">
                                                  <div class="icon">
                                                  <i class="fa fa-user"></i>
                                                    </div>
                                                            <div class="card-body">
                                                                <h4><?php echo $result->candidate ?></h4>
                                                                <h5>Total De Votos: <?php echo $result->number_votes ?></h5>
                                                             </div>   
                                                  </div>  
                                             </div>  
                                        </div>

                                         <?php } else { ?>
                        <div class="col-sm-4">
                          <div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
                            <div class="choice">
                              <div class="icon">
                                                          <i class="fa fa-user"></i>
                                                      </div>
                                                      <div class="card-body">
                                                          <h4><?php echo $result->candidate ?></h4>
                                                          <h5><?php echo $result->code ?></h5>
                                                          <h5>Tarjeton</h5>
                                                          <h5>Total De Votos: <?php echo $result->number_votes ?></h5>
                                                        </div>
                            </div>
                          </div>  
                        </div>
                        <?php
                          }
                        }
                        ?>

                        <?php endforeach ?> 
                      </div>  
                    </div>  
                  </div>
                </div>
              </form> 
              <div class="wizard-footer height-wizard">
                              <div class="pull-right">
                                  <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente' />
                                  <a href="?controller=home">  
                                  <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finalizar' />
                                  </a>

                              </div>
                              <div class="pull-left">
                                  <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Anterior' />
                              </div>
                              <div class="clearfix"></div>
                          </div>    
            </div>  
          </div>  
        </div>  
      </div>  
    
  </div>
  </div>
  </section>
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