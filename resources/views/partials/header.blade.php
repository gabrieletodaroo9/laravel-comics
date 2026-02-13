
<header>
    <nav class="container d-flex justify-content-center justify-content-md-between align-items-center">
        <a href="#" class="logo">
            {{-- Assicurati che $src sia definita o usa un percorso statico --}}
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc" class="w-50">
        </a>
        <ul class="list-unstyled d-flex flex-wrap">

            @foreach(config('headerlinks') as $link)
                <li>
                    <a class="mx-2 mx-xl-3" href="{{ $link['path'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach

        </ul>
    </nav>
</header>