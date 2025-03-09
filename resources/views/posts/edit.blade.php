@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Editar publicacion</h1>
    <form action="{{route('posts.update',$post)}}" method="POST">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}" required>
        </div>
        <div class="form-group">
            <label for="content" >contenido</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{$post->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">actualizar</button>
    </form>
</div>
@endsection 