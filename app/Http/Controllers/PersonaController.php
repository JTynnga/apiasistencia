<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Brick\Math\BigInteger;
use Exception;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $Personas = Persona::all();
        return view('Personas.index')->with('Personas', $Personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Personas.create');
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
        Persona::create($input);
        return redirect('Personas')->with('flash_message', 'Persona agregado!');
    }

    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Persona = Persona::find($id);
        return view('Personas.show')->with('Personas', $Persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Persona = Persona::find($id);
        return view('Personas.edit')->with('Personas', $Persona);
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
        $Persona = Persona::find($id);
        $input = $request->all();
        $Persona->update($input);
        return redirect('Personas')->with('flash_message', 'Persona actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Persona::destroy($id);
        return redirect('Personas')->with('flash_message', 'Persona borrado!');
    }
}
