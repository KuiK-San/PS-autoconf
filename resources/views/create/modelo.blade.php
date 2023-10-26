<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Modelo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                <form class="p-3" action="{{ route('modelo.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control rounded" id="modelo" placeholder="Insira aqui o modelo" name="modelo">
                    </div>
                    <div class="mb-3">
                        <label for="marca_id" class="form-label">Marca</label>
                        <select class="form-select" name="marca_id">
                            <option selected disabled>Selecione uma Marca</option>
                            @foreach($registros as $registro)
                                <option value="{{ $registro->id }}">{{ $registro->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary bg-primary">Criar Modelo</button>
                </form>   
            </div>
        </div>
    </div>
</x-app-layout>
