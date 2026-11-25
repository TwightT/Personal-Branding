@extends('layouts.default')
@section('title', 'Home - ' . $profile['name'])

@section('content')
    <section class="p-5 mb-5 bg-white rounded-3 shadow-sm text-center">
        <img src="{{ asset($profile['avatar']) }}" alt="{{ $profile['name'] }}" class="rounded-circle mb-3 border" width="130" height="130" style="object-fit: cover;">
        <h1 class="fw-bold">{{ $profile['name'] }}</h1>
        <p class="lead text-primary fw-semibold">{{ $profile['tagline'] }}</p>
        <p class="text-muted mx-auto" style="max-width: 650px;">{{ $profile['bio'] }}</p>
        <div class="d-flex justify-content-center gap-2 mt-4">
            <a href="{{ route('portfolio') }}" class="btn btn-primary">Lihat Portofolio</a>
            <a href="{{ route('blog') }}" class="btn btn-outline-dark">Baca Blog</a>
            <a href="{{ route('about') }}" class="btn btn-link text-decoration-none">Tentang Saya</a>
        </div>
    </section>

    <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold mb-0">Karya Unggulan</h3>
            <a href="{{ route('portfolio') }}" class="text-decoration-none">Semua Portofolio &rarr;</a>
        </div>
        <div class="row">
            @foreach ($featuredPortfolios as $portfolio)
                <x-portfolio-card :portfolio="$portfolio" />
            @endforeach
        </div>
    </section>

    <section>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold mb-0">Artikel Blog Terbaru</h3>
            <a href="{{ route('blog') }}" class="text-decoration-none">Semua Artikel &rarr;</a>
        </div>
        <div class="row">
            @foreach ($latestBlogs as $blog)
                <x-blog-card :blog="$blog" />
            @endforeach
        </div>
    </section>
@endsection