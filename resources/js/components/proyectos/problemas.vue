<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-tools">
                                    <div
                                        class="input-group input-group-sm"
                                        style="width: 180px;"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-default"
                                            data-toggle="modal"
                                            data-target="#agregarProblema"
                                        >
                                            Nuevo Problema
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
                                                <span
                                                    class="badge badge-success"
                                                    >Abierto</span
                                                >
                                            </td>
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
                                        <tr>
                                            <td>Faltan tacos</td>
                                            <td>Admin</td>
                                            <td>Rafael</td>
                                            <td>
                                                <span class="badge badge-danger"
                                                    >Cerrado</span
                                                >
                                            </td>
                                            <td>
                                                <button
                                                    type="button"
                                                    class="btn btn-warning"
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
        </div>
        <!-- /.content -->

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
    <!-- /.content-wrapper -->
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
