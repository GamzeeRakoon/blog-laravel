@extends('layouts.main')

@section('pagetitle')
    Post
@endsection

@section('content')
    <div class="col-7 signup-2">
        <div>
            <h1 class='p blog-title'>{{$post->title}}</h1>
            <p class='text-white text-start blog-text'>
                {!!nl2br($post->text)!!}
            </p>
        </div>
        @guest
            <div class="post-margin">

            </div>
        @endguest

@auth
        <div class='text-start margin-replies'>
            <div>
                <form action='{{ route('comment.store', ['id' => $post->id]) }}' method='post'>
                    @csrf
                    <input type='hidden' name='post_id' value='{{ $post->id }}'>
                    <input type='hidden' name='user_id' value='{{ auth()->user()->id }}'>
                    <textarea name='text' class='form-control input-text' placeholder='comment' rows='4' cols='10'></textarea>
                    <button class='btn-primary btn' type='submit'>add Comment</button>
                </form>
            </div>
{{--                <h1>{{ $totalposts->id }}</h1>--}}
        </div>
@endauth

        @foreach($post->comments as $comment)
        <div class='comments'>
            <div class='user'>{{ $comment->user->username }} <span class='time'> {{ $comment->created_at }}</span></div>
            <div class='userComment'>
                {!! $comment->text !!}
            </div>
        </div>
        @endforeach

    </div>
@endsection
