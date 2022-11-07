@extends('layouts.main')

@section('pagetitle')
    User
@endsection

@section('content')
    <ul class="row align-items-center list-user" style="height: 350px;">
        <li >
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                <input type="text" class="form-control" placeholder=""aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </li>
        <li>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                <input type="text" class="form-control" placeholder=" "aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </li>
        <li>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="btn btn-primary testes">Logout</button>
            </form>
        </li>
    </ul>
    </div>
    <div class="col picture-down">
        <div class="card" style="width: 18rem;">
            <img src="../img/white image.png" class="card-img-top" alt="...">
        </div class="pee">
        <a >
            <button class="btn btn-primary testes">upload</button>
        </a>
@endsection
