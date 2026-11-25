@extends('layouts.default')
@section('title', 'About - ' . $profile['name'])

@section('content')
    <div class="card border-0 shadow-sm p-4">
        <h2 class="fw-bold mb-3">Tentang Saya</h2>
        <p>{{ $profile['bio'] }}</p>
        <hr>
        <div class="row mt-3">
            <div class="col-md-6 mb-4">
                <h5 class="fw-bold"><i class="bi bi-mortarboard me-2"></i>Pendidikan</h5>
                <p class="text-muted">{{ $profile['education'] }}</p>

                <h5 class="fw-bold mt-4"><i class="bi bi-tools me-2"></i>Keahlian (Skills)</h5>
                <div>
                    @foreach ($profile['skills'] as $skill)
                        <span class="badge bg-dark fs-6 me-1 mb-2">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="fw-bold"><i class="bi bi-award me-2"></i>Pengalaman & Pencapaian</h5>
                <ul class="list-group list-group-flush">
                    @foreach ($profile['experiences'] as $exp)
                        <li class="list-group-item px-0">{{ $exp }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection