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

    <title>SI Votingo - Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="?controller=login&method=login" method="post" class="sign-in-form">
           
            <h2 class="title">Inicia Sesión</h2>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" name="document" placeholder="Documento" value="<?php echo isset($error['document']) ? $error['document'] : ''?>" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn solid">Ingresar</button>
              
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
          <form action="?controller=login&method=passwordRecovery " class="sign-up-form" method="POST">
            <h2 class="title">Reestablece tu contraseña</h2>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="number" placeholder="N° Documento" name="document" required>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="E-mail" name="email" required>
            </div>
            <button type="submit" class="btn solid">Enviar</button>
            
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
            <h3>¿Olvidaste tu contraseña?</h3>
            <p>
              Aquí puedes recuperarla.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Recuperar Contraseña
            </button>
          </div>
          <img src="assets/images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Iniciar Sesión</h3>
            <p>
              ¿Ya tienes una cuenta?
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Ingresa
            </button>
          </div>
          <img src="assets/images/registerPassword.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script type="text/javascript" src="assets/js/appLogin.js"></script>
  </body>
</html>
