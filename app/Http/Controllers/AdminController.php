<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index(){
        $posts = Post::with('user')->latest()->get();
        $users = User::latest()->get();
        return view('admin.index', compact('posts', 'users'));
    }

}
