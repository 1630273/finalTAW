<template>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tareas</h3>
                                <div class="card-tools">
                                    <div
                                        class="input-group input-group-sm"
                                        style="width: 180px;"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-default"
                                            data-toggle="modal"
                                            data-target="#agregarTarea"
                                        >
                                            Nueva Tarea
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div
                                class="card-body table-responsive p-0"
                                style="height: 200px;"
                            >
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
                                                    <i
                                                        class="fas fa-pencil-alt"
                                                    ></i>
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
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="fechaFin"
                                    />
                                </div>

                                <label>Tipo de factura</label>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="radio1"
                                                />
                                                <label class="form-check-label"
                                                    >No</label
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="radio1"
                                                />
                                                <label class="form-check-label"
                                                    >Fijo</label
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="radio1"
                                                />
                                                <label class="form-check-label"
                                                    >Por hora</label
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                >USD</span
                                            >
                                        </div>
                                        <input
                                            type="number"
                                            class="form-control"
                                        />
                                        <div class="input-group-append">
                                            <span class="input-group-text"
                                                >.00</span
                                            >
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

                                <button
                                    type="submit"
                                    class="btn btn-success btn-block"
                                >
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
        <!-- /.content -->

</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
