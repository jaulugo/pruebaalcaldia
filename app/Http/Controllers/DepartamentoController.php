<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('departamento.index');
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
        //return del modelo departamento insert';
        Departamento::create([
            'nombre'=>request('nombre'), //del campo,del name del input
            'direccion'=>request('direccion'),
            'telefono'=>request('telefono'),
            'secretaria'=>request('secretaria'),
        ]);
        //mensaje
        session()->flash('status');
        //retornar a la ruta
         return to_route('empleado.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        $departamento = Departamento::all(); // Obtener todos los empleados
        return  view('listdepartamento.index', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        //
    }
}
