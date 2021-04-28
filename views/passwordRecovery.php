<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <link rel="icon" href="assets/images/logoo.ico">

    <title>SI Votingo - Recuperar Contraseña</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          
            
            <div class="social-media">
              
              <?php
                  if (isset($_SESSION['user'])) {
              ?>    
                    <div class="card-container">
                      <p class="text-paragraph" > <?php echo $error['errorMessage'] ?></p>
                    </div>
              <?php   
                    
                  }
                  else{
              ?>
                    <form action="?controller=login&method=passwordRecovery " class="sign-in-form" method="POST">
                      <h2 class="title">Reestablece tu contraseña</h2>
                      <div class="input-field">
                        <i class="fas fa-address-card"></i>
                        <input type="number" placeholder="N° Documento" name="document">
                      </div>
                      <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="E-mail" name="email">
                      </div>
                      <button type="submit" class="btn solid">Enviar</button>
                     </div>
                    </form>
                    <p class="tect-dark" ><?php echo $error['errorMessage'] ?></p>
              <?php
                  }
              ?>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">

          <?php   
            if (isset($_SESSION['user'])) {
          ?>    
              <div class="content">
                <h3>Cambio de Contraseña</h3>
              </div>
              <img src="assets/images/log.svg" class="image" alt="">
          <?php   
            }else{
          ?>  
              <img src="assets/images/log.svg" class="image" alt="">
          <?php
            }
          ?>
        </div>
        
      </div>
    </div>

    <script type="text/javascript" src="assets/js/appLogin.js"></script>
  </body>
</html>
