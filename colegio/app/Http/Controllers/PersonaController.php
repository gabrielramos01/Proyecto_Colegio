<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Session;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personas = Persona::all();
        return view ('layouts.indexpersona ',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('layouts.createpersona ');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nacimiento' => 'required',
            'ci' => 'required',
        ]);
        
        Persona::create($request->all());
        
        Session::flash('message','El registro se realizo correctamente');
        return redirect()->route('layouts.indexpersona ');
    }

    
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
        return view('layouts.editpersona',compact('persona'));
    }

   
    public function update(Request $request, Persona $persona)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nacimiento' => 'required',
            'ci' => 'required',
        ]);
        
        $persona->update($request->all());

        $personas = Persona::all();
        return view ('layouts.indexpersona ',compact('personas'));
        
    }

    
    public function destroy(Persona $persona)
    {
        //
        $persona->delete();
        $personas = Persona::all();
        return view ('layouts.indexpersona ',compact('personas'));
    }
}
