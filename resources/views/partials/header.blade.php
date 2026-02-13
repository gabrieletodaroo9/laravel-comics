
<header>
    <nav class="container d-flex justify-content-center justify-content-md-between align-items-center">
        <a href="#" class="logo">
            {{-- Assicurati che $src sia definita o usa un percorso statico --}}
            <img src="{{ Vite::asset('assets/img/dc-logo.png') }}" alt="logo-dc" class="w-50">
        </a>
        <ul class="list-unstyled d-flex flex-wrap gap-5">

            @foreach(config('headerlinks') as $link)
                <li class="nav-link py-4">
                    <a href="{{ $link['path'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach

        </ul>
    </nav>
</header>