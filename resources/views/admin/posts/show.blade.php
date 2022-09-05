@extends('layouts.dashboard')

@section('content')
<h1>{{ $post->title}}</h1>

<h6>Creato il: {{ $post->created_at}}</h6>
<h6>Aggiornato il: {{ $post->updated_at}}</h6>
<h6>Slug: {{ $post->slug}}</h6>

<h3 class="mt-3">Contenuto:</h3>
<p>{{ $post->content}}</p>

    
@endsection