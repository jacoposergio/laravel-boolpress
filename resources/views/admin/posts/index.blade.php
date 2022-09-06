@extends('layouts.dashboard')

@section('content')
<h1>Lista dei post</h1>

<div class="row row-cols-3">
@foreach ($posts as $post)
    
    {{-- single post card  --}}
    <div class="col">
            <div class="card mt-2">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                <h3 class="card-title">{{ $post->title }}</h3>
                <p class="card-text">{{Str::limit($post->content, 100)}}</p>
                <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Dettagli...</a>
                <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-primary mt-2">Modifica</a>
                </div>
            </div>
        </div>
        {{-- end single post card --}}

 @endforeach
    
</div>
    
@endsection