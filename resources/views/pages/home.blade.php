@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <section class="list-cards">
        <div class="card">
            <img src="{{ Vite::asset ('') }}" alt="" class="card-img">
            <div class="card-details">
                <h2>card</h2>
            </div>
        </div>
    </section>
@endsection