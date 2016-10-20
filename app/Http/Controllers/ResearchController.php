<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests;

use App\Post;
use App\File;

class ResearchController extends Controller {
    
    public function __construct () {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $posts = Post::all();

        return view ('research.index', [
            'posts' => $posts
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        if (Auth::user()->type == 'admin') {
            return view ('research.create');
        }
        return back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        if (Auth::user()->type == 'admin') {
            
            $this->validate($request, [
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'files.*' => 'file'
            ]);

            
            $post = new Post;

            $post->user_id = Auth::user()->id;
            $post->title = $request->title;
            $post->body = $request->body;

            $post->save();
            
            if (count($request->file('files')) > 0) {
                foreach ($request->file('files') as $file) {

                    $doc = new File;

                    $doc->original_name = $file->originalName;
                    $doc->file = $file->store('public/rnd');

                    $post->files()->save($doc);

                }   
            }
            return redirect ("/research/$post->id");
        }
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id) {
        
        $post = Post::find($id);

        return view ('research.show', [
            'post' => $post,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        if (Auth::user()->type == 'admin') {
            $post = Post::find($id);
            return view ('research.edit', [
                'post' => $post,
            ]);
        }
        return back();
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        if (Auth::user()->type == 'admin') {
            $this->validate($request, [
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'files.*' => 'file'
            ]);

            $post = Post::find($id);

            $post->user_id = Auth::user()->id;
            $post->title = $request->title;
            $post->body = $request->body;

            $post->save();
            
            if (count($request->file('files')) > 0) {
                foreach ($request->file('files') as $file) {

                    $doc = new File;

                    $doc->original_name = $file->originalName;
                    $doc->file = $file->store('public/rnd');

                    $post->files()->save($doc);

                }   
            }
            return redirect ("/research/$post->id");
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        if (Auth::user()->type == 'admin') {
            $post = Post::find($id);
            if (count($post->files) > 0) {
                foreach ($post->files as $file) {
                    $file->delete();
                }
            }
            $post->delete();
        }
        return back();

    }
}