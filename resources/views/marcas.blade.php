<x-app-layout>
    
    <x-slot name="header" class="flex justify-between">
        <h2>Marcas</h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Marca</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($marcas as $marca)
                                <td>{{$marca->id}}</td>
                                <td>{{$marca->name}}</td>
                                <td>
                                    <a href="{{route('marca.destroy', $marca->id)}}">Delete</a>
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