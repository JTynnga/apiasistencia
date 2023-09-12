@extends('alumnos.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Alumno</div>
        <div class="card-body">

            <form action="{{ url('alumno/' . $alumnos->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $alumnos->id }}" id="id" />
                <label>Nombre</label></br>
                <input type="text" name="nombre" id="nombre" value="{{ $alumnos->nombre }}"
                    class="form-control"></br>
                <label>email</label></br>
                <input type="email" name="email" id="email" value="{{ $alumnos->email }}" class="form-control"></br>
                <label>telefono</label></br>
                <input type="text" name="telefono" id="telefono" value="{{ $alumnos->telefono }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
