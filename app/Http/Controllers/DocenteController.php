<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Brick\Math\BigInteger;
use Exception;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return Docente::all();
    }
    public function getById($id)
    {
        return Docente::Find($id);
    }
    public function create(Request $body)
    {
        $nuevoDocente = new Docente();
        $nuevoDocente->nombre = "Jose Ynga";
        $nuevoDocente->email = "joseynga@hotmail.com";
        $nuevoDocente->telefono = "944834607";
        $nuevoDocente->documento = "DNI 01149518";
        $nuevoDocente->estado = 1;

        $nuevoDocente->save();
        return "Docente guardado exitosamente";
    }
    public function update(Request $body, $id)
    {
        $actualizarDocente = Docente::Find($id);
        $actualizarDocente->nombre = $body->nombre;
        $actualizarDocente->email = $body->email;
        $actualizarDocente->telefono = $body->telefono;
        $actualizarDocente->documento = $body->documento;
        $actualizarDocente->estado = $body->estado;

        $actualizarDocente->save();
        return "Docente con Id:" . $id . "actualizado exitosamente";
    }
    public function destroy($id)
    {
        Docente::destroy($id);
        return "Docente con Id:" . $id . "eliminado exitosamente";
    }



    /*    public function index()
    {
        $Docentes = Docente::all();
        return view('Docentes.index')->with('Docentes', $Docentes);
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*   public function create()
    {
        return view('Docentes.create');
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
        Docente::create($input);
        return redirect('Docente')->with('flash_message', 'Docente agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*    public function show($id)
    {
        $Docente = Docente::find($id);
        return view('Docentes.show')->with('Docentes', $Docente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*    public function edit($id)
    {
        $Docente = Docente::find($id);
        return view('Docentes.edit')->with('Docentes', $Docente);
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
        $Docente = Docente::find($id);
        $input = $request->all();
        $Docente->update($input);
        return redirect('Docente')->with('flash_message', 'Docente actualizado!');
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
            Docente::destroy($id);
            return redirect('Docente')->with('flash_message', 'Docente borrado!');
        } catch (Illuminate\Database\QueryException $e) {    
            $status = 'Registro relacionado, imposible de eliminar';
        }*/
}
