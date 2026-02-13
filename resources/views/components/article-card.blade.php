<div class="col-12 col-md-4 mb-5">
    <div class="card h-100 border-0 bg-transparent">
        <div class="mb-3" style="aspect-ratio: 16/9; overflow: hidden;">
            <img src="{{ $img ?: 'https://via.placeholder.com/600x338' }}" alt="{{ $title }}" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>

        <div class="card-body p-0">
            <h5 class="text-white text-uppercase fw-bold">{{ $title }}</h5>
            <p class="text-secondary small">{{ $content }}</p>
            <a href="#" class="btn btn-primary btn-sm rounded-0 fw-bold px-3">READ MORE</a>
        </div>
    </div>
</div>