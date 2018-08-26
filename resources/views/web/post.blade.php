@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="card-title">{{ $post->name }}</h3></div>

                <div class="card-body">
                    Categoria:
                    <a href="{{ route('category', $post->category->slug) }}" title="">{{ $post->category->name }}</a>
                </div>
            </div>
            <div class="card">
                @if ($post->file)
                    <img class="card-img-top" src="{{ $post->file }}" alt="{{ $post->name }}">
                    <em class="card-text">{!! $post->excerpt !!}</em>
                @endif
                <div class="card-body">
                    
                    <p class="card-text">{!! $post->body !!}</p>
                    <hr>
                    Etiquetas:
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('tag', $tag->slug) }}" title="">{{ $tag->name }}</a>
                    @endforeach
                    <hr>
                    <a href="{{ route('blog') }}" class="btn btn-primary float-right">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
