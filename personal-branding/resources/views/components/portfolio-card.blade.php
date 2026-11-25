<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm border-0">
        <img src="{{ asset($portfolio['image']) }}" class="card-img-top" alt="{{ $portfolio['title'] }}" style="height: 200px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">{{ $portfolio['title'] }}</h5>
            <p class="card-text text-muted flex-grow-1">{{ $portfolio['description'] }}</p>
            <div class="mt-2">
                @foreach ($portfolio['tech'] as $tech)
                    <span class="badge bg-primary me-1">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>