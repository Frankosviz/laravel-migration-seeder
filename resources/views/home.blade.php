@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    @foreach ($allTrain as $train)
    <ul>
        <li>
            {{ $train->data }}
        </li>
    </ul>
    @endforeach
</main>

@endsection
