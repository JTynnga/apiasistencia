<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Brick\Math\BigInteger;
use Exception;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Usuarios = Usuario::all();
        return view('Usuarios.index')->with('Usuarios', $Usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Usuario::create($input);
        return redirect('Usuario')->with('flash_message', 'Usuario agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Usuario = Usuario::find($id);
        return view('Usuarios.show')->with('Usuarios', $Usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Usuario = Usuario::find($id);
        return view('Usuarios.edit')->with('Usuarios', $Usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Usuario = Usuario::find($id);
        $input = $request->all();
        $Usuario->update($input);
        return redirect('Usuario')->with('flash_message', 'Usuario actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect('Usuario')->with('flash_message', 'Usuario borrado!');
    }
}
