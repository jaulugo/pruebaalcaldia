<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="mt-2 text-xl text-center text text-gray-800 font-semibold">Registro Basico Empleados</h2>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                    <script>
                        Swal.fire({
                            title: 'Éxito',
                            text: '{{ session('success') }}',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    </script>
                @endif
                <form method="POST" action="{{route('empleado.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="identificacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identificacion</label>
                            <input type="number" class="form-control" name="identificacion" rows="4" class="" placeholder="Escribe tu identificacion...">
                            </input>
                        </div>
                        <div class="form-group">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombres</label>
                        <input type="text" class="form-control" name="nombres" rows="4" class="" placeholder="Escribe tus nombres...">
                        </input>
                         </div>
                         <div class="form-group">
                            <label for="apellidos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" rows="4"  placeholder="Escribe tus apellidos...">
                            </input>
                         </div>
                         <div class="form-group">
                            <label for="correo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
                            <input type="email" class="form-control" name="correo" rows="4"  placeholder="correo@.com">
                            </input>
                         </div>
                         <div class="form-group">
                            <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                            <input type="text" class="form-control" name="direccion" rows="4"  placeholder="Direccion completa...">
                            </input>
                         </div>
                         <div class="form-group">
                            <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono Movil</label>
                            <input type="number" class="form-control" name="telefono" rows="4"  placeholder="Numero contacto...">
                            </input>
                         </div>
                         <div class="form-group mt-2">
                            <label for="tipocontrato">Tipo Contrato</label>
                            <select class="form-control"  name="tipocontrato">
                              <option>Fijo de planta</option>
                              <option>Temporal de planta</option>
                              <option>Prestacion de servicios</option>
                            </select>
                          </div>
                          <div class="form-group mt-2">
                            <label for="departamento">Departamento o Oficina</label>
                            <select class="form-control"  name="departamento">
                              <option>Secretaria de Tic</option>
                              <option>Secretaria de Hacienda</option>
                              <option>Secretaria de Educacion</option>
                            </select>
                          </div>
                        <button class="mt-2 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            Guardar Datos
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


