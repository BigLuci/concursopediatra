@extends('website.principal_candidato')

@section('conteudo')
<section class="text-center container">
    <div class="row py-lg-1">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Bem-vindo(a)!</h1>
            <hr>
        </div>
    </div>
</section>


<div class="animate__animated animate__bounceInUp" id="container">
    <div class="row">
        <div class="col" align="right">
            <div class="card shadow text-left hover-personalised" style="width: 18rem;" id="border-radiusness">
                <a href="{{ route('site.inscricao') }}">
                    <svg id="top-img-border" class="bd-placeholder-img card-img-top" height="230" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Candidato</title>
                        <image width="405px" href="doctor_image.jpg">
                    </svg>
                    <div class="card-body">
                        <h4>Candidato</h4>
                        <p class="card-text">Formulário de inscrição</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col">

            <div class="card shadow text-left hover-personalised" style="width: 18rem;" id="border-radiusness">
                <a href="{{ route('site.home') }}">
                    <svg id="top-img-border" class="bd-placeholder-img card-img-top" height="230" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Recrutador</title>
                        <image width="405px" href="recruiter_image.jpg">
                    </svg>
                    <div class="card-body">
                        <h4>Recursos humanos</h4>
                        <p class="card-text">Área dos recrutadores</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection