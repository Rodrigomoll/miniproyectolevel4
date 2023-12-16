<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\AsistenciasController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\MatriculasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/docentes',[DocentesController:: class, 'index']);
Route::post('/docentes',[DocentesController:: class, 'store']);
Route::put('/docentes/{id}',[DocentesController:: class, 'update']);
Route::delete('/docentes/{id}',[DocentesController:: class, 'destroy']);

Route::get('/cursos',[CursosController:: class, 'index']);
Route::post('/cursos',[CursosController:: class, 'store']);
Route::put('/cursos/{id}',[CursosController:: class, 'update']);
Route::delete('/cursos/{id}',[CursosController::class, 'destroy']);

Route::get('/alumnos',[AlumnosController:: class, 'index']);
Route::post('/alumnos',[AlumnosController:: class, 'store']);
Route::put('/alumnos/{id}',[AlumnosController:: class, 'update']);
Route::delete('/alumnos/{id}',[AlumnosController::class, 'destroy']);


Route::get('/matriculas', [MatriculasController::class, 'index']);
Route::post('/matriculas', [MatriculasController::class, 'store']);
Route::put('/matriculas/{matricula}', [MatriculasController::class, 'update']);
Route::delete('/matriculas/{matricula}',[MatriculasController::class, 'destroy']);
Route::post('/matricularAlumnosCurso',[MatriculasController::class, 'matricularAlumnosCursos']);

Route::get('/asistencias', [AsistenciasController::class, 'index']);
Route::post('/asistencias', [AsistenciasController::class, 'store']);
Route::get('/asistencias/{asistencias}', [AsistenciasController::class, 'show']);
Route::put('/asistencias/{asistencias}', [AsistenciasController::class, 'update']);
Route::delete('/asistencias/{asistencias}', [AsistenciasController::class, 'destroy']);