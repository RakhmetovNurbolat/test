<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = (object)[
            'id' => 10,
            'title' => 'Погиб один из попавших в аварию в Турции казахстанских туристов',
            'content' => 'Скончался казахстанский турист, который был госпитализирован и перенес операцию после <strong> ДТП </strong>в турецкой провинции',
        ];
        $posts = array_fill(0,10, $post);
        return view('user.posts.index', compact('posts'));
    }

    public function create(){
        return view('user.posts.create');
    }

    public function store(Request $request){
        
        // dd($request->all());
        // $title = $request->input('title');
        // $content = $request->input('content');
        // dd($title, $content);

        // $post = new Post;
        return redirect()->route('user.posts.show', 123);
    }

    public function show( $post ){
        $post = (object)[
            'id' => 10,
            'title' => 'Погиб один из попавших в аварию в Турции казахстанских туристов',
            'content' => 'Скончался казахстанский турист, который был госпитализирован и перенес операцию после <strong> ДТП </strong>в турецкой провинции',
        ];
        $posts = array_fill(0,10, $post);
        return view('user.posts.show ',compact('post'));
    }

    public function edit( $post){
        $post = (object)[
            'id' => 10,
            'title' => 'Погиб один из попавших в аварию в Турции казахстанских туристов',
            'content' => 'Скончался казахстанский турист, который был госпитализирован и перенес операцию после <strong> ДТП </strong>в турецкой провинции',
        ];
        $posts = array_fill(0,10, $post);
        return view('user.posts.edit',compact('post'));
    }
    public function update(Request $request, $post ){
        $title = $request->input('title');
        $content = $request->input('content');
        //dd($title, $content);
        //return redirect()->route('user.posts.show', $post);
        // return redirect()->back();
    }
    public function delete($post){
        return redirect()->route('user.posts');
    }
}
