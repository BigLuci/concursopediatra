@extends('website.principal')

@section('conteudo')
<div class="intern-container">
    <div class="animate__animated animate__zoomIn">
        <br>
        <h3>Dados do candidato {{ $candidato->name }}</h3>
        <hr>
        <br>
        <h5>Dados pessoais</h5>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr style="text-align:center; vertical-align: middle;">
                        <th id="radius-top-left" scope="col">Nome</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">CPF</th>
                        <th scope="col">RG</th>
                        <th scope="col">Órgão emissor</th>
                        <th scope="col">Estado civil</th>
                        <th scope="col">Data de nascimento</th>

                        <th id="radius-top-right" scope="col">Local de nascimento</th>
                        <!-- <th scope="col">PCD?</th> -->
                    </tr>
                </thead>
                <tr style="text-align:center; vertical-align: middle;">
                    <td> {{ $candidato->name }} </td>
                    <td> {{ $candidato->sex }} </td>
                    <td> {{ $candidato->cpf }} </td>
                    <td> {{ $candidato->rg }} </td>
                    <td> {{ $candidato->issuing_agency }} </td>
                    <td> {{ $candidato->marital_status }} </td>
                    <td> {{date('d-m-Y', strtotime($candidato->birth_date))}} </td>
                    <td> {{ $candidato->birth_place }} </td>
                    <!-- <td> {{ $candidato->pcd }} </td> -->
                </tr>
            </table>
            <br>
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr style="text-align:center; vertical-align: middle;">
                        <th id="radius-top-left" scope="col">Filiação I</th>
                        <th scope="col">Filiação II</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">CRM</th>
                        <th scope="col">PCD?</th>
                        <th scope="col">Tipo de deficiência</th>
                        <th id="radius-top-right" scope="col">Classificação Internacional de Doenças</th>
                    </tr>
                </thead>
                <tr style="text-align:center; vertical-align: middle;">
                    <td> {{ $candidato->parentage_1 }} </td>
                    <td> {{ $candidato->parentage_2 }} </td>
                    <td> {{ $candidato->specialization }} </td>
                    <td> {{ $candidato->crm }} </td>
                    <td> {{ $candidato->pcd }} </td>
                    @if ($candidato->deficiency)
                        <td> {{ $candidato->deficiency }} </td>
                        <td> {{ $candidato->cid }} </td>
                    @else
                        <td> ––– </td>
                        <td> ––– </td>
                    @endif
                </tr>
            </table>

            <h5>Dados de contato</h5>
            <hr>
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr style="text-align:center; vertical-align: middle;">
                        <th id="radius-top-left" scope="col">E-mail</th>
                        <th id="radius-top-right" scope="col">Telefone</th>
                    </tr>
                </thead>
                <tr style="text-align:center; vertical-align: middle;">
                    <td> {{ $candidato->email }} </td>
                    <td> {{ $candidato->phone }} </td>
                </tr>
            </table>

            <h5>Documentação</h5>
            <hr>
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr style="text-align:center; vertical-align: middle;">
                        <th id="radius-top-left" scope="col">Doc com foto</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Currículo</th>
                        <th scope="col">Diploma</th>
                        <th scope="col">Residência/especialização</th>
                        <th scope="col">Inscrição CRM</th>
                        <th id="radius-top-right" scope="col">Laudo</th>
                    </tr>
                </thead>
                <tr style="text-align:center; vertical-align: middle;">
                    <td>
                        <a class="link" target="_blank" href="{{asset('storage/'.$candidato->doc_id)}}">Visualizar</a>
                        •
                        <a class="link" download href="{{asset('storage/'.$candidato->doc_id)}}">Baixar</a>
                    </td>

                    <td>
                        <a class="link" target="_blank" href="{{asset('storage/'.$candidato->doc_cpf)}}">Visualizar</a>
                        •
                        <a class="link" download href="{{asset('storage/'.$candidato->doc_cpf)}}">Baixar</a>
                    </td>

                    <td>
                        <a class="link" target="_blank" href="{{asset('storage/'.$candidato->doc_cv)}}">Visualizar</a>
                        •
                        <a class="link" download href="{{asset('storage/'.$candidato->doc_cv)}}">Baixar</a>
                    </td>

                    <td>
                        <a class="link" target="_blank" href="{{asset('storage/'.$candidato->doc_cv)}}">Visualizar</a>
                        •
                        <a class="link" download href="{{asset('storage/'.$candidato->doc_medicine)}}">Baixar</a>
                    </td>

                    <td>
                        <a class="link" target="_blank" href="{{asset('storage/'.$candidato->doc_cv)}}">Visualizar</a>
                        •
                        <a class="link" download href="{{asset('storage/'.$candidato->doc_re_esp)}}">Baixar</a>
                    </td>

                    <td>
                        <a class="link" target="_blank" href="{{asset('storage/'.$candidato->doc_cv)}}">Visualizar</a>
                        •
                        <a class="link" download href="{{asset('storage/'.$candidato->doc_crm)}}">Baixar</a>
                    </td>
                    @if ($candidato->doc_deficiency)
                        <td>
                            <a class="link" target="_blank" href="{{asset('storage/'.$candidato->doc_cv)}}">Visualizar</a>
                            •
                            <a class="link" download href="{{asset('storage/'.$candidato->doc_deficiency)}}">Baixar</a>
                        </td>
                    @else
                        <td>
                            –––
                        </td>
                    @endif
                </tr>
            </table>

        </div>
        <br>
        <div class="col-12">
            <a href="{{ route('site.listagem') }}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
        </div>

    </div>
</div>
@endsection