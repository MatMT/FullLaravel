<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        // Post::create([
        //    'titulo' => $request->titulo,
        //    'descripcion' => $request->descripcion,
        //    'imagen' => $request->imagen,
        //    // Persona autenticada
        //    'user_id' => auth()->user()->id
        // ]);

        // Otra forma ---
        // $post = new Post;
        // $post->titulo = $request->titulo;
        // $post->descripcion = $request->descripcion;
        // $post->imagen = $request->imagen;
        // $post->user_id = $request->auth()->user()->id;
        // $post->save();

        // Las relaciones nos simplifican y eliminan la complejidad de los where

        // Accede al request enviado por el usuario, accedemos a la relación dentro del modelo y creamos
        $request->user()->posts()->create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id
        ]);


        return redirect()->route('posts.index', auth()->user()->username);
    }
}
