@extends("layouts.master")

@section("content")
@include("partials.generics.jumbotron")

<section class="bg-dark py-5">
    <div class="container my-5">
        <h2 class="text-white text-uppercase fw-bold mb-5 border-bottom border-primary d-inline-block pb-2">Latest News</h2>

        <div class="row">
            @foreach(config('news') as $article)
            <x-article-card :title="$article['title']" :content="$article['content']" :img="$article['url_img']" />
            @endforeach
        </div>
    </div>
</section>
@endsection