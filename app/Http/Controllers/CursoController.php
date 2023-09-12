<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Brick\Math\BigInteger;
use Exception;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return Curso::all();
    }
    public function getById($id)
    {
        return Curso::Find($id);
    }
    public function create(Request $body)
    {
        $nuevoCurso = new Curso();
        $nuevoCurso->descri = "matematica pura";
        $nuevoCurso->docente_id = 7;
        $nuevoCurso->estado = 1;

        $nuevoCurso->save();
        return "Curso guardado exitosamente";
    }
    public function update(Request $body, $id)
    {
        $actualizarCurso = Curso::Find($id);
        $actualizarCurso->descri = $body->descri;
        $actualizarCurso->estado = $body->estado;

        $actualizarCurso->save();
        return "Curso con Id:" . $id . "actualizado exitosamente";
    }
    public function destroy($id)
    {
        Curso::destroy($id);
        return "Curso con Id:" . $id . "eliminado exitosamente";
    }



    /*    public function index()
    {
        $Cursos = Curso::all();
        return view('Cursos.index')->with('Cursos', $Cursos);
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*   public function create()
    {
        return view('Cursos.create');
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
        Curso::create($input);
        return redirect('Curso')->with('flash_message', 'Curso agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*    public function show($id)
    {
        $Curso = Curso::find($id);
        return view('Cursos.show')->with('Cursos', $Curso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*    public function edit($id)
    {
        $Curso = Curso::find($id);
        return view('Cursos.edit')->with('Cursos', $Curso);
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
        $Curso = Curso::find($id);
        $input = $request->all();
        $Curso->update($input);
        return redirect('Curso')->with('flash_message', 'Curso actualizado!');
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
            Curso::destroy($id);
            return redirect('Curso')->with('flash_message', 'Curso borrado!');
        } catch (Illuminate\Database\QueryException $e) {    
            $status = 'Registro relacionado, imposible de eliminar';
        }*/
}
