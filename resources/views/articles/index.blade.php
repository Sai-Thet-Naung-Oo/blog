@extends("layouts.app")
@section("content")
<div class="container">
{{ $articles->links() }}
    <div class="row g-1">
        @foreach($articles as $article)

        <div class="col-12 mb-2">

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->body }}</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ url("/articles/detail/$article->id") }}">
                        Detail &raquo;
                    </a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection


