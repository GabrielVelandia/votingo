<?php
 if (isset($_SESSION['user'])) {
  
?>

<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SI VOTINGO</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/css/style2.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/images/logoo.ico' />
  
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        
          
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"><span class="color11"><?php echo $_SESSION['user']->name ?></span> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              
              <a href="?controller=user&method=viewPorfile" class="dropdown-item has-icon"> <i class="far
										fa-user"></i>Mi Perfil
              </a> 
              <div class="dropdown-divider"></div>
              <a href="?controller=login&method=logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Cerrar Sesión
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="?controller=home"> <img alt="image" src="assets/img/logoo.png" class="header-logo"/><span
                class="logo-name">Voting <span class="color1">GO</span></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
          <?php 
          if($_SESSION['user']->rol == 'Administrador') {
          ?>
            <li class="dropdown">
              <a href="?controller=home" class="nav-link"><i class="fas fa-home color"></i><span class="color">Inicio</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link  has-dropdown"><i class="fas fa-book-reader color"></i><span class="color">Usuarios</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link " href="?controller=user&method=indexAdmin"><i class="fas fa-user-friends color"></i><span class="color">Administradores</span></a></li>
                <li><a class="nav-link " href="?controller=user&method=indexTeacher"><i class="fas fa-address-book color"><span class="color"></i>Docentes</span></a></li>
                <li><a class="nav-link " href="?controller=user&method=indexStudent"><i class="fas fa-address-book color"><span class="color"></i>Estudiantes</span></a></li>
              </ul>
            </li>
<!--             <li class="dropdown">
              <a href="?controller=user" class="nav-link"><i class="fas fa-user color" ></i><span class="color">Usuarios</span></a>
            </li> -->
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link  has-dropdown"><i class="fas fa-book-reader color"></i><span class="color">Candidatura</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link " href="?controller=candidacy"><i class="fas fa-user-friends color"></i><span class="color">Candidatos</span></a></li>
                <li><a class="nav-link " href="?controller=CandidateType"><i class="fas fa-address-book color"><span class="color"></i>Tipo Candidato</span></a></li>
              </ul>
            </li>
           
            <li class="dropdown">
              <a href="?controller=level" class="nav-link"><i class="fas fa-sort-amount-up color"></i><span class="color">Niveles</span></a>
            </li>
            <li class="dropdown">
              <a href="?controller=grade" class="nav-link"><i class="fas fa-clipboard-list color"></i><span class="color">Grados</span></a>
            </li>
            <li class="dropdown">
              <a href="?controller=wday" class="nav-link"><i class="fas fa-sun color"></i><span class="color">Jornadas</span></a>
            </li>
            <li class="dropdown">
              <a href="?controller=Course" class="nav-link"><i class="fas fa-book color"></i><span class="color">Cursos</span></a>
            </li>
            <li class="dropdown">
              <a href="?controller=results" class="nav-link"><i class="fas fa-pen-square color"></i><span class="color">Resultados</span></a>
            </li>
            <li class="dropdown">
              <a href="?controller=role" class="nav-link"><i class="fas fa-user-cog color"></i><span class="color">Roles</span></a>
            </li>
            <li class="dropdown">
              <a href="?controller=status" class="nav-link"><i class="fas fa-chart-bar color"></i><span class="color">Estados</span></a>
            </li>
          <?php 
          }elseif($_SESSION['user']->rol === 'Docente') {
            ?>
            <li class="dropdown">
              <a href="?controller=home" class="nav-link"><i class="fas fa-home color"></i><span class="color">Inicio</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link  has-dropdown"><i class="fas fa-book-reader color"></i><span class="color">Usuarios</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link " href="?controller=user&method=indexStudent"><i class="fas fa-address-book color"><span class="color"></i>Estudiantes</span></a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="?controller=Course" class="nav-link"><i class="fas fa-book color"></i><span class="color">Cursos</span></a>
            </li>
            <li class="dropdown">
              <a href="?controller=results" class="nav-link"><i class="fas fa-pen-square color"></i><span class="color">Resultados</span></a>
            </li>
          <?php 
          }else{
                header ('location: voting');
              }
            ?>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
            <!-- add content here -->
          </div>

        </section>

        
      </div>
      
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>
<?php
}else{
  header ('location: ?controller=login&method=indexLogin');
}