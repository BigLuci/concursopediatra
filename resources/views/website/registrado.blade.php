@extends('website.principal_candidato')

@section('conteudo')

<div class="container">
    <br>
    <div class="alert alert-success">
        <strong>Sucesso!</strong> inscrição realizada.
    </div>
    <div class="col-12">
        <a href="{{ route('site.home_candidato') }}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
    </div>
</div>

<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Inscrição concluída!',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endsection