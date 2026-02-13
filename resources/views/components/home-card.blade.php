<div class="col-6 col-md-4 col-lg-2 mb-4">
    <div class="card h-100 bg-transparent border-0 mt-4">
        <div class="img-container" style="aspect-ratio: 1/1; overflow: hidden;">
            <img src="{{ $comic['thumb'] }}" class="card-img-top img-fluid" alt="{{ $comic['title'] }}" style="object-fit: cover; object-position: top;">
        </div>
        <div class="card-body px-0">
            <h6 class="text-white text-uppercase" style="font-size: 0.8rem;">
                {{ $comic['series'] }}
            </h6>
        </div>
    </div>
</div>