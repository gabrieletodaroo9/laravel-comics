
<header>
    <nav class="container d-flex justify-content-center justify-content-lg-between align-items-center px-lg-5">
        <a href="#" class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc" class="w-50">
        </a>
        <ul class="list-unstyled d-flex flex-wrap gap-5 gap-lg-0">

            @foreach(config('headerlinks') as $link)
                <li>
                    <a class="mx-2 mx-xl-3 link-header" href="{{ $link['path'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach

        </ul>
    </nav>
</header>