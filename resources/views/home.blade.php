@extends('layouts.app')
@section('content')
    <style>
        #subImagem {
            width: 23%;
            position: absolute;
            margin-top: 25%;
            margin-left: 40%;
        }

        @media only screen and (max-width: 600px) {
            #subImagem {
                width: 40%;
                margin-left: 30%;
                margin-top: 20%;
            }
        }
        #containerPai{
            margin-bottom: 10%;
        }
        @media only screen and (max-width: 600px) {
            #containerPai {
                margin-bottom: 30%;
            }
        }
    </style>
    <div class="container mt-3" id="containerPai">
        <div class="card">
            <img src="{{ asset('imgs/foto_capa.jpg') }}" class="card-img" alt="imagem capa">
            <div class="card-img-overlay" id="subImagem">
                <img src="{{ asset('imgs/foto_sub_capa.jpg') }}" width="100px" class="card-img" alt="imagem sub capa">

            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="d-grid gap-2 col-4 mx-auto">
            <button class="btn btn-dark" type="button">WhatsApp</button>
            <button class="btn btn-dark" type="button">Cardápio</button>
          </div>
    </div>
@endsection
