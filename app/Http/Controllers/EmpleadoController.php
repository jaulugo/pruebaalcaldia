<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('empleado.index');
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
        Empleado::create([
            'identificacion'=>request('identificacion'), //del campo,del name del input
            'nombres'=>request('nombres'),
            'apellidos'=>request('apellidos'),
            'correo'=>request('correo'),
            'direccion'=>request('direccion'),
            'telefono'=>request('telefono'),
            'tipocontrato'=>request('tipocontrato'),
            'departamento'=>request('departamento'),

        ]);
        //mensaje
        session()->flash('success', 'Empleado guardado correctamente');
        //retornar a la ruta
         return to_route('empleado.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {

        $empleados = Empleado::all(); // Obtener todos los empleados
        return  view('listempleados.index', compact('empleados'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
