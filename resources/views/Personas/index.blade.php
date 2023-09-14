@extends('personas.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>PROYECTO FINAL CUARTO NIVEL</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('api/personas/create') }}" class="btn btn-success btn-sm" title="Agrega Persona">
                            Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>1er nombre</th>
                                        <th>2do nombre</th>
                                        <th>1er apellido</th>
                                        <th>2do apellido</th>
                                        <th>fecha create</th>
                                        <th>fecha edicion</th>
                                        <th>users create</th>
                                        <th>users edicion</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Personas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nombre1 }}</td>
                                            <td>{{ $item->nombre2 }}</td>
                                            <td>{{ $item->apellido_pat }}</td>
                                            <td>{{ $item->apellido_mat }}</td>
                                            <td>{{ $item->fecha_creacion }}</td>
                                            <td>{{ $item->fecha_edicion }}</td>
                                            <td>{{ $item->usuario_creacion }}</td>
                                            <td>{{ $item->usuario_edicion }}</td>
                                            <td>{{ $item->estado }}</td>

                                            <td>
                                                <a href="{{ url('api/personas/' . $item->id) }}"
                                                    title="Ver persona"><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('api/personas/' . $item->id . '/edit') }}"
                                                    title="Editar persona><button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    Edit</button></a>

                                                <form method="POST" action="{{ url('api/personas' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete persona"
                                                        onclick='return confirm ("Confirm delete?")'><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
