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
                            <input type="text" class="form-control rounded-start" placeholder="Insira a nova marca aqui" aria-label="Insira a nova marca aqui" name='name' aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Criar nova marca</button>
                        </div>

                    </form>
                    <table class="table table-striped col-12">
                        <thead>
                            <tr>
                                <th class="col-1">Id</th>
                                <th>Marca</th>
                                <th class="col-1 offset-11" >Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registros as $registro)
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->name }}</td>
                                <td>
                                    
                                    <button type="button" class="btn btn-primary text-bg-primary p-2" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-id="{{ route('marca.update', $registro->id) }}" data-bs-name="{{ $registro->name }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="btn btn-primary text-bg-danger p-2 border-0" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ route('marca.destroy', $registro->id) }}" data-bs-name="{{ $registro->name }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </button>
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
                        {{ method_field('DELETE') }} 
                        <button type="submit" id=""  class="btn btn-primary text-bg-primary">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- UPDATE MODAL -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel">Alterar Marca</h1>
                    <button   button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="update" action="" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-3">
                            <label for="nomeUpdate" class="form-label">Nome da marca</label>
                            <input type="text" class="form-control" name="name" id="nomeUpdate">
                        </div>

                        <div class="justify-content-end flex"><button type="submit" id=""  class="btn btn-primary text-bg-primary">Alterar</button></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary text-bg-secondary" data-bs-dismiss="modal">Cancelar</button>
                    
                        
                    
                </div>
            </div>
        </div>
    </div>


    <!-- SCRIPT UPDATE -->
    <script>
        let updateModal = document.getElementById('updateModal')
        if (updateModal) {
            updateModal.addEventListener('show.bs.modal', event => {
                console.log('123')
                let botao = event.relatedTarget
                let id = botao.getAttribute('data-bs-id')
                let name = botao.getAttribute('data-bs-name')
                
                document.querySelector('#nomeUpdate').value = name
                let deletar = document.querySelector('#update')
                
                deletar.setAttribute('action', id)
                
            })
        }
    </script>

    <!-- SCRIPT DELETE -->
    <script>
        let deleteModal = document.getElementById('deleteModal')
        if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', event => {
            console.log('123')
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