<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Models\Chirp;
use App\Models\Departamento;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //rutas con nombre empleado
    Route::get('/empleado',[EmpleadoController::class,'index'])->name('empleado.index');
    //rutas para guardar
    Route::post('/empleado', [EmpleadoController::class,'store'])->name('empleado.store');

    //rutas con nombre empleado
    Route::get('/departamento',[DepartamentoController::class,'index'])->name('departamento.index');
    //llama el controlador store para guardar
    Route::post('/departamento', [DepartamentoController::class,'store'])->name('departamento.store');

    //rutas para listar los empleados
    Route::get('/listempleados',[EmpleadoController::class,'show'])->name('listempleados.index');

    //rutas para listar los departamento
    Route::get('/listdepartamento',[DepartamentoController::class,'show'])->name('listdepartamento.index');

    //ruta para guardar con metodo post
    Route::post('/chirps', function () {
        //return 'Esperando respuesta';
        Chirp::create([
            'message'=>request('message'), //del campo,del name del input
            'user_id' => auth()->id(), //del usuario autenticado
        ]);
        //retornar a la ruta
        return to_route('chirps.index');
        });
});

require __DIR__.'/auth.php';
