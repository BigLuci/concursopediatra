@extends('website.principal')

@section('conteudo')
<div class="intern-container">
    <div class="animate__animated animate__zoomIn">
        @if ($candidatos->isEmpty())
        </br>
        <div class="alert alert-danger">
            Ainda não há inscrições para exibir!
        </div>
        <div class="col-12">
            <a href="{{ route('site.home') }}" class="btn btn-secondary" role="button" data-bs-toggle="button">Voltar</a>
        </div>
        @else
        </br>
        <h3>Listagem dos candidatos</h3>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr style="text-align:center; vertical-align: middle;">
                        <th id="radius-top-left" scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">RG</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">Data de nascimento</th>
                        <th scope="col">PCD</th>
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
                        <div>
                            <a href="{{ route('site.dados_candidato', [$c->id]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


        <div id="delay" class="animate__animated animate__backOutRight animate__delay-5s">
            <div class="teach-box animate__animated animate__fadeInLeft">
                <p style="font-weight:300; color: #969600;">💡 Dica: clique no ícone do olho para ver a documentação
                    e mais detalhes do candidato</p>
            </div>
        </div>


        <div class="col-12">
            <a href="{{ route('site.home') }}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
            <a href="{{ route('site.exclui') }}" class="btn btn-danger" role="button" data-bs-toggle="button">Excluir</a>
        </div>

        @endif
    </div>
</div>

<script>
    var $delay = $('#delay')
    $delay.attr('hidden', 'hidden');
    $(document).ready(function() {
        setTimeout(function() {
            $delay.removeAttr('hidden');
        }, 4000);
    });
    $(document).ready(function() {
        setTimeout(function() {
            $('#delay').hide();
        }, 10000);
    });
</script>
@endsection