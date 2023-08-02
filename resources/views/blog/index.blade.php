@extends('layouts.main')

@section('page.title', 'Blog')

@section('main.content')
        <x-title>
            {{__('BLOG')}}
        </x-title>
        @empty($posts)
            Empty
        @else
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-12 col-md-4">
                        <x-post.card :post="$post" />
                    </div>
                @endforeach
            </div> 
        @endempty
@endsection