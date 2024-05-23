@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>

    
    <div class="container-fd f-d-layer">
        <div class="d-flex justify-content-between ">
            <div class="d-flex flex-column fd-layer-today">
                <button class="btn-today btn"><a href="{{ route('home') }}" class="fw-bold fs-4">Treni in partenza
                        oggi!</a></button>
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
            <div class="d-flex flex-column fd-layer-all">
                <button class="btn-all btn"><a href="{{ route('all') }}" class="fw-bold fs-4">Tutti i treni
                        disponibili!</a></button>
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