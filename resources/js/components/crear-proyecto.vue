<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear proyectos</h1>
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

                  <li class="nav-item"><a class="nav-link" href="#inactivos" data-toggle="tab">Inactivos</a></li>

                  <li class="nav-item"><a class="nav-link" href="#eliminados" data-toggle="tab">Eliminados</a></li>

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
                      <td><span class="badge badge-success">Activo</span></td>
                      <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-primary">
                          <i class="fas fa-eye"></i>
                        </button>
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
              <h4 class="modal-title">Agregar nuevo proyecto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <form method="post">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" placeholder="Titulo del proyecto">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="compClient">Compañia/Cliente</label>
                        <input type="text" class="form-control" id="compClient" placeholder="Compañia o cliente">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="progreso">Progreso</label>
                    <input type="text" class="form-control" id="progreso" value="0%">
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





<div class="modal fade" id="editar">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Editar Proyecto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <form method="post">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="tituloEditar">Titulo</label>
                        <input type="text" class="form-control" id="tituloEditar" value="Proyecto 1" placeholder="Titulo del proyecto">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="compClientEditar">Compañia/Cliente</label>
                        <input type="text" class="form-control" id="compClientEditar" value="Daniel Sunu" placeholder="Compañia o cliente">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="progresoEditar">Progreso</label>
                    <input type="text" class="form-control" id="progresoEditar" value="0%">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="fechaIniEditar">Fecha Inicio</label>
                        <input type="date" class="form-control" id="fechaIniEditar" value="2019/11/27" placeholder="Fecha inicio">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="fechaFinEditar">Fecha Final</label>
                        <input type="date" class="form-control" id="fechaFinEditar" value="31/12/2019" placeholder="Fecha inicio">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="descEditar">Descripción</label>
                    <input type="text" class="form-control" id="descEditar" placeholder="Descripción">
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
                  <div class="tab-pane" id="inactivos">

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
                      <td>Proyecto 2</td>
                      <td>Jose Jose</td>
                      <td>30/11/2019</td>
                      <td>31/12/2019</td>
                      <td><span class="badge badge-warning">Inactivo</span></td>
                      <td>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-primary">
                          <i class="fas fa-eye"></i>
                        </button>
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













                  <div class="tab-pane" id="eliminados">
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
                      <td>Proyecto 3</td>
                      <td>Daniel Sunu</td>
                      <td>27/11/2019</td>
                      <td>31/12/2019</td>
                      <td><span class="badge badge-danger">Eliminado</span></td>
                      <td>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-primary">
                          <i class="fas fa-eye"></i>
                        </button>
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
                  <!-- /.tab-pane -->









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