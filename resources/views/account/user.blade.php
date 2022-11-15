@extends('layouts.main')

@section('account')
    active
@endsection

@section('pagetitle')
    User
@endsection

@section('content')
<div class="col signup-2">
    <div class="user rounded-4">
                    <li class="margin">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                            <input type="text" class="form-control" placeholder="{{auth()->user()->username}}" aria-describedby="inputGroup-sizing-default" readonly>
                        </div>
                    </li>
                    <li class="margin">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                            <input type="text" class="form-control" placeholder="{{auth()->user()->email}}"aria-describedby="inputGroup-sizing-default" readonly>
                        </div>
                    </li>
                    <li class="margin">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="btn btn-primary testes">Logout</button>
                        </form>
                    </li>
    </div>
</div>
@endsection
