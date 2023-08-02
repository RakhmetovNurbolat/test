<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $c_id = $request->input('c_id');
        //dd($search, $c_id);
        $post = (object)[
            'id' => 10,
            'title' => 'Погиб один из попавших в аварию в Турции казахстанских туристов',
            'content' => 'Скончался казахстанский турист, который был госпитализирован и перенес операцию после <strong> ДТП </strong>в турецкой провинции',
        ];
        $posts = array_fill(0,10, $post);
        $posts = array_filter($posts, function($post) use ($search, $c_id){
            if($search && !str_contains($post->title, $search)){
                return false;
            }

            if($c_id && $post->id != $c_id){
                return false;
            }

            return true;
        });
        $categories = [ 
            null    => __('ves cotegory'), 
            1       => __('one'), 
            2       => __('two')
        ];
        return view('blog.index', compact('posts', 'categories'));
    }

    public function show(){
        
        $post = (object)[
            'id' => 10,
            'title' => 'Погиб один из попавших в аварию в Турции казахстанских туристов',
            'content' => 'Скончался казахстанский турист, который был госпитализирован и перенес операцию после <strong> ДТП </strong>в турецкой провинции',
        ];

        return view('blog.show', compact('post'));
    }

    public function store(Request $request){
        dd($request->all());
    }
    public function like(){
        return view('blog.like');
    }
}

