@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    
        <h1 class="text-center text-primary my-5">Benvenuti in Ferrovie dello Stato</h1>
        <div class="container">
        <div class="d-flex justify-content-between ">
            <div class="d-flex flex-column">
                <a href="{{ route('home') }}" class="btn btn-warning fw-bold">Treni in partenza oggi!</a>
                <p class="mb-1 text-center fw-bold">(Questo bottone è associato ad una rotta che darà un dettaglio dei
                    treni in partenza oggi)</p>
                @foreach ($todayTrains as $train)
                    <ul>
                        <li class="fw-bold fs-5">
                            {{ $train->azienda }}
                        </li>
                        <li class="fw-normal">
                            {{ $train->stazione_di_partenza }}
                        </li>
                        <li class="fw-bold fs-4">
                            {{ $train->orario_di_partenza }}
                        </li>
                    </ul>
                @endforeach
            </div>
            <div class="d-flex flex-column">
                <a href="{{ route('home') }}" class="btn btn-warning fw-bold">Tutti i treni!</a>
                <p class="mb-1 text-center fw-bold">(Questo bottone sarà associato ad una rotta che darà un dettaglio di
                    tutti i treni)</p>
                @foreach ($allTrains as $train)
                    <ul>
                        <li class="fw-bold fs-5">
                            {{ $train->azienda }}
                        </li>
                        <li class="fw-normal">
                            {{ $train->stazione_di_partenza }}
                        </li>
                        <li class="fw-bold fs-4">
                            {{ $train->orario_di_partenza }}
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection