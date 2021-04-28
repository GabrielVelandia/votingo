
<div class="main-content">
  <section class="section">        
    <div class="section-body">
      
      


      <div class="row">
        <div class="col-12">
            
            <!--<form class="needs-validation" novalidate="" action="?controller=user&method=saveRole" method="POST"> -->
               <input type="hidden" name="user_idfk" id="user_idfk" value="<?php echo $data[0]->id ?>" >
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Asignar Roles: <span class="text-info"><em><?php echo $data[0]->name,' ', $data[0]->last_name ?></em></span></h4>
                  </div>

                  <div class="card-body">
                    <div class="form-row">
                                  
                      <div class="form-group col-md-6">
                        <label>Rol:</label>
                          
                          <select class="form-control" required="" name="role_idfk" id="role_idfk">
                            <option selected value="">Seleccione...</option>
                            <?php 
                              foreach($roles as $role){
                            ?>
                                <option value="<?php echo $role->id ?>"> <?php echo $role->role_name ?></option>
                            <?php 
                                
                              }
                            ?>
                          </select>
                        <div class="invalid-feedback">
                          Olvidaste poner un nombre
                        </div> 
                      </div>
                      <div class="btn-group col-md-6 h-25 mt-4" role="group" aria-label="Basic example">
                       
                        <a href="#" name="addElement" id="addElement" class="btn btn-icon btn-outline-info col-md-2"><i class="fas fa-plus"></i></a>  
                     
                        <button class="btn btn-outline-success" id="save">Asignar Rol</button> 
                        
                      </div>
                      
                      <div class="form-group" id="list-roles">
            
                      </div>
                      <?php
                        if(isset($categoriesMovie)) {
                        ?>
                            <script>
                                var arrCategories = <?php echo json_encode($categoriesMovie); ?>
                            </script>
                        <?php
                        } else {
                            ?>
                            <script>
                                var arrCategories = []
                            </script>
                        <?php
                        }
                      ?>
                      
                    </div>
                  </div>

                </div>
            </form>

            
        </div>
      </div>

    </div>
  </section>
</div>
<script type="text/javascript" src="assets/js/module/usurol.js"></script>
  
   
         