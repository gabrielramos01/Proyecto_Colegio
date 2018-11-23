<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/persona', 'PersonaController');
Route::resource('/profesor', 'ProfesorController');
Route::resource('/alumno', 'AlumnoController');
Route::resource('/administrativo', 'AdministrativoController');
Route::resource('/asignatura', 'AsignaturaController');
Route::resource('/asignaturanivel', 'AsignaturaNivelController');
Route::resource('/aula', 'AulaController');
Route::resource('/horario', 'HorarioController');
Route::resource('/nivelgrado', 'NivelGradoController');
Route::resource('/nota', 'NotaController');
Route::resource('/rol', 'RolController');
