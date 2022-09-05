@extends('layouts.dashboard')

@section('content')
<h1>Lista dei posts</h1>

<div class="row row-cols-3">
@foreach ($posts as $post)
    
    {{-- single post card  --}}
    <div class="col">
            <div class="card mt-2">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Dettagli...</a>
                </div>
            </div>
        </div>
        {{-- end single post card --}}

 @endforeach
    
</div>
    
@endsection