<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm border-0">
        <img src="{{ asset($blog['image']) }}" class="card-img-top" alt="{{ $blog['title'] }}" style="height: 190px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="badge bg-secondary">{{ $blog['category'] }}</span>
                <small class="text-muted">{{ $blog['date'] }}</small>
            </div>
            <h5 class="card-title fw-bold">{{ $blog['title'] }}</h5>
            <p class="card-text text-muted flex-grow-1">{{ $blog['summary'] }}</p>
            <a href="{{ route('blog.show', $blog['id']) }}" class="btn btn-outline-primary btn-sm mt-3">
                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>