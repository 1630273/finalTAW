<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuarios</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>




    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">



          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">

                  <li class="nav-item"><a class="nav-link active" href="#activos" data-toggle="tab">Activos</a></li>

                  <li class="nav-item"><a class="nav-link" href="#removidos" data-toggle="tab">Removidos</a></li>

                </ul>

              </div><!-- /.card-header -->



              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activos">


                            <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                 <div class="card-tools">

                  <div class="input-group input-group-sm" style="width: 400px;">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#agregar">
                      Nuevo usuario
                    </button>
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar usuario">

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
                      <th>Nombre</th>
                      <th>Rol</th>
                      <th>Creado en</th>
                      <th>Estatus</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jose</td>
                      <td>Developer</td>
                      <td>30/11/2019</td>
                      <td><span class="badge badge-success">Activo</span></td>
                      <td>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash-alt"></i>
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

                  </div>


<div class="modal fade" id="agregar">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar nuevo usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <form method="post">
                <div class="card-body">

                  <div class="form-group">
                    <label>Seleccionar usuario</label>
                        <select class="form-control">
                          <option>Alan</option>
                          <option>Jose</option>
                          <option>Trunks</option>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="rol">Rol</label>
                    <input type="text" class="form-control" id="rol" placeholder="Rol a desempeñar">
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






                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="removidos">

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                 <div class="card-tools">

                  <div class="input-group input-group-sm" style="width: 400px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar usuario">

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
                      <th>Nombre</th>
                      <th>Rol</th>
                      <th>Creado en</th>
                      <th>Estatus</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Roberto</td>
                      <td>Diseñador</td>
                      <td>23/11/2019</td>
                      <td><span class="badge badge-danger">Removido</span></td>
                      <td>
                        <button type="button" class="btn btn-success">
                          <i class="fas fa-trash-alt"></i>
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

                  </div>






                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->



      </div><!-- /.container-fluid -->
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