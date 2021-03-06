
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Votacion</title>
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
   <link rel='shortcut icon' type='image/x-icon' href='assets/images/logoo.ico' />

	<!--script-->
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="funciones.js"></script>	
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
	                              		<li><a href="#personero" data-toggle="tab">Personeros<?php $userId=$_SESSION['user']->id ?></a></li>
	                              		<li><a href="#comptroller" data-toggle="tab">Contralores</a></li>
	                              		<li><a href="#lobbyist" data-toggle="tab">Cabildantes</a></li>
	                          		</ul>
	                          	</div>
	                          	<h3 class="text-center">Bienvenido <b><?php echo $_SESSION['user']->name ?><b></h3>
	                          	<div class="tab-content">
	                          		<div class="tab-pane" id="personero">
	                          			<h4 class="info-text">Escoja Un Personero</h4>
	                          				<div class="row">
	                          					<div class="col-sm-10 col-sm-offset-1">
	                          						<?php 
														foreach ($opciones as $op) {
														if ($op['candidatetype_name'] == 'Voto en blanco P') {

													?>


		                          						<div class="col-sm-4">
		                          							<div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
		                          								<div class="choice" data-toggle="wizard-radio">
		                          									<input type="radio" name="name" value="Design">
		                          										<div style="height: 40%;" onclick="votar(<?php echo $op['id']?>);">
		                                                    				<img style="width: 150px; height: 150px; border-radius: 50%; background-color: #fff;">
		                                                				</div>
		                                                				<br><br>
		                                                				<div class="card-body">
		                                                    				<h4><?php echo $op['candidate'];?></h4>
		                                                 				 </div>		
																</div>	
															</div>	
														</div>
													<?php
														}else{
													?>
														<div class="col-sm-4">
		                          							<div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
		                          								<div class="choice" data-toggle="wizard-radio">
		                          									<input type="radio" name="name" value="Design">
		                          										<div style="height: 40%;" onclick="votar(<?php echo $op['id']?>);">
		                          											<?php if ($op['photo'] != '') { ?>
		                                                    				<img style="width: 150px; height: 150px; border-radius: 50%;" src="data:image/png;base64,<?php echo base64_encode($op['photo']); ?>"><?php }else{ ?>
		                                                    					<div class="icon">	
                                      											<i class="fa fa-user"></i>
		                                                    					</div>
                                      											<?php }?>
		                                                				</div>
		                                                				<div class="card-body">
		                                                    				<h4><?php echo $op['candidate'];?></h4>
		                                                    				<h5><?php echo $op['code'];?></h5>
		                                                    				<h5>Tarjeton</h5>
		                                                 				 </div>		
																</div>	
															</div>	
														</div>
													<?php		
													}
													}
													?>	
												</div>	
											</div>	
									</div>
									<div class="tab-pane" id="comptroller">
										<h4 class="info-text">Escoja Un Contralor</h4>
										<div class="row">
										 	<div class="col-sm-10 col-sm-offset-1">
										 		<?php 
													foreach ($comptrollers as $opp) {
													if ($opp['candidatetype_name'] == 'Voto en blanco C') {
												?>
										 		 <div class="col-sm-4">
		                          							<div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
		                          								<div class="choice" data-toggle="wizard-radio">
		                          									<input type="radio" name="name" value="Design">
		                          										<div style="height: 40%;" onclick="vote(<?php echo $opp['id']?>);">
		                                                    				<img style="width: 150px; height: 150px; border-radius: 50%; background-color: #fff;">
		                                                				</div>
		                                                				<br><br>
		                                                				<div class="card-body">
		                                                    				<h4><?php echo $opp['candidate'];?></h4>
		                                                 				 </div>		
																</div>	
															</div>	
														</div>
										 		<?php
													}else{ 
												?>
												<div class="col-sm-4">
										 		 	<div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
										 		 		<div class="choice" data-toggle="wizard-radio">
										 		 			<div onclick="vote(<?php echo $opp['id']?>);">
										 		 				<?php if ($opp['photo'] != '') { ?>
	                                                    		<img style="width: 150px; height: 150px; border-radius: 50%;" src="data:image/png;base64,<?php echo base64_encode($opp['photo']); ?>">
	                                                    		<?php }else{ ?>
		                                                    					<div class="icon">	
                                      											<i class="fa fa-user"></i>
		                                                    					</div>
		                                                    	<?php }?>				
	                                                		</div>
	                                                		<div class="card-body">
	                                                			<h4><?php echo $opp['candidate'];?></h4>
		                                                    	<h5><?php echo $opp['code'];?></h5>
		                                                    	<h5>Tarjeton</h5>
		                                                    </div>	
	                                                	</div>	
										 		 	</div>
										 		</div>
										 		<?php		
													}
													}
												?>
										 	</div>	
										</div>	
									</div>
									<div class="tab-pane" id="lobbyist">
										<h4 class="info-text">Escoja Un Cabildante</h4>
										<div class="row">
											<div class="col-sm-10 col-sm-offset-1">
												<?php 
													foreach ($lobbyists as $oppp) {
													if ($oppp['candidatetype_name'] == 'Voto en blanco CB') {
												?>
												<div class="col-sm-4">
													<div class="card" style="width: 24rem; height:37rem; margin-bottom: 10%;">
														<div class="choice" data-toggle="wizard-radio">
															<div onclick="votes(<?php echo $oppp['id']?>);">
	                                                    		<img style="width: 150px; height: 150px; border-radius: 50%; background-color: #fff;">
	                                                		</div>
	                                                		<div class="card-body">
	                                                    		<h4><?php echo $oppp['candidate'];?></h4>
	                                                  		</div>
														</div>
													</div>	
												</div>
												<?php
													} else {
												?>
												<div class="col-sm-4">
													<div class="card" onclick="" style="width: 24rem; height:37rem; margin-bottom: 10%;">
														<div class="choice" data-toggle="wizard-radio">
															<div onclick="votes(<?php echo $oppp['id']?>);">
	                                                    		<?php if ($oppp['photo'] != '') { ?>
	                                                    			<img style="width: 150px; height: 150px; border-radius: 50%;" src="data:image/png;base64,<?php echo base64_encode($oppp['photo']); ?>">
	                                                    		<?php }else{ ?>
		                                                    					<div class="icon">	
                                      											<i class="fa fa-user"></i>
		                                                    					</div>
		                                                    	<?php }?>	
	                                                		</div>
	                                                		<div class="card-body">
	                                                    		<h4><?php echo $oppp['candidate'];?></h4>
		                                                    	<h5><?php echo $oppp['code'];?></h5>
		                                                    	<h5>Tarjeton</h5>
	                                                  		</div>
														</div>
													</div>	
												</div>
												<?php	
												}
												}
												?>
											</div>	
										</div>	
									</div>
								</div>
							<div class="wizard-footer height-wizard">
                            	<div class="pull-right">
                                	<input type='button' class='btn btn-next btn-fill btn-warning  btn-wd btn-sm' name='next' value='Siguiente' />
                                	<a href="../?controller=login&method=logout2&id=<?php echo $userId?>">	
                                	<input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finalizar' />
                                	</a>

                            	</div>
                            	<div class="pull-left">
                                	<input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Anterior' />
                            	</div>
                            	<div class="clearfix"></div>
                        	</div>		
						</div>	
							</form>	
					</div>	
				</div>	
			</div>	
		</div>	
	</div>	
</body>
<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>
</html>