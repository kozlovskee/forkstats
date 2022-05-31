@extends('components.layout')

@section('main_content')
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            @foreach($articles as $article)
                @include('components.article.article_mini_form', ['title' => $article->title])
            @endforeach
        </div>
    </div>
@endsection
