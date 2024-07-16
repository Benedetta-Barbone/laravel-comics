@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <section class="list-cards">

        @foreach ($data as $card)
        <div class="card">
            <img src="{{ $card['thumb'] }}" alt="" class="card-img">
            <div class="card-details">
                <h2>
                    {{ $card['series']}}
                </h2>
            </div>
        </div>
        @endforeach
    </section>
@endsection