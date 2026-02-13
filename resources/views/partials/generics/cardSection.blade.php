<section class="bg-dark">
    <div class="container position-relative">
        <div class="row py-5">
            @foreach(config("comics") as $comic)

            <x-home-card :comic="$comic" />
            
            @endforeach
            <div class="title-card-container">CURRENT SERIES</div>
            <a href="" class="btn btn-primary text-center m-auto mt-4">SHOW MORE</a>

        </div>
    </div>
</section>