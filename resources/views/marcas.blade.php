<x-app-layout>
    
    <x-slot name="header" class="flex">
        <h2 class="fw-bolder">Marcas</h2>
        
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Marca</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registros as $registro)
                                <td>{{$registro->id}}</td>
                                <td>{{$registro->name}}</td>
                                <td>
                                    <a href="{{route('marca.destroy', $registro->id)}}">Delete</a>
                                    <a href="#">Update</a>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>