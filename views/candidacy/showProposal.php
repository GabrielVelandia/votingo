<link rel="stylesheet" href="assets/css/estilos.css">

<!-- basic modal --> 
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content tamaño2">
      <div class="modal-header card-header alert alert-primary text-center tamaño"> 
      <h4>Registrar Propuesta</h4>    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="?controller=candidacy&method=saveProposal" method="POST">
          <input type="hidden" name="candidacy_idfk" value="<?php echo $candidateP[0]->id_candidato?>" >
          <div class="card-body">
            <div class="form-group">           
              <div class="form-group">
                <label class="font-weight-bold">Titulo De La Propuesta:</label>
                <input type="text" class="form-control" required="" name="proposal_tittle">
                <div class="invalid-feedback">
                  Olvidaste poner un titulo
                </div>
              </div>

              <div class="form-group">
                <label class="font-weight-bold">Descripcion:</label>
                <textarea type="text" class="form-control" required="" name="proposal_description"></textarea>
                <div class="invalid-feedback">
                  Olvidaste poner una descripcion
                </div>
              </div>

            </div>
            <div>

              <div class="form-group">
                <button class="btn btn-outline-success btn-block mt-5">Registrar Propuesta <i class="fas fa-user-check"></i></button> 
              </div>
                            
            </div>                  
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<div class="main-content">
  <section class="section">
    <div class="card">
                  <div class="card-header">
                    <h4><?php echo $candidateP[0]->candidatetype_name;?> : <?php echo $candidateP[0]->student;?></h4>
                    <h4> - Propuestas</h4>
                    <button type="button" class="btn btn-icon icon-left btn-danger ml-auto" data-toggle="modal" data-target="#basicModal"><i class="fas fa-plus"></i> Agregar</button>
                  </div>
                  <div class="card-body mt-4">
                    <?php if (!empty($data)) {
                     ?> 
                          <?php foreach ($data as $dat) :?>
                    <ul class="list-unstyled">
                      <li class="media">
                        <div class="media-body">
                          <h5 class="mt-0 mb-1"><span class="text-dark">Titulo De La Propuesta:</span> <?php echo $dat->proposal_tittle; ?></h5>
                          <p><span class="text-dark font-weight-bold">Descripcion:</span> <?php echo $dat->proposal_description; ?></p>
                        </div>
                         <span data-toggle="tooltip" data-placement="right" title="Editar Propuesta">
                      <a href="?controller=candidacy&method=editProposal&id=<?php echo $dat->pId ?>" type="button" data-toggle="modal" data-target="#basicModal<?php echo $dat->pId ?>" class="btn btn-warning btn-md mr-1"><i class="fas fa-edit"></i></a>
                      </span>
                      <span data-toggle="tooltip" data-placement="right" title="Eliminar Propuesta">
                      <a href="?controller=candidacy&method=deleteProposal&id=<?php echo $dat->pId ?>" type="button" class="btn btn-icon" style="background-color: #ea4038; color: #fff;"><i class="fas fa-trash-alt"></i></a>
                      </span>
                      </li>
                    </ul>
                          <?php endforeach?>
                    <?php       
                    }else{
                    ?>
                    <h1>No Hay Propuestas</h1>
                    <?php  
                    } ?>
                          <a href="?controller=candidacy" type="button" class="btn btn-primary float-right">Volver </a>
                  </div>
                </div>
              </div>
  </section>
</div>
<?php foreach ($data as $dat) : ?>
<?php
  include 'modalEditPropuesta.php';
?>
<?php endforeach ?>
