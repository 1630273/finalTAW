<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mis proyectos</h1>
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

                  <div class="input-group input-group-sm" style="width: 400px;">
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
                      <th>Estatus</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Proyecto 1</td>
                      <td>Daniel Sunu</td>
                      <td>27/11/2019</td>
                      <td>31/12/2019</td>
                      <td><span class="badge badge-success">Activo</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Proyecto 2</td>
                      <td>Jose Jose</td>
                      <td>30/11/2019</td>
                      <td>31/12/2019</td>
                      <td>
                        <span class="badge badge-danger">Inactivo</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary">
                          <i class="fas fa-eye"></i>
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