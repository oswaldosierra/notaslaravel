<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        <button type="button" class="border text-white border-indigo-500 bg-indigo-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                            <a href="{{ url("/notas/create");}}">Crear</a>
                        </button>
                    </div>
                    <table id="notas" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($notas as $nota)
                            <tr>
                                <td>{{$nota->id}}</td>
                                <td>{{$nota->title}}</td>
                                <td>{{$nota->content}}</td>
                                <td>
                                    <button type="button" class="border text-white border-indigo-500 bg-indigo-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Editar</button>
                                    <button type="button" class="border text-white border-red-500 bg-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">Eliminar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $notas->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
