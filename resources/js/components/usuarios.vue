<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuarios</h1>
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
                <h3 class="card-title">Lista de usuarios</h3>

                 <div class="card-tools">

                  <div class="input-group input-group-sm" style="width: 150px;">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#agregar">
                      Agregar Usuario
                    </button>
                  </div>

                  <div class="input-group input-group-sm" style="width: 300px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar por nombre de usuario">

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
                      <th>ID</th>
                      <th>Nombre usuario</th>
                      <th>Correo</th>
                      <th>Celular</th>
                      <th>Balance</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Daniel Sunu</td>
                      <td>Deslove25@yahoo.com</td>
                      <td>+526439854</td>
                      <td>$ 0</td>
                      <button type="button" class="btn btn-primary">
                          <i class="fas fa-eye"></i>
                      </button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Junior Santos</td>
                      <td>junioryl@hotmail.es</td>
                      <td>34262242</td>
                      <td>$ 0</td>
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
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre del usuario">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="ape_p">Apellido Paterno</label>
                        <input type="text" class="form-control" id="ape_p" placeholder="Apellido Paterno">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="ape_m">Apellido Materno</label>
                        <input type="text" class="form-control" id="ape_m" placeholder="Apellido Materno">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tel">Telefono</label>
                    <input type="text" class="form-control" id="tel" placeholder="Telefono">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="city">Ciudad</label>
                        <input type="text" class="form-control" id="city" placeholder="Ciudad">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="pais">País</label>
                        <input type="text" class="form-control" id="pais" placeholder="País">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" placeholder="Correo">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                      </div>
                    </div>
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