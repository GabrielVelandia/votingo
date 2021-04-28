<!-- Small Modal -->
        <div class="modal fade bd-example-modal-sm<?php echo $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content"> 
              <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">Asignar nuevo administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <input type="hidden" name="id" value="<?php echo $user->id ?>" >
                <form action="?controller=user&method=AdminRoleee" method="post" class="needs-validation" novalidate="">
                  <h6 class="text-info">Usuario</h6>
                  <p class="font-weight-bold"><?php echo $user->name ?></p>
                  <p class="font-weight-bold">Confirmar Acción..</strong><p>
                    <input type="hidden" name="user_idfk" value="<?php echo $user->id ?>">
                    <input type="hidden" name="name" value="<?php echo $user->name ?>">
                    <input type="hidden" name="email" value="<?php echo $user->email ?>">
                  <div class="form-group">
                  <button class="btn btn-outline-success btn-block mt-5" id="submit">Convertir a Administrador <i class="fas fa-user-check"></i></button>
                </form> 
              </div>
              </div>
            </div>
          </div>
        </div>