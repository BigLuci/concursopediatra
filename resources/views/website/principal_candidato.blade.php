<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <meta name="theme-color" content="#7952b3">
    <link rel='icon' href="favicon.ico" sizes="any">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Processo DGRH</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        /* .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        } */

        a {
            color: inherit;
            text-decoration: none;
        }

        a:hover {
            color: #686868;
            text-decoration: none;
            cursor: pointer;
        }

        img.map {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 85%
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body>

    <div class="container-personalised" style="background-color:white">


        <div class="row">

            <div style="margin-bottom: 15px">
                <div class="home-banner">

                    <img id="img-banner" class="img-responsive" class="col-12 img-fluid" src="{{ asset('img/banner_principal.jpg') }}">

                </div>
                <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-9xl mx-auto px-0 sm:px-6 lg:px-8 ">


                        <div class="flex justify-between h-12" style="background-color: #f3f3f3">
                            <div class="flex">
                                <!-- Navigation Links -->
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link href="{{ route('site.home_candidato') }}" :active="request()->routeIs('site.home_candidato')">
                                        {{ __('Home') }}
                                    </x-nav-link>
                                    <x-nav-link href="{{ route('site.inscricao') }}" :active="request()->routeIs('site.inscricao')">
                                        {{ __('Inscrição') }}
                                    </x-nav-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </div>

        <div class="container">
            @yield('conteudo')
        </div>
        <br>

        <footer>
            <hr>
            <div>
                <img class="centralised" src="{{ asset('BrasaoGoverno2019.png') }}" width="20%" role="img">
            </div>
            <p align="center" style="margin-bottom: 0px; font-size: 15px;">Secretaria de Estado de Saúde do Amazonas</p>
            <p align="center" style="margin-bottom: 0px; font-size: 15px;">Departamento de Tecnologia da Informação –
                DETIN</p>
            <p align="center" style="margin-bottom: 0px; font-size: 15px;">© {{ date('Y') }} - Todos os direitos
                reservados.</p>
            <br>
        </footer>

    </div>
</body>

</html>