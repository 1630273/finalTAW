<template>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mis Proyectos</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
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
                  <li class="nav-item">
                    <a class="nav-link active" href="#activos" data-toggle="tab">Activos</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#inactivos" data-toggle="tab">Inactivos</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#eliminados" data-toggle="tab">Eliminados</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->

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
                                <button type="button" class="btn btn-default" @click="abrirModal('proyecto', 'agregar')">Agregar Proyecto</button>
                                <input  type="text" name="table_search" class="form-control float-right" placeholder="Buscar proyecto"/>

                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                  </button>
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
                                <tr v-for="proyecto in arrayProyecto" :key="proyecto.id">
                                  <td v-if="proyecto.condicion=='1'" v-text="proyecto.titulo"></td>
                                  <td v-if="proyecto.condicion=='1'" v-text="proyecto.cliente"></td>
                                  <td v-if="proyecto.condicion=='1'" v-text="proyecto.f_inicio"></td>
                                  <td v-if="proyecto.condicion=='1'" v-text="proyecto.f_final"></td>
                                  <td v-if="proyecto.condicion=='1'">
                                    <span class="badge badge-success">Activo</span>
                                  </td>
                                  <td v-if="proyecto.condicion=='1'">
                                    <button type="button" class="btn btn-warning" @click="abrirModal('proyecto', 'actualizar')">
                                      <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary" @click="verProyecto(proyecto.id);">
                                      <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" @click="pausarProyecto(proyecto.id)">
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

                  <div class="tab-pane" id="inactivos">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 400px;">
                                <input
                                  type="text"
                                  name="table_search"
                                  class="form-control float-right"
                                  placeholder="Buscar proyecto"
                                />

                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                  </button>
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
                                <tr v-for="proyecto in arrayProyecto" :key="proyecto.id">
                                  <td v-if="proyecto.condicion=='2'" v-text="proyecto.titulo"></td>
                                  <td v-if="proyecto.condicion=='2'" v-text="proyecto.cliente"></td>
                                  <td v-if="proyecto.condicion=='2'" v-text="proyecto.f_inicio"></td>
                                  <td v-if="proyecto.condicion=='2'" v-text="proyecto.f_final"></td>
                                  <td v-if="proyecto.condicion=='2'">
                                    <span class="badge badge-warning">Inactivo</span>
                                  </td>
                                  <td v-if="proyecto.condicion=='2'">
                                    <button type="button" class="btn btn-warning" @click="activarProyecto(proyecto.id)">
                                      <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                      <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" @click="eliminarProyecto(proyecto.id)">
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
                                <input
                                  type="text"
                                  name="table_search"
                                  class="form-control float-right"
                                  placeholder="Buscar proyecto"
                                />

                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                  </button>
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
                                <tr v-for="proyecto in arrayProyecto" :key="proyecto.id">
                                  <td v-if="proyecto.condicion=='0'" v-text="proyecto.titulo"></td>
                                  <td v-if="proyecto.condicion=='0'" v-text="proyecto.cliente"></td>
                                  <td v-if="proyecto.condicion=='0'" v-text="proyecto.f_inicio"></td>
                                  <td v-if="proyecto.condicion=='0'" v-text="proyecto.f_final"></td>
                                  <td v-if="proyecto.condicion=='0'">
                                    <span class="badge badge-danger">Eliminado</span>
                                  </td>
                                  <td v-if="proyecto.condicion=='0'">
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

    <div class="modal fade" :class="{'mostrar' : modal}">
      
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" v-text="tituloModal">Agregar nuevo proyecto</h4>
            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
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
                      <input type="text" class="form-control" v-model="titulo" placeholder="Titulo del proyecto"/>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="compClient">Compañia/Cliente</label>
                      <input type="text" class="form-control" v-model="cliente" placeholder="Compañia o cliente"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="progreso">Progreso</label>
                        <input type="number" class="form-control" v-model="progreso" value="0%"/>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="presupuesto">Presupuesto</label>
                      <input type="number" class="form-control" v-model="presupuesto" placeholder="Presupuesto"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="fechaIni">Fecha Inicio</label>
                      <input type="date" class="form-control" v-model="f_inicio" placeholder="Fecha inicio"/>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="fechaFin">Fecha Final</label>
                      <input type="date" class="form-control" v-model="f_final" placeholder="Fecha inicio"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="desc">Descripción</label>
                   <input type="text" class="form-control" v-model="descripcion" placeholder="Descripción"/>
                </div>

                <button type="button" v-if="tipoAccion==1" @click="agregarProyecto()" class="btn btn-primary">Guardar</button>
                <button type="button" v-if="tipoAccion==2" @click="actualizarProyecto()" class="btn btn-primary">Actualizar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
</template>

<script>
export default {
  data() {
    return {
      id_creador: '',
      titulo: '',
      cliente: '',
      presupuesto: '',
      progreso: '',
      descripcion: '',
      f_inicio: '',
      f_final: '',
      modal: 0,
      tituloModal: '',
      tipoAccion: 0,
      arrayProyecto: []
    };
  },
  methods: {
    listarProyectos() {
      let me = this;
      axios
        .get("/proyectos")
        .then(function(response) {
          me.arrayProyecto = response.data;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    agregarProyecto() {
      let me = this;
      axios
        .post("/proyectos/agregar", {
          id_creador: 1,
          titulo: this.titulo,
          cliente: this.cliente,
          presupuesto: this.presupuesto,
          progreso: this.progreso,
          descripcion: this.descripcion,
          f_inicio: this.f_inicio,
          f_final: this.f_final
        })
        .then(function(response) {
          me.cerrarModal();
          me.listarProyectos();
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    cerrarModal() {
      this.modal = 0;
      this.tituloModal = '';
      this.titulo = '';
      this.cliente = '';
      this.f_inicio = '';
      this.f_final = '';
      this.presupuesto = '';
      this.progreso = '';
      this.descripcion = '';
      this.id_creador = '';
    },
    abrirModal(modelo, accion, data = []) {
      switch (modelo) {
        case "proyecto": {
          switch (accion) {
            case "agregar": {
              this.id_creador = '';
              this.modal = 1;
              this.titulo = '';
              this.cliente = '';
              this.presupuesto = '';
              this.progreso = '';
              this.descripcion = '';
              this.f_inicio = '';
              this.f_final = '';
              this.tipoAccion = 1;
              this.tituloModal = "Agregar Nuevo Proyecto";
              break;
            }
            case "actualizar": {
              
            }
          }
        }
      }
    },pausarProyecto(id){
        swal.fire({
          title: 'Esta seguro de pausar este proyecto?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Aceptar!',
          cancelButtonText: 'Cancelar',
          confirmButtonClass: 'btn btn-primary',
          cancelButtonClass: 'btn btn-primary',
          buttonsStyling: false,
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            let me = this;
            axios.put('/proyectos/pausar',{
             'id': id
            }).then(function (response) {
              me.listarProyectos(1,'','titulo');
              swal.fire(
                'Proyecto pausado!',
                'El proyecto ha sido pausado con éxito.',
                'success'
              )
            }).catch(function (error) {
              console.log(error);
            });
          } else if (
            result.dismiss === swal.DismissReason.cancel
          ){
                  
            }
        }) 
      },activarProyecto(id){
        swal.fire({
          title: 'Esta seguro de activar este proyecto?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Aceptar!',
          cancelButtonText: 'Cancelar',
          confirmButtonClass: 'btn btn-primary',
          cancelButtonClass: 'btn btn-primary',
          buttonsStyling: false,
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            let me = this;
            axios.put('/proyectos/activar',{
             'id': id
            }).then(function (response) {
              me.listarProyectos(1,'','titulo');
              swal.fire(
                'Proyecto Reactivado!',
                'El proyecto ha sido activado con éxito.',
                'success'
              )
            }).catch(function (error) {
              console.log(error);
            });
          } else if (
            result.dismiss === swal.DismissReason.cancel
          ){
                  
            }
        }) 
      },eliminarProyecto(id){
        swal.fire({
          title: 'Esta seguro de eliminar este proyecto?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Aceptar!',
          cancelButtonText: 'Cancelar',
          confirmButtonClass: 'btn btn-primary',
          cancelButtonClass: 'btn btn-primary',
          buttonsStyling: false,
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            let me = this;
            axios.put('/proyectos/eliminar',{
             'id': id
            }).then(function (response) {
              me.listarProyectos(1,'','titulo');
              swal.fire(
                'Eliminado!',
                'El proyecto ha sido eliminado con éxito.',
                'success'
              )
            }).catch(function (error) {
              console.log(error);
            });
          } else if (
            result.dismiss === swal.DismissReason.cancel
          ){
                  
            }
        }) 
      },verProyecto(id){
        let me = this;
        axios
          .get("/proyectos/vista")
          .then(function(response) {
            me.arrayProyecto = response.data;
          })
          .catch(function(error) {
            console.log(error);
          });
      },
    },
    mounted() {
      this.listarProyectos();
    }
  };
</script>

<style>    
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
</style>