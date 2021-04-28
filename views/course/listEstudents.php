<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
              <h4>Curso : <span class="text-info"><?php echo $datat[0]->code; ?></span> || </h4> <h4> Jornada : <span class="text-info"> <?php echo $datat[0]->wday_name; ?></span></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-stripedr" id="table-2" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Apellidos</th>
                      <th>Nombres</th>
                      <th>Documento</th>
                      <th>Celular</th>
                      <th>Email</th>
                      <th>Operaciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $dat) : ?>
                      <tr>
                        <td><?php echo $dat->last_name ?></td>
                        <td><?php echo $dat->name ?></td>
                        <td><?php echo $dat->document ?></td>
                        <td><?php echo $dat->cellphone ?></td>
                        <td><?php echo $dat->email ?></td>
                        <td>
                          <span data-toggle="tooltip" data-placement="left" title="Editar Usuario">
                          <a href="?controller=user&method=edit&id=<?php echo $dat->id ?>" type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#basicModal<?php echo $dat->id ?>"><i class="fas fa-user-edit"></i></a>
                        </span>
                        <span data-toggle="tooltip" data-placement="right" title="Asignar Candidatura">
                            <a href="?controller=user&method=assignedCourseCandidateStudent&id=<?php echo $dat->idsl ?>" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?php echo $dat->id ?>"><i class="far fa-plus-square"></i></a>
                        </span>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <a href="?controller=course" type="button" class="btn btn-warning btn-lg float-right"><i class="fas fa-reply"></i> <span>Volver</span></a>
    </div>
  </section>
</div>

<?php foreach ($data as $dat) : ?>
<?php
  include 'modalEditStudent.php';
?>
<?php endforeach ?>
<?php foreach ($data as $dat) : ?>
<?php
  include 'modalAssignedCandidacy.php';
?>
<?php endforeach ?>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>