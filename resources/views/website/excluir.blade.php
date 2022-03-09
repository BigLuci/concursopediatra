@extends('website.principal')

@section('conteudo')
<div class="intern-container">
    <div class="animate__animated animate__zoomIn">
        @if ($candidatos->isEmpty())
        </br>
        <div class="alert alert-danger">
            Ainda não há candidatos para excluir!
        </div>
        <div class="col">
            <a href="{{ route('site.home') }}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
        </div>
        @else
        </br>
        <h3>Exclusão de candidatos</h3>
        <hr>

        <style>
            .table-hover tbody tr:hover td,
            .table-hover tbody tr:hover th {
                background-color: #ffc7ce;
                color: #ad0007;
            }
        </style>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr style="text-align:center; vertical-align: middle;">
                        <th id="radius-top-left" scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">RG</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">Data de nascimento</th>
                        <th scope="col">PCD?</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th id="radius-top-right" scope="col"></th>
                    </tr>
                </thead>
                @foreach ($candidatos as $c)
                <tr style="text-align:center; vertical-align: middle;">
                    <td> {{ $c->name }} </td>
                    <td> {{ $c->cpf }} </td>
                    <td> {{ $c->rg }} </td>
                    <td> {{ $c->specialization }} </td>
                    <td> {{date('d-m-Y', strtotime($c->birth_date))}} </td>
                    <td> {{ $c->pcd }} </td>
                    <td> {{ $c->email }} </td>
                    <td> {{ $c->phone }} </td>
                    <td>
                        <a onclick="ConfirmDelete({{ $c->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#DC3545" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('site.listagem') }}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
            </div>
        </div>


        <script>
            function ConfirmDelete(id) {

                Swal.fire({
                    title: 'Tem certeza que deseja excluir?',
                    text: "Esta ação não pode ser revertida",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, excluir!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Inscrição excluída!',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        location.href = `cadastro/remove/${id}`
                    }
                })
            }
        </script>
    </div>
</div>
@endif


@endsection