@extends('layouts.dashboard')

@section('content')
<h1>crea un nuovbo pst</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')

  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
  </div>

  <div class="mb-3">
    <label for="category_id">Categoria</label>
    <select class="form-select" id="category_id" name="category_id">
      <option value="">Nessuna</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id}}" {{ old('category_id') == $category->id ? 'selected' : ' '}} > {{ $category->name}}</option>
      @endforeach
    </select>
  </div>

<div>
  <h6>Tags:</h6>
  @foreach ($tags as $tag)
  <div class="form-check">
      <input class="form-check-input"
        type="checkbox" value="{{ $tag->id }}" 
        id="tag-{{ $tag->id }}" name="tags[]"
        {{ in_array($tag->id, old('tags', [])) ? 'checked' : ''}}
       >
      <label class="form-check-label" for="tag-{{ $tag->id }}">
        {{ $tag->name }}
      </label>
  </div>
  @endforeach
</div>

  <div class="mt-3">
    <label for="content" class="form-label">Contenuto</label>
    <textarea class="form-control" id="content" name="content" rows:"10">{{ old('content')}}</textarea>
  </div>

  
  <div class="mb-3">
    <label for="image" class="form-label">Immagine</label>
    <input class="form-control" type="file" id="image" name="image">
  </div>
  
  <input type="submit" value="Salva Post">

</form>
    
@endsection