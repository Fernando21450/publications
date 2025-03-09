<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //muetra todas la publicaciones
    {
        //
        $posts=Post::with('user')->latest()->get();
        return view('posts.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()  //muestra el formulario para crear una publicacion
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)  //guarda una nueva publiaccion
    {
        //
        $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required|string'
        ]);

        Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('posts.index')->with('success','Publicacion creada correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post) //monstrar una publicacion
    {
        //
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post) //mostrar el formulario para editar una publicacion
    {
        //
        return view('posts.edit',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post) //actualizar una publicacion
    {
        //
        $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required|string',
        ]);
        $post->update($request->only('title','content'));

        return redirect()->route('posts.index')->with('success','publicacion actualizada correctamente...');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('posts.index')->with('success','publicacion eliminada correctamente');
    }
}
