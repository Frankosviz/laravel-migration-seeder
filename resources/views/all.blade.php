@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>


    <div class="container">
        <div class="f-d-layer">
            <h1 class="text-center my-celestine">Tutti i treni disponibili da F.I.M.</h1>
            <div class="d-flex flex-wrap flex-column justify-content-start">
                @foreach ($all as $allTrain)
                <div class="bg-yellow">
                    <h3 class="text-center my-yellow">Orario di Partenza</h3>
                    <h3 class="text-center">{{$allTrain->orario_di_partenza}}</h3>
                </div>
                <div>
                    <h3 class="text-center my-yellow">Stazione di partenza</h3>
                    <h3 class="text-center">{{$allTrain->stazione_di_partenza}}</h3>
                </div>
                <div>
                    <h3 class="text-center my-yellow">Stazione di Arrivo</h3>
                    <h3 class="text-center">{{$allTrain->stazione_di_arrivo}}</h3>
                </div>
                <div>
                    <h3 class="text-center my-yellow">Nome della Compagnia</h3>
                    <h3 class="text-center">{{$allTrain->azienda}}</h3>
                </div>
                <div>
                    <h3 class="text-center my-yellow">Numero Carrozza</h3>
                    <h3 class="text-center border-bottom">{{$allTrain->numero_carrozze}}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection