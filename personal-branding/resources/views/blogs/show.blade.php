@extends('layouts.default')
@section('title', $blog['title'])

@section('content')
    <article class="card border-0 shadow-sm p-4 mx-auto" style="max-width: 800px;">
        <a href="{{ route('blog') }}" class="text-decoration-none mb-3 d-inline-block">&larr; Kembali ke Blog</a>
        <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" class="img-fluid rounded mb-4" style="max-height: 360px; object-fit: cover;">
        <div class="mb-2">
            <span class="badge bg-secondary">{{ $blog['category'] }}</span>
            <small class="text-muted ms-2">{{ $blog['date'] }}</small>
        </div>
        <h1 class="fw-bold mb-3">{{ $blog['title'] }}</h1>
        <p class="lead text-muted">{{ $blog['summary'] }}</p>
        <hr>
        <p class="lh-lg">{{ $blog['content'] }}</p>
    </article>
@endsection