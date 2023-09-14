<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Brick\Math\BigInteger;
use Exception;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $Roles = Role::all();
        return view('Roles.index')->with('Roles', $Roles);
    }
    public function create()
    {
        return view('Roles.create');
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
        Role::create($input);
        return redirect('Role')->with('flash_message', 'Rol agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Role = Role::find($id);
        return view('Roles.show')->with('Roles', $Role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Role = Role::find($id);
        return view('Roles.edit')->with('Roles', $Role);
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
        $Role = Role::find($id);
        $input = $request->all();
        $Role->update($input);
        return redirect('Role')->with('flash_message', 'Rol actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::destroy($id);
        return redirect('Role')->with('flash_message', 'Role borrado!');
    }
}
