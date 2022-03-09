@extends('website.principal')

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
            <a href="{{ route('site.listagem') }}">
                <div class="card shadow text-left hover-personalised" style="width: 18rem;" id="border-radiusness">
                    <svg id="top-img-border" class="bd-placeholder-img card-img-top" height="230" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Listagem</title>
                        <image width="405px" href="list_image.jpg">
                    </svg>
                    <div class="card-body">
                        <h4>Listagem</h4>
                        <p class="card-text">Listagem de candidatos com suas respectivas informações pessoais e
                            detalhes</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col" align="left">
            <a href="{{ route('site.exclui') }}">
                <div class="card shadow text-left hover-personalised" style="width: 18rem;" id="border-radiusness">
                    <svg id="top-img-border" class="bd-placeholder-img card-img-top" height="230" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Exclusão</title>
                        <image width="405px" href="eraser_image.jpg">
                    </svg>
                    <div class="card-body">
                        <h4>Exclusão</h4>
                        <p class="card-text">Exclusão de candidatos incompatíveis ou com inscrição irregular</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection