<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="height: 200%">
    <style>
        #subImagem {
            width: 23%;
            position: absolute;
            margin-top: 25%;
            margin-left: 38%;
        }

        @media only screen and (max-width: 600px) {
            #subImagem {
                width: 40%;
                margin-left: 30%;
                margin-top: 20%;
            }
        }

        #containerPai {
            margin-bottom: 10%;
        }

        @media only screen and (max-width: 600px) {
            #containerPai {
                margin-bottom: 20%;
            }
        }

        .bi-whatsapp {
            position: fixed;
            font-size: 30px;
            margin-left: 90%;
            color: green;
            bottom: 5%;
            z-index: 1000;

        }
    </style>
    <a href="#a"><i class="bi bi-whatsapp"></i></a>
    <div class="container" id="containerPai">
        <div class="card">
            <img src="{{ asset('imgs/foto_capa.jpg') }}" class="card-img" alt="imagem capa">
            <div class="card-img-overlay">

                <div class="d-flex justify-content-between">
                    @if (Route::getCurrentRoute()->uri != '/')
                        <a type="button" href="{{ route('home') }}" class="btn btn-outline-light fw-bold">
                            <i class="bi bi-arrow-90deg-left"></i> Voltar</a>
                            @else
                        <div></div>
                    @endif

                    <button type="button" class="btn btn-outline-success fw-bold mx-2">
                        Aberto <i class="bi bi-info-circle"></i></button>
                </div>


            </div>
            <div class="card-img-overlay" id="subImagem">
                <img src="{{ asset('imgs/foto_sub_capa.jpg') }}" width="100px" class="card-img" alt="imagem sub capa">

            </div>
        </div>
    </div>

    @yield('content')

    <footer class="bg-light text-center text-lg-start mt-5">
        <!-- Copyright -->
        <div id="footerAnoAtual" class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">


        </div>
        <!-- Copyright -->
    </footer>
</body>
<script>
    const dataAtual = new Date();
    console.log(document.getElementById('footerAnoAtual').innerHTML =
        `<a target="_blank" class="text-dark" style="text-decoration:none;" href="https://alltechsistemas.com.br/">© ${dataAtual.getFullYear()} Copyright: <b>alltechsistemas.com.br</></a>`
    )
</script>

</html>
