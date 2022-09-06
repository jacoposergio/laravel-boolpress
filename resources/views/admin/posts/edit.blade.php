@extends('layouts.dashboard')

@section('content')
<h1>Modifica post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.posts.update', ['post'=> $post->id ]) }}" method="post">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
  </div>

  <div class="mb-3">
    <label for="content" class="form-label">Contenuto</label>
    <textarea class="form-control" id="content" name="content" rows:"10">{{ old('content', $post->content) }}</textarea>
  </div>

 <input type="submit" value="Salva Post">

</form>

<form class="mt-2" action="{{ route('admin.posts.destroy', ['post'=> $post->id ]) }}" method="post">
    @csrf
    @method('DELETE')
    
    <input class="btn btn-danger" type="submit" value="Cancella Post" onClick="return confirm('Sei sicuro di voler cancellare?')">
</form>
    
@endsection