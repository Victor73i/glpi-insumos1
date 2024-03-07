<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DocumentacionController;
use App\Http\Controllers\EstadoLogController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\TipoDocumentacionController;
use App\Http\Controllers\CategoriaDocumentacionController;
use App\Http\Controllers\EstadoDocumentacionController;
use App\Http\Controllers\ReporteInsumoConsumibleController;
use App\Http\Controllers\ReporteInsumoFungibleController;
use App\Http\Controllers\ReporteInsumoInventariadoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\EquipoItController;
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
Route::resource('/tasks', TaskController::class);
Route::resource('/documentacions', DocumentacionController::class);
Route::resource('/estado_logs',EstadoLogController::class);
Route::resource('/logs', LogController::class);
Route::resource('/tipo_documentacions', TipoDocumentacionController::class);
Route::resource('/categoria_documentacions', CategoriaDocumentacionController::class);
Route::resource('/estado_documentacions', EstadoDocumentacionController::class);
Route::resource('/reporte_insumo_inventariados', ReporteInsumoInventariadoController::class);
Route::resource('/reporte_insumo_fungibles', ReporteInsumoFungibleController::class);
Route::resource('/reporte_insumo_consumibles', ReporteInsumoConsumibleController::class);
Route::resource('/tareas', TareaController::class);
Route::resource('/equipo_its', EquipoItController::class)->only(['index', 'show']);


Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);


Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details


Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::get('equipo_its/{search}', [EquipoItController::class, 'filter']);


//DOCUMENTACION
Route::put('documentacions/{documentacions}/toggle-complete', [DocumentacionController::class, 'toggle'])->name('documentacions.toggle-complete');
//ESTADO_LOG
Route::put('estado_logs/{estado_log}/toggle-complete', [EstadoLogController::class, 'toggle'])->name('estado_logs.toggle-complete');
//LOG
Route::put('logs/{log}/toggle-complete', [LogController::class, 'toggle'])->name('logs.toggle-complete');
//TIPO_DOCUMENTACION
Route::put('tipo_documentacions/{tipo_documentacion}/toogle-complete', [TipoDocumentacionController::class, 'toggle'])->name('tipo_documentacions.toggle-complete');
//UBICACION
//TASK
Route::put('tasks/{task}/toggle-complete', [TaskController::class, 'toggle'])->name('tasks.toggle-complete');
//CATEGORIA DOCUMENTACION
Route::put('categoria_documentacions/{categoria_documentacion}/toggle-complete', [CategoriaDocumentacionController::class, 'toggle'])->name('categoria_documentacions.toggle-complete');
Route::put('tareas/{tarea}/toggle-complete', [TareaController::class, 'toggle'])->name('tareas.toggle-complete');
Route::put('reporte_insumo_consumibles/{reporte_insumo_consumible}/toggle-complete', [ReporteInsumoConsumibleController::class, 'toggle'])->name('reporte_insumo_consumibles.toggle-complete');
