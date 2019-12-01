<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gestionar servicios</h1>
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
                      Nuevo servicio
                    </button>
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar servicio">

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
                      <th>Producto</th>
                      <th>Estatus</th>
                      <th>Cargos</th>
                      <th>Disponible desde</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Servicio 1</td>
                      <td>Cafe</td>
                      <td><span class="badge badge-success">Activo</span></td>
                      <td>$5.00USD</td>
                      <td>30/11/2019</td>
                      <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar">
                          <i class="fas fa-pencil-alt"></i>
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
              <h4 class="modal-title">Agregar nuevo servicio</h4>
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
                        <label>Cargos</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="number" class="form-control">
                          <div class="input-group-append">
                            <span class="input-group-text">USD</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Seleccionar producto</label>
                        <select class="form-control">
                          <option>Cafe</option>
                          <option>Pan</option>
                          <option>Galletas</option>
                        </select>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="timpoEsti">Tiempo estimado</label>
                        <input type="date" class="form-control" id="timpoEsti">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="tipoEsti">Tipo de estimación</label>
                        <input type="text" class="form-control" id="tipoEsti" placeholder="Tipo de estimación">
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
              <h4 class="modal-title">Editar Servicio</h4>
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
                        <input type="text" class="form-control" id="tituloEditar" value="Servicio 1" placeholder="Titulo del proyecto">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Cargos</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="number" class="form-control" value="$5.00">
                          <div class="input-group-append">
                            <span class="input-group-text">USD</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Seleccionar producto</label>
                        <select class="form-control">
                          <option>Cafe</option>
                          <option>Pan</option>
                          <option>Galletas</option>
                        </select>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="tiempoEstiEditar">Tiempo estimado</label>
                        <input type="date" class="form-control" id="tiempoEstiEditar">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="tipoEstiEditar">Tipo de estimación</label>
                        <input type="text" class="form-control" id="tipoEstiEditar" placeholder="Tipo de estimación">
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
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar servicio">

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
                      <th>Producto</th>
                      <th>Estatus</th>
                      <th>Cargos</th>
                      <th>Disponible desde</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Servicio 2</td>
                      <td>Pan</td>
                      <td><span class="badge badge-warning">Inactivo</span></td>
                      <td>$7.00USD</td>
                      <td>30/11/2019</td>
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