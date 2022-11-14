@extends('layouts.main')

@section('pagetitle')
    Post
@endsection

@section('content')
    <div>
        <h1 class='p blog-title'>{{$post->title}}</h1>
        <p class='text-white text-start blog-text'>
            {{$post->text}}
        </p>
    </div>
@endsection
