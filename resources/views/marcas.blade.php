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
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary text-bg-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ route('marca.destroy', $registro->id) }}" data-bs-name="{{ $registro->name }}">
                                        Delete
                                    </button>

                                    <button href="#">Update</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DELETE -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Excluir Marca?</h1>
                    <button   button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="text">Tem certeza que deseja excluir a Marca </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary text-bg-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="delete" action="" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" id=""  class="btn btn-primary text-bg-primary">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>""


    <!-- SCRIPT DELETE -->
    <script>
        const exampleModal = document.getElementById('deleteModal')
        if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', event => {
            let botao = event.relatedTarget
            let id = botao.getAttribute('data-bs-id')
            let name = botao.getAttribute('data-bs-name')

            document.querySelector('#text').innerHTML = `Tem certeza que deseja excluir a marca ${name}`
            let deletar = document.querySelector('#delete')
            
            deletar.setAttribute('action', id)

        })
        }
    </script>
</x-app-layout>