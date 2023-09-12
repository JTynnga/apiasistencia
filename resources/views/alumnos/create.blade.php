@extends('alumnos.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Crear nuevo alumno</div>
        <div class="card-body">

            <form action="{{ url('alumno') }}" method="post">
                {!! csrf_field() !!}
                <label>Nombre:</label></br>
                <input type="text" name="nombre" id="nombre" class="form-control"></br>
                <label>email:</label></br>
                <input type="email" name="email" id="email" class="form-control"></br>
                <label>Telefono:</label></br>
                <input type="text" name="telefono" id="telefono" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
