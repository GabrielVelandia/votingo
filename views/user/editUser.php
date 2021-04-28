
<div class="main-content">
  <section class="section">        
    <div class="section-body">
      
      <div class="row">
        <div class="col-12">
          
            <form class="needs-validation" novalidate="" action="?controller=user&method=update" method="POST">
               <input type="hidden" name="id" value="<?php echo $data[0]->id ?>" >
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Actualizar Usuario</h4>
                  </div>
                    

                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-6">
                          <label>Nombres:</label>
                          <input type="text" class="form-control" required="" name="name" value="<?php echo $data[0]->name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un nombre
                          </div>
                        </div>
                     
                        <div class="form-group col-md-6">
                          <label>Apellidos:</label>
                          <input type="text" class="form-control" required="" name="last_name" value="<?php echo $data[0]->last_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un apellido
                          </div>
                        </div>

                      </div>
                      
                         <div class="form-group">
                            <label>N° de Documento:</label>
                            <input type="text" class="form-control" required="" name="document" value="<?php echo $data[0]->document ?>">
                            <div class="invalid-feedback">
                              Olvidaste poner tu identificación
                            </div>
                          </div>

                          <div>
                            <div class="form-group">
                            <label>N° de Celular:</label>
                            <input type="text" class="form-control" required="" name="cellphone" value="<?php echo $data[0]->cellphone ?>">
                            <div class="invalid-feedback">
                              Introduce un número de celular
                            </div>
                          </div>

                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required="" name="email" value="<?php echo $data[0]->email ?>">
                            <div class="invalid-feedback">
                              Oh no! este correo no es válido
                            </div>
                          </div>
                    </div>
                      <div class="form-group">
                        <button class="btn btn-outline-success btn-block mt-5">Actualizar Usuario <i class="fas fa-user-edit"></i></button> 
                      </div>
                    </div>
                   
                  </form>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

  
   
         