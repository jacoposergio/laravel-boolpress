@extends('layouts.dashboard')


@section('content')

<h1>{{ $post->title}}</h1>

{{-- <h6>Creato il: {{ $post->created_at->format('l j F Y')}}</h6> --}}

@if ($created_days_ago > 0)
<h6>Creato {{ $created_days_ago }} giorn{{$created_days_ago >1 ? 'i' : 'o'}} fa</h6>
@else
<div>Creato oggi</div>
@endif

{{-- <h6>Aggiornato il: {{ $post->updated_at}}</h6> --}}

@if ($created_days_ago > 0)
<h6>Aggiornato {{ $created_days_ago }} giorn{{$created_days_ago >1 ? 'i' : 'o'}} fa</h6>
@else
<div>Aggiornato oggi</div>
@endif

<h6>Slug: {{$post->slug}}</h6>
<h6>Tags:
    @if ( $post->tags->isNotEmpty()) {
        @foreach ($post->tags as $tag)
            {{ $tag->name}}{{ !$loop->last ? ',' : ''}}
            
        @endforeach
    }
    @else
        nessuno
    @endif
</h6>

<h6>Categoria: {{ $post->category ? $post->category->name : 'nessuna'}}</h6>

<h3 class="mt-3">Contenuto:</h3>
<p>{{ $post->content}}</p>


<a class="btn btn-primary mt-2" href="{{ route('admin.posts.edit', ['post'=> $post->id ]) }}">Modifica post</a>

<form class="mt-2" action="{{ route('admin.posts.destroy', ['post'=> $post->id ]) }}" method="post">
    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Cancella Post" onClick="return confirm('Sei sicuro di voler cancellare?')">
</form>

@endsection