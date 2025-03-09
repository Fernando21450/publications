@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Publicaciones</h1>
    <a href="{{route('posts.create')}}" class="btn btn-primary">Crear publicacion</a>
    <div class="mt-4">
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <p class="text-muted">Publicado por: {{$post->user->name}}</p>
                    <a href="{{route('posts.show',$post)}}" class="btn btn-warning">ver mas</a>
                    @if (auth()->id()===$post->user_id)
                        <a href="{{route('posts.edit',$post)}}" class="btn btn-warning">Editar</a>
                        <form action="{{route('posts.destroy',$post)}}" method="POST" class="d-inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    @endif
                </div>
            </div>           
        @endforeach
    </div>
</div>
@endsection