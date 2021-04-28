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
              
            
                    <form action="?controller=user&method=resetpasswordChange" class="sign-in-form" method="POST">
                      <h2 class="title">Reestablece tu contraseña</h2>
                      <div class="input-field">
                        <i class="fas fa-key"></i>
                        <input type="password" placeholder="Contraseña Nueva" required name="currentPassword">
                      </div>
                      <div class="input-field">
                        <i class="fas fa-key"></i>
                        <input type="password" placeholder="Confirmar Contraseña" required name="newPassword">
                      </div>
                      <button type="submit" class="btn solid">Enviar</button>
                     </div>
                      <div class="social-media">
               <?php
              if (isset($error['errorMessage'])) {
            ?>    
                 <p class="tect-dark" ><?php echo $error['errorMessage'] ?></p>
            <?php   
              }
            ?>  
            </div>
                    </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">

          <div class="content">
            <h3>Cambio de Contraseña</h3>
          </div>
          <img src="assets/images/log.svg" class="image" alt="">
          
        </div>
        
      </div>
    </div>

    <script type="text/javascript" src="assets/js/appLogin.js"></script>
  </body>
</html>
