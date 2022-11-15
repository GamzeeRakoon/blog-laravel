@extends('layouts.main')

@section('home')
    active
@endsection

@section('pagetitle')
    Home
@endsection

@section('content')
    <div class="col-7 signup-2">
        @foreach($posts as $post)
        <a class='post-block' href='{{ route('post.index', [ 'id' => $post->id]) }}'>
            <div class='text-start blog-post rounded-4 text-white'>
                <h1 class='post-title'>{{ $post->title }}</h1>
                <p>{{ $post->created_at }}</p>
                <p class='fs-4'>{{ $post->summary }}</p>
            </div>
        </a>
        @endforeach
    </div>
@endsection
