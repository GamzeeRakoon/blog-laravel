@extends('layouts.main')

@section('login')
    active
@endsection

@section('pagetitle')
    Register
@endsection

@section('content')
            <div class="col signup-2">
                <div class="signup rounded-4">
                    <form action="{{ route('register') }}" method="POST" class="container text-center text-white">
                        @csrf
                        <h1>sign up</h1>
                        <div class="col align-self-center pee">
                            <input class="" type="text" name="name" placeholder="Full Name" value="{{ old('name') }}"/>
                        </div>
                        <div class="col align-self-center pee">
                            <input class="" type="text" name="email" placeholder="Email" value="{{ old('email') }}" />
                        </div>
                        <div class="col align-self-center pee">
                            <input class="" type="text" name="username" placeholder="Username" />
                        </div>
                        <div class="col align-self-center pee">
                            <input class="validate" type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="col align-self-center pee">
                            <input class="validate" type="password" name="password_confirmation" placeholder="Repeat password"/>
                        </div>
                        <div class="col align-self-center pee">
                            <button class="btn btn-primary signup-button" type="submit" name="submit">Sign Up</button>
                        </div>
                        @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li class="error">
                                        *{{ $error }}
                                    </li>
                                @endforeach
                        @endif
                    </form>
                </div>
            </div>
@endsection
