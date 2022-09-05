@extends('layouts.dashboard')

@section('content')
<h1>crea un nuovbo pst</h1>

<form action="{{ route('admin.posts.store') }}" method="post">
  @csrf
  @method('POST')
  
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="mb-3">
    <label for="content" class="form-label">Contenuto</label>
    <textarea class="form-control" id="content" name="content" rows:"10"></textarea>
  </div>

 <input type="submit" value="Salva Post">

</form>
    
@endsection