@extends('layouts.dashboard')


@section('content')

<h1>{{ $post->title}}</h1>

<h6>Creato il: {{ $post->created_at}}</h6>
<h6>Aggiornato il: {{ $post->updated_at}}</h6>
<h6>Slug: {{ $post->slug}}</h6>

<h3 class="mt-3">Contenuto:</h3>
<p>{{ $post->content}}</p>

<a class="btn btn-primary mt-2" href="{{ route('admin.posts.edit', ['post'=> $post->id ]) }}">Modifica post</a>

<form class="mt-2" action="{{ route('admin.posts.destroy', ['post'=> $post->id ]) }}" method="post">
    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Cancella Post" onClick="return confirm('Sei sicuro di voler cancellare?')">
</form>

@endsection