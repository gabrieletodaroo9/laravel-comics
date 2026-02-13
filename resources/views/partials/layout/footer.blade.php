<footer class="position-relative">
    <div class="container">
        <div class="row py-5">
            
            <div class="col-4 col-md-2 text-white ps-4 position-relative z-1">
                <div class="dccomics-menu mb-4">
                    <h3 class="text-uppercase text-white">{{ config('footerMenus.dccomics.title') }}</h3>
                    <ul class="list-unstyled">
                        @foreach(config('footerMenus.dccomics.links') as $link)
                            <li><a href="{{ $link['link'] }}" class="text-secondary text-decoration-none small">{{ $link['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="shop-menu">
                    <h3 class="text-uppercase">{{ config('footerMenus.shop.title') }}</h3>
                    <ul class="list-unstyled">
                        @foreach(config('footerMenus.shop.links') as $link)
                            <li><a href="{{ $link['link'] }}" class="text-secondary text-decoration-none small">{{ $link['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-4 col-md-2 text-white ps-4 position-relative z-1">
                <h3 class="text-uppercase">{{ config('footerMenus.dc.title') }}</h3>
                <ul class="list-unstyled">
                    @foreach(config('footerMenus.dc.links') as $link)
                        <li><a href="{{ $link['link'] }}" class="text-secondary text-decoration-none small">{{ $link['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-4 col-md-2 text-white ps-4 position-relative z-1">
                <h3 class="text-uppercase">{{ config('footerMenus.sites.title') }}</h3>
                <ul class="list-unstyled">
                    @foreach(config('footerMenus.sites.links') as $link)
                        <li><a href="{{ $link['link'] }}" class="text-secondary text-decoration-none small">{{ $link['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo-dc-big" class="position-absolute big-logo">
        </div>
    </div>

    <div class="footer-social bg-dark py-4">
        <div class="container text-white d-flex justify-content-between align-items-center">
            
            <a class="btn btn-outline-primary text-white border-2 rounded-0 fw-bold" href="#">
                SIGN-UP NOW!
            </a>

            <div class="social-icons d-flex gap-2 gap-sm-3 align-items-center">
                <span class="follow-span d-none d-md-block fw-bold text-primary">
                    FOLLOW US
                </span>
                
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter"></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube"></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest"></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope"></a>
            </div>
            
        </div>
    </div>
</footer>