@extends('layouts.app')
@section('content')
    <div class="row d-flex justify-content-center" style="text-align: center;">
        <h2 class="fw-bold">Restaurante de teste</h2>
    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            <span class="mr-3 fst-italic" style="font-size: 16px;"><i class="bi bi-check-lg mx-1"  style="font-size: 18px;color:green"></i>Retire na loja</span>
            <span class="mx-3 fst-italic" style="font-size: 16px;"><i class="bi bi-check-lg mx-1" style="font-size: 18px;color:green"></i>Delivery</span>
        </div>
    </div>

    <div class="row d-flex justify-content-center m-2">
        <a class="btn btn-dark fw-bold fs-5 col-md-6" href="{{ route('cardapio.index') }}" type="button">Cardápio</a>
    </div>
    <div class="row d-flex justify-content-center m-2">
        <button class="btn btn-dark fw-bold fs-5 mt-2 col-md-6" type="button">WhatsApp</button>
    </div>

    <div class="row mt-3" style="text-align: center;">
        <h6 class="fst-normal"><i class="bi bi-geo-alt" style="color:green"></i> R. Oswaldo Cruz, 886-972 - Kennedy, Itaperuna - RJ, 28300-000, Brasil</h6>
    </div>
@endsection
