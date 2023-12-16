<?php

namespace App\Http\Controllers;

use App\Models\cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return cursos::all();
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
        $curso = new cursos();
        $curso->nombres = $request->nombres;
        $curso -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(cursos $cursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cursos $cursos)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $curso = cursos::find($id);
        $curso->nombres = $request->nombres;
        $curso -> save();

        return 'Curso actualizado correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso = cursos::find($id);
        $curso -> delete();

        return 'Curso eliminado correctamente';
    }
}
