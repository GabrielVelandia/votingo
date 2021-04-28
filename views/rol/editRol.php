<div class="content">
    <div class="content-prepare">
        <div class="containero">    
                <form id="form" class="form" action="?controller=rol&method=update" method="post">
                  <input type="hidden" name="id_rol" value="<?php echo $data[0]->ID_ROL ?>" >
                  <div class="container">
                    <h1 class="title">Información Rol <i class="fas fa-user-plus text-primary"></i></h1>
                  </div>
                    <div class="form-control">
                      <label >Nombres</label>
                      <input type="text" id="name" name="nombre_rol" value="<?php echo $data[0]->NOMBRE_ROL ?>" class="form-control" maxlength="50" placeholder="Ingrese Nombres">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <small>Error message</small>
                    </div>

                  <div class="container">
                      <button class="btn btn-primary btn-lg w-100 mt-5"> Actualizar Rol</button>
                  </div>
                 
                </form>
    </div>
</div>
