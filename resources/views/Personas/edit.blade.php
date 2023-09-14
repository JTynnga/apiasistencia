@extends('personas.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Persona</div>
        <div class="card-body">

            <form action="{{ url('/api/personas/') }}" method="POST">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $Personas->id }}" id="id" />
                <label>Primer nombre</label></br>
                <input type="text" name="nombre1" id="nombre1" value="{{ $Personas->nombre1 }}"
                    class="form-control"></br>
                <label>Segundo nombre</label></br>
                <input type="text" name="nombre2" id="nombre2" value="{{ $Personas->nombre2 }}"
                    class="form-control"></br>
                <label>Primer apellido</label></br>
                <input type="text" name="apellido1" id="apellido_pat" value="{{ $Personas->apellido_pat }}"
                    class="form-control"></br>
                <label>Segundo apellido</label></br>
                <input type="text" name="apellido2" id="apellido_mat" value="{{ $Personas->apellido_mat }}"
                    class="form-control"></br>
                <label>Fecha edicion</label></br>
                <input type="date" name="fecha_edicion" id="fecha_edicion" value="{{ $Personas->fecha_edicion }}"
                    class="form-control"></br>
                <label>Usuario edicion</label></br>
                <input type="text" name="usuario_edicion" id="usuario_edicion" value="{{ $Personas->usuario_edicion }}"
                    class="form-control"></br>

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
