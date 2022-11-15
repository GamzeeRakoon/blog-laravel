@extends('layouts.main')

@section('post')
    active
@endsection

@section('pagetitle')
    Creation
@endsection

@section('content')
    <div class="col signup-2">
        <div class="">
            <form action="{{ route('creation.store') }}" method="post" class="container text-center text-white">
                @csrf
                <div class="col align-self-center pee">
                    <input class="" type="text" name="title" placeholder="Post Title" />
                </div>
                <div class="col align-self-center pee">
                    <textarea class="post-area" name="text" placeholder="Blog post" cols="50" rows="20"></textarea>
                </div>
                <div class="col align-self-center pee">
                    <textarea class="post-area" name="summary" placeholder="Blog post" cols="50" rows="5"></textarea>
                </div>
                <div class="col align-self-center pee">
                    <button class="btn btn-primary" type="submit">Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
