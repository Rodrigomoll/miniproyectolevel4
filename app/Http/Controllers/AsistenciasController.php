<?php

namespace App\Http\Controllers;

use App\Models\asistencias;
use Illuminate\Http\Request;

class AsistenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencias = asistencias::all();
        return response()->json(['asistencias' => $asistencias],200);
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
        $request->validate([
            'id_matricula' => 'required|exists:matriculas,id',
            'fecha' => 'required|date',
            'estado' => 'required|in:A,T,F',
        ]);

        asistencias::create([
            'id_matricula' => $request->id_matricula,
            'fecha' => $request->fecha,
            'estado' => $request->estado,
        ]);

        return response()->json(['message' => 'Registro de asistencia exitoso'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(asistencias $asistencias)
    {
        return response()->json(['asistencias'=> $asistencias],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(asistencias $asistencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, asistencias $asistencias)
    {
        $request->validate([
            'id_matricula' => 'required|exists:matriculas,id',
            'fecha' => 'required|exists:matriculas,fecha',
            'estado' => 'required|exists:matriculas,estado',
        ]);

        $asistencias->update([
            'id_matricula' => $request->id_matricula,
            'fecha' => $request->fecha,
            'estado' => $request->estado,
        ]);
        return response()->json(['message' => 'Asistencia actualizada exitosamente'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(asistencias $asistencias)
    {
        $asistencias->delete();
        return response()->json(['message' => 'Asistencia eliminada exitosamente'],200);
    }
}
