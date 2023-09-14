@extends('personas.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Pagina de Personas</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Primer nombre : {{ $Personas->nombre1 }}</h5>
                <h5 class="card-title">segundo nombre : {{ $Personas->nombre2 }}</h5>
                <h5 class="card-title">Primer apellido : {{ $Personas->apellido_pat }}</h5>
                <h5 class="card-title">Segundo apellido : {{ $Personas->apellido_mat }}</h5>
                <p class="card-title">Fecha creacion : {{ $Personas->fecha_creacion }}</p>
                <p class="card-title">Fecha edicion : {{ $Personas->fecha_edicion }}</p>
                <p class="card-title">Usuario creacion : {{ $Personas->usuario_creacion }}</p>
                <p class="card-title">Usuario edicion : {{ $Personas->usuario_edicion }}</p>
                <p class="card-text">Estado : {{ $Personas->estado }}</p>
            </div>
        </div>
    </div>
