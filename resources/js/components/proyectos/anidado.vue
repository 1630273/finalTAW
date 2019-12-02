<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Proyectos</h1>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="col-12 col-sm-6 col-lg-12">
                <div class="card card-grey card-outline card-tabs">
                    <div class="card-header p-0 pt-1 border-bottom-0">
                        <ul
                            class="nav nav-tabs"
                            id="custom-tabs-two-tab"
                            role="tablist"
                        >
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    id="custom-tabs-two-home-tab"
                                    data-toggle="pill"
                                    href="#custom-tabs-two-act"
                                    role="tab"
                                    aria-controls="custom-tabs-two-home"
                                    aria-selected="true"
                                    >Actividades</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="custom-tabs-two-profile-tab"
                                    data-toggle="pill"
                                    href="#custom-tabs-two-task"
                                    role="tab"
                                    aria-controls="custom-tabs-two-profile"
                                    aria-selected="false"
                                    >Tareas</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="custom-tabs-two-messages-tab"
                                    data-toggle="pill"
                                    href="#custom-tabs-two-problemas"
                                    role="tab"
                                    aria-controls="custom-tabs-two-messages"
                                    aria-selected="false"
                                    >Problemas</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="custom-tabs-two-settings-tab"
                                    data-toggle="pill"
                                    href="#custom-tabs-two-usuarios"
                                    role="tab"
                                    aria-controls="custom-tabs-two-settings"
                                    aria-selected="false"
                                    >Usuarios</a
                                >
                            </li>
                        </ul>
                    </div>




                    <div class="card-body">
                        <div
                            class="tab-content"
                            id="custom-tabs-two-tabContent"
                        >
                            <div
                                class="tab-pane fade show active"
                                id="custom-tabs-two-act"
                                role="tabpanel"
                                aria-labelledby="custom-tabs-two-home-tab"
                            >
                                <act></act>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="custom-tabs-two-task"
                                role="tabpanel"
                                aria-labelledby="custom-tabs-two-profile-tab"
                            >
                                <tareas></tareas>
                            </div>






                            <div
                                class="tab-pane fade"
                                id="custom-tabs-two-problemas"
                                role="tabpanel"
                                aria-labelledby="custom-tabs-two-messages-tab"
                            >
                                <problemas></problemas>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="custom-tabs-two-usuarios"
                                role="tabpanel"
                                aria-labelledby="custom-tabs-two-settings-tab"
                            >
                                <usuarios-proyectos></usuarios-proyectos>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
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
