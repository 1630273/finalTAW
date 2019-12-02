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
                    <button type="button" class="btn btn-default" @click="abrirModal('persona','registrar')">
                      Agregar Usuario
                    </button>
                  </div>

                  <div class="input-group input-group-sm" style="width: 300px;">
                    <input type="text" v-model="buscar" @keyup.enter="listarPersona(1,buscar,criterio)" name="table_search" class="form-control float-right" placeholder="Buscar por nombre de usuario">

                    <div class="input-group-append">
                      <button type="submit" @click="listarPersona(1,buscar,criterio)" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>

                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>Nombre usuario</th>
                      <th>Correo</th>
                      <th>Teléfono</th>
                      <th>Ciudad</th>
                      <th>País</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="persona in arrayPersona" :key="persona.id">
                      <td v-text="persona.nombre+' '+persona.apellido_p"></td>
                      <td v-text="persona.email"></td>
                      <td v-text="persona.telefono"></td>
                      <td v-text="persona.ciudad"></td>
                      <td v-text="persona.pais"></td>
                      <td>
                        <button type="button" @click="abrirModal('persona','actualizar',persona)" class="btn btn-warning btn-sm">
                          <i class="fas fa-pencil-alt"></i>
                        </button>&nbsp;
                        <button type="button" class="btn btn-primary btn-sm">
                          <i class="fas fa-eye"></i>
                        </button>&nbsp;
                        <template v-if="persona.condicion">
                          <button type="button" class="btn btn-danger btn-sm" @click="desactivarUsuario(persona.id)">
                            <i class="fas fa-trash-alt"></i>
                          </button>
                        </template>
                        <template v-else>
                          <button type="button" class="btn btn-info btn-sm" @click="activarUsuario(persona.id)">
                            <i class="icon-check"></i>
                          </button>
                        </template>
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

    <div class="modal fade" :class="{'mostrar' : modal}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" v-text="tituloModal"></h4>
              <button type="button" class="close"  @click="cerrarModal()" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <form method="post">
                <div class="card-body">

                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" v-model="nombre" class="form-control" id="nombre" placeholder="Nombre del usuario">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="ape_p">Apellido Paterno</label>
                        <input type="text" v-model="apellido_p" class="form-control" id="ape_p" placeholder="Apellido Paterno">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="ape_m">Apellido Materno</label>
                        <input type="text" v-model="apellido_m" class="form-control" id="ape_m" placeholder="Apellido Materno">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tel">Telefono</label>
                    <input type="text" v-model="telefono" class="form-control" id="tel" placeholder="Telefono">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="city">Ciudad</label>
                        <input type="text" v-model="ciudad" class="form-control" id="city" placeholder="Ciudad">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="pais">País</label>
                        <input type="text" v-model="pais" class="form-control" id="pais" placeholder="País">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" v-model="email" class="form-control" id="correo" placeholder="Correo">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" v-model="password" class="form-control" id="pass" placeholder="Contraseña">
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->
                
                  <button type="button" v-if="tipoAccion==1" class="btn btn-success btn-block" @click="registrarPersona()">
                    Guardar
                  </button>
                  <button type="button" v-if="tipoAccion==2" class="btn btn-success btn-block" @click="actualizarPersona()">
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
        data (){
            return {
                persona_id: 0,
                nombre : '',
                apellido_p : '',
                apellido_m : '',
                telefono : '',
                ciudad : '',
                pais : '',
                email : '',
                password : '',
                idrol : 0,
                arrayPersona : [],
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,
                errorPersona : 0,
                errorMostrarMsjPersona : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio : 'nombre',
                buscar : ''
            }
        },
        computed:{
            isActived: function(){
                return this.pagination.current_page;
            },
            //Calcula los elementos de la paginación
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;             

            }
        },
        methods : {
            listarPersona (page,buscar,criterio){
                let me=this;
                var url= '/user?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayPersona = respuesta.personas.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            cambiarPagina(page,buscar,criterio){
                let me = this;
                //Actualiza la página actual
                me.pagination.current_page = page;
                //Envia la petición para visualizar la data de esa página
                me.listarPersona(page,buscar,criterio);
            },
            registrarPersona(){
                if (this.validarPersona()){
                    return;
                }
                
                let me = this;

                axios.post('/user/registrar',{
                    'nombre': this.nombre,
                    'apellido_p': this.apellido_p,
                    'apellido_m' : this.apellido_m,
                    'telefono' : this.telefono,
                    'ciudad' : this.ciudad,
                    'pais' : this.pais,
                    'email': this.email,
                    'password': this.password,
                    'idrol' : '4'

                }).then(function (response) {
                    me.cerrarModal();
                    me.listarPersona(1,'','nombre');
                }).catch(function (error) {
                    console.log(error);
                });
            },
            actualizarPersona(){
               if (this.validarPersona()){
                    return;
                }
                
                let me = this;

                axios.put('/user/actualizar',{
                    'nombre': this.nombre,
                    'apellido_p': this.apellido_p,
                    'apellido_m' : this.apellido_m,
                    'telefono' : this.telefono,
                    'ciudad' : this.ciudad,
                    'pais' : this.pais,
                    'email': this.email,
                    'password': this.password,
                    'idrol' : this.idrol,
                    'id': this.persona_id
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarPersona(1,'','nombre');
                }).catch(function (error) {
                    console.log(error);
                }); 
            },            
            validarPersona(){
                this.errorPersona=0;
                this.errorMostrarMsjPersona =[];

                if (!this.nombre) this.errorMostrarMsjPersona.push("El nombre de la persona no puede estar vacío.");
                if (!this.email) this.errorMostrarMsjPersona.push("El correo electrónico no puede estar vacío.");
                if (!this.password) this.errorMostrarMsjPersona.push("El password no puede estar vacío.");

                if (this.errorMostrarMsjPersona.length) this.errorPersona = 1;

                return this.errorPersona;
            },
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';
                this.nombre='';
                this.apellido_p='';
                this.apellido_m='';
                this.telefono='';
                this.ciudad='';
                this.pais='';
                this.email='';
                this.password='';
                this.idrol='';
                this.errorPersona=0;

            },
            abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "persona":
                    {
                        switch(accion){
                            case 'registrar':
                            {
                                this.modal = 1;
                                this.tituloModal = 'Registrar Usuario';
                                this.nombre= '';
                                this.apellido_p='';
                                this.apellido_m='';
                                this.telefono='';
                                this.ciudad='';
                                this.pais='';
                                this.email='';
                                this.password='';
                                this.idrol='3';
                                this.tipoAccion = 1;
                                break;
                            }
                            case 'actualizar':
                            {
                                //console.log(data);
                                this.modal=1;
                                this.tituloModal='Actualizar Usuario';
                                this.tipoAccion=2;
                                this.persona_id=data['id'];
                                this.nombre = data['nombre'];
                                this.apellido_p = data['apellido_p'];
                                this.apellido_m = data['apellido_m'];
                                this.telefono = data['telefono'];
                                this.ciudad = data['ciudad'];
                                this.pais = data['pais'];
                                this.email = data['email'];
                                this.password = data['password'];
                                this.idrol = data['idrol'];
                                break;
                            }
                        }
                    }
                }
            },
              desactivarUsuario(id){
               swal.fire({
                title: 'Esta seguro de desactivar este usuario?',
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

                    axios.put('/user/desactivar',{
                        'id': id
                    }).then(function (response) {
                        me.listarPersona(1,'','nombre');
                        swal.fire(
                        'Desactivado!',
                        'El usuario ha sido desactivado con éxito.',
                        'success'
                        )
                    }).catch(function (error) {
                        console.log(error);
                    });
                    
                    
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    
                }
              }) 
            },
        },
        mounted() {
            this.listarPersona(1,this.buscar,this.criterio);
        }
    }
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
