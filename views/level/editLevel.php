<div class="content">
    <div class="content-prepare">
        <div class="containero">    
                <form id="form" class="form" action="?controller=level&method=update" method="post">
                  <input type="hidden" name="ID_NIVEL" value="<?php echo $data[0]->ID_NIVEL ?>" >
                  <div class="container">
                    <h1 class="title">Información Del Nivel <i class="fas fa-user-plus text-primary"></i></h1>
                  </div>
                    <div class="form-control">
                      <label >Nombre</label>
                      <input type="text" id="name" name="NOMBRE_NIVEL" value="<?php echo $data[0]->NOMBRE_NIVEL ?>" class="form-control" maxlength="50" placeholder="Ingrese Nombre Del Nivel">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <small>Error message</small>

                    </div>
                   <div class="container">
                      <button class="btn btn-primary btn-lg w-100 mt-5"> Actualizar Nivel</button>
                  </div>
                 
                </form>
    </div>
</div>