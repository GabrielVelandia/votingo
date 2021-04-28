
<div class="main-content">
  <section class="section">        
    <div class="section-body">
      
      <div class="row">
        <div class="col-12">
          
            <form class="needs-validation" novalidate="" action="?controller=status&method=update" method="POST">
                  <input type="hidden" name="id" value="<?php echo $data[0]->id ?>" >
                    <div class="card card-primary">
                      <div class="card-header">
                        <h4>Actualizar Estado</h4>
                      </div>
                    

                    <div class="card-body">
                      <div class="row">
                      
                         <div class=" form-group col-md-6">
                          <label>Nombre de Estado:</label>
                          <input type="text" class="form-control" required="" name="status_name" value="<?php echo $data[0]->status_name ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un nombre de estado
                          </div>
                        </div>
                     
                        <div class="form-group col-md-6">
                          <label>Tipo de Estado::</label>
                          <input type="text" class="form-control" required="" name="typestatus_idfk" value="<?php echo $data[0]->typestatus_idfk ?>">
                          <div class="invalid-feedback">
                            Olvidaste poner un Tipo de Estado:
                          </div>
                        </div>

                      </div>
                      <div class="form-group">
                          <button class="btn btn-outline-success btn-block mt-5">Actualizar Estado <i class="fas fa-user-edit"></i></button> 
                        </div>
                    </div>
                      
                    </div>
                   
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

  
   
         