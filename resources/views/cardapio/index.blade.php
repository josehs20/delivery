@extends('layouts.app')

@section('content')
    <style>
        #subImagem {
            width: 23%;
            position: absolute;
            margin-top: 25%;
            margin-left: 2%;
        }

        @media only screen and (max-width: 600px) {
            #subImagem {
                width: 35%;
                margin-left: 0%;
                margin-top: 20%;
            }
        }

        #containerPai {
            margin-bottom: 0%;
        }

        @media only screen and (max-width: 600px) {
            #containerPai {
                margin-bottom: 0%;
            }
        }

        #navbarTitulos {
            margin-left: 28%;
            margin-top: 2%;
        }

        .divPaiMenu {
            width: 90%;
            overflow: auto;
            overflow-y: hidden;
            margin: 0 auto;
            white-space: nowrap
        }

        .search-box {
            width: fit-content;
            height: fit-content;
            position: relative;
            margin-left: 32%;
            bottom: 50%;
            z-index: 1000;
        }

        .input-search {
            height: 50px;
            width: 50px;
            border-style: none;
            padding: 10px;
            font-size: 18px;
            letter-spacing: 2px;
            outline: none;
            border-radius: 25px;
            transition: all .5s ease-in-out;
            background-color: #22a6b3;
            padding-right: 40px;
            color: #fff;
        }

        .input-search::placeholder {
            color: rgba(255, 255, 255, .5);
            font-size: 18px;
            letter-spacing: 2px;
            font-weight: 100;
        }

        .btn-search {
            width: 50px;
            height: 50px;
            border-style: none;
            font-size: 20px;
            font-weight: bold;
            outline: none;
            cursor: pointer;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            color: #ffffff;
            background-color: transparent;
            pointer-events: painted;
        }

        .btn-search:focus~.input-search {
            width: 300px;
            border-radius: 0px;
            background-color:  rgb(83, 82, 82);;
            border-bottom: 1px solid rgba(255, 255, 255, .5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }

        .input-search:focus {
            width: 300px;
            border-radius: 0px;
            background-color: rgb(83, 82, 82);
            border-bottom: 1px solid rgba(255, 255, 255, .5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }
        @media only screen and (max-width: 600px) {
            #navbarTitulos {
                margin-left: 32%;
            }
            .search-box{

                margin-left: 5%;
            }
        }
    </style>
    <div id="navbarTitulos" class="d-flex">
        <div class="p-2 flex-fill">
            <h3 class="fw-bold">Restaurante de teste</h3>
        </div>
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-center p-3 divPaiMenu">
            <a class="btn btn-light active mx-3" style="text-decoration:none;border: 1px solid black"
                href="#">Bebidas</a>
            <a class="btn btn-light mx-2" style="text-decoration:none;border: 1px solid black" href="#">Bebidas</a>
            <a class="btn btn-light mx-2" style="text-decoration:none;border: 1px solid black" href="#">Bebidas</a>
            <a class="btn btn-light mx-2" style="text-decoration:none;border: 1px solid black" href="#">Bebidas</a>
            <a class="btn btn-light mx-2" style="text-decoration:none;border: 1px solid black" href="#">Bebidas</a>
            <a class="btn btn-light mx-2" style="text-decoration:none;border: 1px solid black" href="#">Bebidas</a>
            {{-- <a class="btn btn-light mx-2" style="text-decoration:none;" href="">Bebidas</a> --}}
        </div>

    </div>

    <div class="search-box">
        <button class="btn-search"><i class="bi bi-search"></i></button>
        <input type="text" class="input-search" placeholder="Buscar produto">
    </div>

    <div class="row d-flex justify-content-center">
        @foreach ([1, 1, 1, 1, 1, 1, 1, 1, 1, 1] as $item)
            <div class="card mb-3 m-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 mt-3">
                        <img src="{{ asset('imgs/foto_sub_capa.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">ARROZ BRANCO + FAROFA DE ALHO + VINAGRETE + FEIJÃO TROPEIRO + ESPETO</p>
                            <p class="card-text fs-5 fw-bolder">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 m-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 mt-3">
                        <img src="{{ asset('imgs/foto_sub_capa.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">ARROZ BRANCO + FAROFA DE ALHO + VINAGRETE + FEIJÃO TROPEIRO + ESPETO</p>
                            <p class="card-text fs-5 fw-bolder">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
