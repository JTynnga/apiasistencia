@extends('personas.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Crear nuevo alumno</div>
        <div class="card-body">

            <form action="{{ url('personas') }}" method="post">
                {!! csrf_field() !!}
                <label>Primer nombre:</label></br>
                <input type="text" name="nombre1" id="nombre1" class="form-control"></br>
                <label>Segundo nombre:</label></br>
                <input type="text" name="nombre2" id="nombre2" class="form-control"></br>
                <label>Primer apellido:</label></br>
                <input type="text" name="apellido1" id="apellido_pat" class="form-control"></br>
                <label>Segundo apellido:</label></br>
                <input type="text" name="apellido2" id="apellido_mat" class="form-control"></br>
                <label>Fecha de creacion:</label></br>
                <input type="date" name="fecha_creacion" id="fecha_creacion" class="form-control"></br>
                <label>Usuario de creacion:</label></br>
                <input type="email" name="usuario_creacion" id="usuario_creacion" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
