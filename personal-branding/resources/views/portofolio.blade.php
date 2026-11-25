@extends('layouts.default')
@section('title', 'Portfolio')

@section('content')
    <h2 class="fw-bold mb-4">Portofolio & Karya</h2>
    <div class="row">
        @foreach ($portfolios as $portfolio)
            <x-portfolio-card :portfolio="$portfolio" />
        @endforeach
    </div>
@endsection