<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth; 

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('post_gate');
        $posts = Post::with('user')->orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Post::class);
        return view('posts.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $this->authorize('create', Post::class);
        $data = $request->all();

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
            // Recupera a extensão do arquivo
            $extension = $request->thumbnail->extension();
            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
            $data['thumbnail'] = $nameFile;
            // Faz o upload:
            $upload = $request->thumbnail->storeAs('noticias', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$upload )
                return redirect()
                            ->back()
                            ->with('error_upload', 'Falha ao realizar o envio da imagem.')
                            ->withInput();
        }

        $data['user_id'] = Auth::id();
        $insert = Post::create($data);
        if ( $insert ) {
            return redirect()->route('post.index');
        }
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $post = Post::with('user')->find($post);
        $this->authorize('view', $post);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $post = Post::find($post);
        $this->authorize('update', $post);
        return view('posts.form', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $post)
    {
        
        $data = $request->all();
        $post = Post::find($post);
        $this->authorize('update', $post);
        
        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
            // Recupera a extensão do arquivo
            $extension = $request->thumbnail->extension();
            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
            $data['thumbnail'] = $nameFile;
            // Faz o upload:
            $upload = $request->thumbnail->storeAs('noticias', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$upload )
                return redirect()
                            ->back()
                            ->with('error_upload', 'Falha ao realizar o envio da imagem.')
                            ->withInput();
        }

        $data['user_id'] = Auth::id();
        $insert = $post->update($data);
        if ( $insert ) {
            return redirect()->route('post.index');
        }
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post = Post::find($post);
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('post.index');
    }
}
