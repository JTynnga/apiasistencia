@extends('alumnos.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Pagina de Alumnos</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Nombre : {{ $alumnos->nombre }}</h5>
                <p class="card-text">email : {{ $alumnos->email }}</p>
                <p class="card-text">Telefono : {{ $alumnos->telefono }}</p>
                <p class="card-text">Estado : {{ $alumnos->estado }}</p>
            </div>
            </hr>
        </div>
    </div>
