<x-app-layout>
    
    <x-slot name="header" class="flex">
        <h2 class="fw-bolder">Marcas</h2>
        
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('marca.store') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Insira a nova marca aqui" aria-label="Insira a nova marca aqui" name='name' aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Criar nova marca</button>
                        </div>

                    </form>
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
                            <tr>
                                <td>{{$registro->id}}</td>
                                <td>{{$registro->name}}</td>
                                <td>
                                    <a href="{{route('marca.destroy', $registro->id)}}">Delete</a>
                                    <a href="#">Update</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>