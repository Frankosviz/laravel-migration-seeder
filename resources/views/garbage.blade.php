@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>


    <div class="container">
        <div class="f-d-layer">
            <h1 class="text-center my-celestine">I treni meno scelti al mondo</h1>
            <div class="d-flex flex-wrap flex-column justify-content-start">
                @foreach ($unpopularTrains as $train)
                <div class="bg-yellow">
                    <h3 class="text-center my-yellow">Orario di Partenza</h3>
                    <h3 class="text-center">{{$train->orario_di_partenza}}</h3>
                </div>
                <div>
                    <h3 class="text-center my-yellow">Stazione di partenza</h3>
                    <h3 class="text-center">{{$train->stazione_di_partenza}}</h3>
                </div>
                <div>
                    <h3 class="text-center my-yellow">Stazione di Arrivo</h3>
                    <h3 class="text-center">{{$train->stazione_di_arrivo}}</h3>
                </div>
                <div>
                    <h3 class="text-center my-yellow">Nome della Compagnia</h3>
                    <h3 class="text-center">{{$train->azienda}}</h3>
                </div>
                <div>
                    <h3 class="text-center my-yellow">Numero Carrozza</h3>
                    <h3 class="text-center border-bottom">{{$train->numero_carrozze}}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection