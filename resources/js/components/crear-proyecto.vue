<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear proyectos</h1>
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
                <h3 class="card-title">Crear Proyecto</h3>

                 <div class="card-tools">

                  <div class="input-group input-group-sm" style="width: 400px;">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#agregar">
                      Agregar Proyecto
                    </button>
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar proyecto">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>Titulo</th>
                      <th>Compañia/Cliente</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Final</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Proyecto 1</td>
                      <td>Daniel Sunu</td>
                      <td>27/11/2019</td>
                      <td>31/12/2019</td>
                      <td>
                        <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
                        <a href="#" class="btn btn-primary btn-block"><b>Borrar</b></a>
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
<div class="modal fade" id="agregar">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar nuevo proyecto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <form method="post">
                <div class="card-body">

                  <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Titulo del proyecto">
                  </div>

                  <div class="form-group">
                    <label for="compClient">Compañia/Cliente</label>
                    <input type="text" class="form-control" id="compClient" placeholder="Compañia o cliente">
                  </div>

                  <div class="form-group">
                    <label for="progreso">Progreso</label>
                    <input type="text" class="form-control" id="progreso" value="0%">
                  </div>

                  <div class="form-group">
                    <label for="fechaIni">Fecha Inicio</label>
                    <input type="date" class="form-control" id="fechaIni" placeholder="Fecha inicio">
                  </div>

                  <div class="form-group">
                    <label for="fechaFin">Fecha Final</label>
                    <input type="date" class="form-control" id="fechaFin" placeholder="Fecha inicio">
                  </div>

                  <div class="form-group">
                    <label for="desc">Descripción</label>
                    <input type="text" class="form-control" id="desc" placeholder="Descripción">
                  </div>
                <!-- /.card-body -->

                  <button type="submit" class="btn btn-primary">
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