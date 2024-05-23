<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="mt-2 text-xl text-center text text-gray-800 font-semibold">Registro Departamentos o Dependencias</h2>
                @if (@session('status'))
                    <h2>Creado con exito</h2>
                @endif


                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('departamento.store')}}">
                        @csrf
                        <div class="form-group">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre departamento</label>
                        <input type="text" class="form-control" name="nombre" rows="4" class="" placeholder="Escribe nombre..." required>
                        </input>
                         </div>
                         <div class="form-group">
                            <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                            <input type="text" class="form-control" name="direccion" rows="4"  placeholder="Direccion completa..." required>
                            </input>
                         </div>
                         <div class="form-group">
                            <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono Oficina</label>
                            <input type="number" class="form-control" name="telefono" rows="4"  placeholder="Numero contacto..." required>
                            </input>
                         </div>
                          <div class="form-group mt-2">
                            <label for="secretaria">Secretaria a cargo</label>
                            <select class="form-control" id="secretaria" name="secretaria">
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


