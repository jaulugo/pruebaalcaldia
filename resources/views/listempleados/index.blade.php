<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado Empleados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="mt-2 text-xl text-center text text-gray-800 font-semibold">Listado Empleados</h2>
                <div class="col-12">
                    <!-- -->
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Tipo contrato</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Acciones</th>
                            <th scope="col"></th>

                        </tr>
                        </thead>
                        <tbody>
                            @php $secuencia = 1; @endphp
                            @foreach ($empleados as $empleado)

                          <tr>
                            <th scope="row">{{$secuencia}}</th>
                            <td>{{ $empleado->identificacion }}</td>
                            <td>{{ $empleado->nombres }}</td>
                            <td>{{ $empleado->apellidos }}</td>
                            <td>{{ $empleado->correo }}</td>
                            <td>{{ $empleado->direccion }}</td>
                            <td>{{ $empleado->telefono }}</td>
                            <td>{{ $empleado->tipocontrato }}</td>
                            <td>{{ $empleado->departamento }}</td>
                            <td><a href="" class="btn btn-success">
                                <i class="bi bi-pencil"></i> Editar
                            </a></td>
                            <td><a href="" class="btn btn-danger">
                                <i class="bi bi-pencil"></i> Eliminar
                            </a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


