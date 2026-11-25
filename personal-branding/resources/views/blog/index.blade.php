@extends('layouts.default')
@section('title', 'Blog')

@section('content')
    <h2 class="fw-bold mb-4">Artikel & Tulisan</h2>
    <div class="row">
        @foreach ($blogs as $blog)
            <x-blog-card :blog="$blog" />
        @endforeach
    </div>
@endsection