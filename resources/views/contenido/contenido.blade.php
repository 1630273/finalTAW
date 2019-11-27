@extends('principal')
@section('contenido')
<template v-if="menu==0">
<dashboard></dashboard>
</template>

<template v-if="menu==1">
<metodos-retiro></metodos-retiro>
</template>

<template v-if="menu==2">
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<h1>Contenido</h1>
</div>
<!-- /.content-wrapper -->
</template>

<template v-if="menu==3">
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<h1>Contenido</h1>
</div>
<!-- /.content-wrapper -->
</template>

<template v-if="menu==4">
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<h1>Contenido</h1>
</div>
<!-- /.content-wrapper -->
</template>

@endsection
