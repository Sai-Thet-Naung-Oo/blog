@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row g-1 card-deck">
        @foreach($articles as $article)

        <div class="col-lg-4 px-1 mb-2">

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->body }}</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ url("/articles/detail/$article->id") }}">
                        View Detail &raquo;
                    </a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection


