@extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta description')

@section('content')
    <h1>Blog</h1>

    @foreach ($posts as $post)

        <h2>
            <a href="/blog/{{$post->id}}">
                {{$post -> 'title'}}
            </a>
        </h2>
        
    @endforeach
    
@endsection