@extends('layouts.default')
@section('title', 'Contact')

@section('content')
    <div class="card border-0 shadow-sm p-4 mx-auto" style="max-width: 600px;">
        <h2 class="fw-bold mb-3">Hubungi Saya</h2>
        <p class="text-muted">Silakan hubungi saya untuk diskusi proyek, kolaborasi, atau peluang magang melalui kontak berikut:</p>
        <ul class="list-group list-group-flush mt-3">
            <li class="list-group-item px-0">
                <i class="bi bi-envelope-fill me-2 text-primary"></i>
                <strong>Email:</strong> <a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a>
            </li>
            <li class="list-group-item px-0">
                <i class="bi bi-github me-2"></i>
                <strong>GitHub:</strong> <a href="{{ $profile['github'] }}" target="_blank">{{ $profile['github'] }}</a>
            </li>
            <li class="list-group-item px-0">
                <i class="bi bi-linkedin me-2 text-info"></i>
                <strong>LinkedIn:</strong> <a href="{{ $profile['linkedin'] }}" target="_blank">{{ $profile['linkedin'] }}</a>
            </li>
        </ul>
    </div>
@endsection