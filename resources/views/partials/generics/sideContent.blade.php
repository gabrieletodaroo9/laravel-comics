<div class="side-content z-1 position-relative bg-primary py-lg-5">
    <div class="container">
        <div class="row text-white">
            
            @foreach(config('mainLinks') as $link)
                <div class="col-lg d-flex align-items-center justify-content-center scale">
                    
                    <img src="{{ Vite::asset($link['imgUrl']) }}" alt="" class="main-icon pe-3" style="height: 50px; object-fit: contain;">
                    
                    <a class="text-white text-decoration-none text-uppercase small fw-bold" href="{{ $link['link'] }}">
                        {{ $link['title'] }}
                    </a>

                </div>
            @endforeach

        </div>
    </div>
</div>