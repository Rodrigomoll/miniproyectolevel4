<?php

namespace App\Http\Controllers;

use App\Models\docentes;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return docentes::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docente = new docentes();
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->email = $request->email;
        $docente->telefono = $request->telefono;
        $docente -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(docentes $docentes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(docentes $docentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $docente = docentes::find($id);
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->email = $request->email;
        $docente->telefono = $request->telefono;
        $docente -> save();

        return 'Docente actualizado correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $docente = docentes::find($id);
        $docente -> delete();

        return 'Docente eliminado correctamente'; 
    }
}
