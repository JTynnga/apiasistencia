<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Brick\Math\BigInteger;
use Exception;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return Alumno::all();
    }
    public function getById($id)
    {
        return Alumno::Find($id);
    }
    public function create(Request $body)
    {
        $nuevoAlumno = new Alumno();
        $nuevoAlumno->nombre = "Jose Ynga";
        $nuevoAlumno->email = "joseynga@hotmail.com";
        $nuevoAlumno->telefono = "944834607";
        $nuevoAlumno->estado = 1;

        $nuevoAlumno->save();
        return "Alumno guardado exitosamente";
    }
    public function update(Request $body, $id)
    {
        $actualizarAlumno = Alumno::Find($id);
        $actualizarAlumno->nombre = $body->nombre;
        $actualizarAlumno->email = $body->email;
        $actualizarAlumno->telefono = $body->telefono;
        $actualizarAlumno->estado = $body->estado;

        $actualizarAlumno->save();
        return "Alumno con Id:" . $id . "actualizado exitosamente";
    }
    public function destroy($id)
    {
        Alumno::destroy($id);
        return "Alumno con Id:" . $id . "eliminado exitosamente";
    }



    /*    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index')->with('alumnos', $alumnos);
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*   public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*   public function store(Request $request)
    {
        $input = $request->all();
        Alumno::create($input);
        return redirect('alumno')->with('flash_message', 'Alumno agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*    public function show($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.show')->with('alumnos', $alumno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*    public function edit($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.edit')->with('alumnos', $alumno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);
        $input = $request->all();
        $alumno->update($input);
        return redirect('alumno')->with('flash_message', 'Alumno actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*    public function destroy($id)
    {
        try {
            Alumno::destroy($id);
            return redirect('alumno')->with('flash_message', 'Alumno borrado!');
        } catch (Illuminate\Database\QueryException $e) {    
            $status = 'Registro relacionado, imposible de eliminar';
        }*/
}
