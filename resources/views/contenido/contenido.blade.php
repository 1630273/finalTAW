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
    <menuproyecto></menuproyecto>
</template>

<template v-if="menu==5">
<crear-proyecto></crear-proyecto>
</template>

<template v-if="menu==6">
    <mis-proyectos></mis-proyectos>
</template>

<template v-if="menu==7">
<anidado></anidado>
</template>

<template v-if="menu==8">
<usuarios></usuarios>
</template>

<template v-if="menu==9">
<servicios></servicios>
</template>

<template v-if="act">
<act></act>
</template>

<template v-if="task">
<tareas></tareas>
</template>

<template v-if="issue">
<problemas></problemas>
</template>

<template v-if="users-proj">
<usuarios-proyectos></usuarios-proyectos>
</template>

@endsection
