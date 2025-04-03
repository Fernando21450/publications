@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear publicaciones</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf 
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
             <label for="content">Contenido</label>
             <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>
    </form>
</div>
@endsection 