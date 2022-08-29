@extends('layouts.app')

@section('title')
Boolean Tour
@endsection
@section('main_content')
    <h1>Proposte viaggi</h1>

    <div class="wrapper">
        @foreach ($travels as $travel)
            <div class='travel-card'>
                <div>Riferimento: {{$travel->reference}}</div>
                <div>Destinazione: {{$travel->destination}}</div>
                <div>Agente di riferimento: {{$travel->agent}}</div>
                <div>Data di partenza: {{ date('d-m-Y', strtotime($travel->departure_date)) }}</div>
                <div>Prezzo: {{$travel->price}} $</div>
                <div>Numero di recensioni: {{$travel->number_of_reviews}}</div>
                <div>Disponibilità: {{$travel->is_available}}</div>
            </div>
        @endforeach
    </div>
@endsection