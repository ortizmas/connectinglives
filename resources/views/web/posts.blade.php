@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    @if ($post->file)
                        <img class="card-img-top" src="{{ $post->file }}" alt="{{ $post->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->name }}</h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="{{ route('post', $post->slug) }}" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row pt-2">
        {{ $posts->render() }}
    </div>
</div>
@endsection
