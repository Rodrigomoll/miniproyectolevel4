<?php

namespace App\Http\Controllers;

use App\Models\matriculas;
use Illuminate\Http\Request;

class MatriculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matriculas = matriculas::all();
        return response()->json(['matriculas' => $matriculas], 200);
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
            'id_alumno' => 'required|exists:alumnos,id',
            'id_curso' => 'required|exists:cursos,id',
        ]);

        $matriculaExistente = matriculas::where('id_alumno', $request->id_alumno)
            ->where('id_curso', $request->id_curso)
            ->exists();

        if ($matriculaExistente) {
            return response()->json(['message' => 'El alumno ya está matriculado en este curso'], 400);
        }

        matriculas::create([
            'id_alumno' => $request->id_alumno,
            'id_curso' => $request->id_curso,
        ]);

        return response()->json(['message' => 'Matriculación exitosa'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(matriculas $matriculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(matriculas $matriculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, matriculas $matriculas)
    {
        $request->validate([
            'id_alumno' => 'required|exists:alumnos,id',
            'id_curso' => 'required|exists:cursos,id',
        ]);

        $matriculas->update([
            'id_alumno' => $request->id_alumno,
            'id_curso' => $request->id_curso,
        ]);

        return response()->json(['message' => 'Matrícula actualizada exitosamente'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matriculas $matriculas)
    {
        $matriculas->delete();
        return response()->json(['message' => 'Matrícula eliminada exitosamente'], 200);
    }

    public function matricularAlumnosCursos(Request $request)
    {
        $request->validate([
            'id_alumno' => 'required|exists:alumnos,id',
            'id_curso' => 'required|exists:cursos,id',
        ]);

        $matriculaExistente = matriculas::where('id_alumno', $request->id_alumno)->where('id_curso', $request->id_curso)
        ->exists();

        if ($matriculaExistente){
            return response()->json(['message' => 'El alumno ya esta matriculado en este curso']);
        }

        matriculas::create([
            'id_alumno' => $request->id_alumno,
            'id_curso' => $request->id_curso,
        ]);

        return response()->json(['message' => 'Matriculación exitosa']);
    }
}
