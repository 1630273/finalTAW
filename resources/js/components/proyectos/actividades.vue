<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Actividades</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">

      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                 <div class="card-tools">

                  <div class="input-group input-group-sm" style="width: 180px;">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#agregarAct">
                      Nueva Actividad
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>Titulo</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Final</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Crear base de datos</td>
                      <td>27/11/2019</td>
                      <td>31/12/2019</td>
                      <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Crear modulo de pagos</td>
                      <td>30/11/2019</td>
                      <td>31/12/2019</td>
                      <td>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->

<div class="modal fade" id="agregarAct">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar nueva actividad</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <form method="post">
                <div class="card-body">

                  <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Titulo de la actividad">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="fechaIni">Fecha Inicio</label>
                        <input type="date" class="form-control" id="fechaIni" placeholder="Fecha inicio">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="fechaFin">Fecha Final</label>
                        <input type="date" class="form-control" id="fechaFin" placeholder="Fecha inicio">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="desc">Descripción</label>
                    <input type="text" class="form-control" id="desc" placeholder="Descripción">
                  </div>
                <!-- /.card-body -->

                  <button type="submit" class="btn btn-success btn-block">
                    Guardar
                  </button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- Fin modal -->
    </div>


  </div>
<!-- /.content-wrapper -->

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>