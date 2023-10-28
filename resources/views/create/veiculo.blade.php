<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Veiculo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                <form class="p-3" action="{{ route('veiculo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Imagem</label>
                        <input type="file" class="form-control rounded" id="imagem" placeholder="" name="modelo">
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Veiculo</label>
                        <input type="text" class="form-control rounded" id="modelo" placeholder="Insira aqui o nome do veiculo" name="modelo">
                    </div>
                    <div class="mb-3">
                        <label for="marca_id" class="form-label">Modelo</label>
                        <select class="form-select" name="marca_id">
                            <option selected disabled>Selecione um modelo</option>
                            @foreach($modelos as $registro)
                            <option value="{{ $registro->id }}">{{ $registro->modelo }}, {{ $registro->marca->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="number" class="form-control rounded" id="preco" placeholder="Insira aqui o preço do veiculo" name="modelo">
                    </div>
                    <button type="submit" class="btn btn-primary bg-primary">Salvar Veiculo</button>
                </form>   
            </div>
        </div>
    </div>
</x-app-layout>
