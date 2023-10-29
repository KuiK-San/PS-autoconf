<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alterar Veiculo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p>Falha ao enviar o arquivo</p>
                    </div>
                @endif
                <form class="p-3" action="{{ route('veiculo.update', $veiculo->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem</label>
                        <input type="file" class="form-control rounded p-2 border border-secondary" id="imagem" placeholder="" name="imagem">
                    </div>
                    <div class="mb-3">
                        <label for="veiculo" class="form-label">Veiculo</label>
                        <input type="text" class="form-control rounded" id="veiculo" value="{{ $veiculo->veiculo }}" placeholder="Insira aqui o nome do veiculo" name="veiculo">
                    </div>
                    <div class="mb-3">
                        <label for="modelo_id" class="form-label">Modelo</label>
                        <select class="form-select border border-secondary" name="modelo_id">
                            <option disabled>Selecione um modelo</option>
                            @foreach($modelos as $registro)
                            <option id="option{{ $registro->id }}" value="{{ $registro->id }}">{{ $registro->modelo }}, {{ $registro->marca->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="number" class="form-control rounded" id="preco" value="{{ $veiculo->preco }}" placeholder="Insira aqui o preço do veiculo" name="preco">
                    </div>
                    <button type="submit" class="btn btn-primary bg-primary">Salvar Veiculo</button>
                </form>   
            </div>
        </div>
    </div>

    <script>
        document.querySelector('#option{{ $veiculo->modelo_id }}').setAttribute('selected', true)
    </script>
</x-app-layout>
