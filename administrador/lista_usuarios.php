<?php
    require_once 'includes/header.php';
    require_once 'includes/modals/modals.php';
?>

<main class="app-content">
    <div class="app-title">
    <div>
    <h1><i class="fa fa-dashboard"></i> Lista de alumnos</h1>
    <button class="btn btn-success" type="button" onclick="openModal()">Nuevo alumno</button>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Lista de usuarios</a></li>
    </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableusuarios">
                  <thead>
                    <tr>
                      <th>ACCIONES</th>
                      <th>NOMBRE</th>
                      <th>APELLIDOS</th>
                      <th>FECHA DE NACIMIENTO</th>
                      <th>GRADO</th>
                      <th>GRUPO</th>
                    </tr>
                  </thead>
                 </tbody>
                 </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php
    require_once 'includes/footer.php';
?>