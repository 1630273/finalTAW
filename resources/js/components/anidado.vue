<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Mis proyectos</h1>
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
                                    href="#custom-tabs-two-home"
                                    role="tab"
                                    aria-controls="custom-tabs-two-home"
                                    aria-selected="true"
                                    >Dash</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="custom-tabs-two-profile-tab"
                                    data-toggle="pill"
                                    href="#custom-tabs-two-profile"
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
                                    href="#custom-tabs-two-messages"
                                    role="tab"
                                    aria-controls="custom-tabs-two-messages"
                                    aria-selected="false"
                                    >Messages</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="custom-tabs-two-settings-tab"
                                    data-toggle="pill"
                                    href="#custom-tabs-two-settings"
                                    role="tab"
                                    aria-controls="custom-tabs-two-settings"
                                    aria-selected="false"
                                    >Settings</a
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
                                id="custom-tabs-two-home"
                                role="tabpanel"
                                aria-labelledby="custom-tabs-two-home-tab"
                            >
                                <tareas></tareas>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="custom-tabs-two-profile"
                                role="tabpanel"
                                aria-labelledby="custom-tabs-two-profile-tab"
                            >
                                <problemas></problemas>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="custom-tabs-two-messages"
                                role="tabpanel"
                                aria-labelledby="custom-tabs-two-messages-tab"
                            >
                                Morbi turpis dolor, vulputate vitae felis non,
                                tincidunt congue mauris. Phasellus volutpat
                                augue id mi placerat mollis. Vivamus faucibus eu
                                massa eget condimentum. Fusce nec hendrerit sem,
                                ac tristique nulla. Integer vestibulum orci
                                odio. Cras nec augue ipsum. Suspendisse ut velit
                                condimentum, mattis urna a, malesuada nunc.
                                Curabitur eleifend facilisis velit finibus
                                tristique. Nam vulputate, eros non luctus
                                efficitur, ipsum odio volutpat massa, sit amet
                                sollicitudin est libero sed ipsum. Nulla
                                lacinia, ex vitae gravida fermentum, lectus
                                ipsum gravida arcu, id fermentum metus arcu vel
                                metus. Curabitur eget sem eu risus tincidunt
                                eleifend ac ornare magna.
                            </div>
                            <div
                                class="tab-pane fade"
                                id="custom-tabs-two-settings"
                                role="tabpanel"
                                aria-labelledby="custom-tabs-two-settings-tab"
                            >
                                Pellentesque vestibulum commodo nibh nec
                                blandit. Maecenas neque magna, iaculis tempus
                                turpis ac, ornare sodales tellus. Mauris eget
                                blandit dolor. Quisque tincidunt venenatis
                                vulputate. Morbi euismod molestie tristique.
                                Vestibulum consectetur dolor a vestibulum
                                pharetra. Donec interdum placerat urna nec
                                pharetra. Etiam eget dapibus orci, eget aliquet
                                urna. Nunc at consequat diam. Nunc et felis ut
                                nisl commodo dignissim. In hac habitasse platea
                                dictumst. Praesent imperdiet accumsan ex sit
                                amet facilisis.
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
