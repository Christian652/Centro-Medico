<?php

namespace App\Http\Controllers\Admin;

use App\Especialidade;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!empty($request->titulo) && !empty($request->conteudo) && !empty($request->especialidade)) {
            $post = new Post();
            $post->titulo = $request->titulo;
            $post->conteudo = $request->conteudo;
            $post->especialidade_id = $request->especialidade;
            $post->save();
        
            return redirect()->route('admin.especialidades.show', ['especialidade'=>$request->especialidade]);
        }
        
        return redirect()->route('admin.especialidades.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $especialidades = Especialidade::all();
        
        return view('Administrador.especialidades.posts.edit', ['post'=>$post ,'especialidades'=>$especialidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (!empty($request->titulo) && !empty($request->conteudo) && !empty($request->especialidade)) {
            $post->especialidade_id = $request->especialidade;
            $post->titulo = $request->titulo;
            $post->conteudo = $request->conteudo;
            $post->save();

            return redirect()->route('admin.especialidades.show', ['especialidade'=>$request->especialidade]);
        }

        return redirect()->route('admin.especialidade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $especialidade = $post->especialidade()->first();
        $post->delete();

        return redirect()->route('admin.especialidades.show', ['especialidade'=>$especialidade->id]);
    }
}
