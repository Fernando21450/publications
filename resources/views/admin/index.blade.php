@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Panel de Administrador</h1>

    <h2>Publicaciones</h2>
    <div class="mt-4">
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="text-muted">Publicado por: {{ $post->user->name }}</p>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <h2>Usuarios</h2>
    <div class="mt-4">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Registrar nuevo usuario</a>
        <div class="mt-3">
            @foreach ($users as $user)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->email }}</p>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection