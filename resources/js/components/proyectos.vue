<template>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Proyectos</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="#actividades" data-toggle="tab">Actividades</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#tareas" data-toggle="tab">Tareas</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#problemas" data-toggle="tab">Problemas</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="actividades">
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 180px;">
                                <button
                                  type="button"
                                  class="btn btn-default"
                                  data-toggle="modal"
                                  data-target="#agregarAct"
                                >Nueva Actividad</button>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0" style="height: 200px;">
                            <table class="table table-head-fixed">
                              <thead>
                                <tr>
                                  <th>Titulo</th>
                                  <th>Presupuesto</th>
                                  <th>Fecha Inicio</th>
                                  <th>Fecha Final</th>
                                  <th>Accion</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Crear base de datos</td>
                                  <td>2000.00</td>
                                  <td>27/11/2019</td>
                                  <td>31/12/2019</td>
                                  <td>
                                    <button
                                      type="button"
                                      class="btn btn-warning"
                                      data-toggle="modal"
                                      data-target="#editar"
                                    >
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
                  </div>

                  <div class="modal fade" id="agregarAct">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Agregar nueva actividad</h4>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="titulo"
                                  placeholder="Titulo de la actividad"
                                />
                              </div>

                              <div class="form-group">
                                <label for="presupuesto">Presupuesto</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="Presupuesto"
                                  placeholder
                                />
                              </div>

                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="fechaIni">Fecha Inicio</label>
                                    <input
                                      type="date"
                                      class="form-control"
                                      id="fechaIni"
                                      placeholder="Fecha inicio"
                                    />
                                  </div>
                                </div>

                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="fechaFin">Fecha Final</label>
                                    <input
                                      type="date"
                                      class="form-control"
                                      id="fechaFin"
                                      placeholder="Fecha inicio"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="desc">Descripción</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="desc"
                                  placeholder="Descripción"
                                />
                              </div>
                              <!-- /.card-body -->

                              <button type="submit" class="btn btn-success btn-block">Guardar</button>
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
                  <div class="tab-pane" id="tareas">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 180px;">
                                <button
                                  type="button"
                                  class="btn btn-default"
                                  data-toggle="modal"
                                  data-target="#agregarTarea"
                                >Nueva Tarea</button>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0" style="height: 200px;">
                            <table class="table table-head-fixed">
                              <thead>
                                <tr>
                                  <th>Descripción</th>
                                  <th>Creado en</th>
                                  <th>Creado por</th>
                                  <th>Asignado al usuario</th>
                                  <th>Tipo de factura</th>
                                  <th>Costo</th>
                                  <th>Fecha final</th>
                                  <th>Estatus</th>
                                  <th>Accion</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Completar la pokedex</td>
                                  <td>27/11/2019</td>
                                  <td>Admin</td>
                                  <td>Polendo</td>
                                  <td>Por hora</td>
                                  <td>USD$10.00</td>
                                  <td>31/12/2019</td>
                                  <td>Nuevo</td>
                                  <td>
                                    <button
                                      type="button"
                                      class="btn btn-warning"
                                      data-toggle="modal"
                                      data-target="#editar"
                                    >
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
                  </div>

                  <div class="modal fade" id="agregarTarea">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Agregar nueva tarea</h4>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post">
                            <div class="card-body">
                              <div class="form-group">
                                <label>Seleccionar actividad</label>
                                <select class="form-control">
                                  <option>Crear base de datos</option>
                                  <option>Crear modulo de pagos</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Seleccionar usuario</label>
                                <select class="form-control">
                                  <option>Brian</option>
                                  <option>Rafael</option>
                                  <option>Polendo</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="fechaFin">Fecha Final</label>
                                <input type="date" class="form-control" id="fechaFin" />
                              </div>

                              <label>Tipo de factura</label>

                              <div class="row">
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio1" />
                                      <label class="form-check-label">No</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio1" />
                                      <label class="form-check-label">Fijo</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio1" />
                                      <label class="form-check-label">Por hora</label>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label>Cantidad</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">USD</span>
                                  </div>
                                  <input type="number" class="form-control" />
                                  <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="desc">Descripción</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="desc"
                                  placeholder="Descripción"
                                />
                              </div>
                              <!-- /.card-body -->

                              <button type="submit" class="btn btn-success btn-block">Guardar</button>
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

                  <div class="tab-pane" id="problemas">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 180px;">
                                <button
                                  type="button"
                                  class="btn btn-default"
                                  data-toggle="modal"
                                  data-target="#agregarProblema"
                                >Nuevo Problema</button>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0" style="height: 200px;">
                            <table class="table table-head-fixed">
                              <thead>
                                <tr>
                                  <th>Descripción</th>
                                  <th>Creado por</th>
                                  <th>Asignado al usuario</th>
                                  <th>Estatus</th>
                                  <th>Accion</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Redundancia en la BD</td>
                                  <td>Admin</td>
                                  <td>Polendo</td>
                                  <td>
                                    <span class="badge badge-success">Abierto</span>
                                  </td>
                                  <td>
                                    <button
                                      type="button"
                                      class="btn btn-warning"
                                      data-toggle="modal"
                                      data-target="#editar"
                                    >
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
                  </div>

                  <div class="modal fade" id="agregarProblema">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Agregar nuevo problema</h4>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post">
                            <div class="card-body">
                              <div class="form-group">
                                <label>Seleccionar usuario</label>
                                <select class="form-control">
                                  <option>Brian</option>
                                  <option>Rafael</option>
                                  <option>Polendo</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="desc">Descripción</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="desc"
                                  placeholder="Descripción"
                                />
                              </div>
                              <!-- /.card-body -->

                              <button type="submit" class="btn btn-success btn-block">Guardar</button>
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
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
