<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $post = (object)[
            'id' => 10,
            'title' => 'Погиб один из попавших в аварию в Турции казахстанских туристов',
            'content' => 'Скончался казахстанский турист, который был госпитализирован и перенес операцию после <strong> ДТП </strong>в турецкой провинции',
        ];
        $posts = array_fill(0,10, $post);
        return view('blog.index', compact('posts'));
    }

    public function show(){
        $post = (object)[
            'id' => 10,
            'title' => 'Погиб один из попавших в аварию в Турции казахстанских туристов',
            'content' => 'Скончался казахстанский турист, который был госпитализирован и перенес операцию после <strong> ДТП </strong>в турецкой провинции',
        ];
        return view('blog.show', compact('post'));
    }

    public function like(){
        return view('blog.like');
    }
}

