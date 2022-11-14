@extends('layouts.main')


@section('pagetitle')
    Login
@endsection

@section('content')
    <div class="col signup-2">
                <div class="login rounded-4">
                    <form action="{{route('login')}}" method="post" class="container text-center text-white" >
                        @csrf

                        <h1>Login</h1>
                        <div class="col align-self-center pee">
                            <input class="" type="text" name="email" placeholder="Email" value="{{old('email')}}"/>
                        </div>
                        <div class="col align-self-center pee">
                            <input class="" type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="col align-self-center pee">
                            <button class="btn btn-primary" type="submit" name="submit">Login</button>
                        </div>
                    </form>
                    <div class="container text-center text-white" >
                        <div class="col align-self-center">
                            <a  href="{{ route('register') }}">
                                <button class="btn btn-primary testes signup-button">Sign Up</button>
                            </a>
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <li class="error">
                                    *{{ $error }}
                                </li>
                            @endforeach
                        @endif
                    </div>
                </div>
    </div>
@endsection
