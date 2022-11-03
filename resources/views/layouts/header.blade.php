<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('pagetitle') | Gamzee's Blog
    </title>

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('styles')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="body">
    <header class="nav-color py-3 fs-3">
        <nav class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li class="nav-item">
{{--                        @if ()--}}
                            <a href='{{route('main')}}' class='nav-link text-white custom-nav'>Home</a>
{{--                        @else--}}
{{--                            <a href='{{asset('')}}' class='nav-link text-white active custom-nav'>Home</a>--}}
{{--                        @endif--}}
                    </li>
                    <li class="nav-item">
                        <a href="https://www.nikirakoon.nl/index.html" class="nav-link text-white custom-nav">Portfolio</a>
                    </li>
                </ul>
                <div class="text-end">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li class="nav-item">
{{--                            @if ()--}}
{{--                                <a href='{{asset()}}' class='nav-link text-white custom-nav'>Account</a>--}}
{{--                            @elseif ()--}}
{{--                                <a href='{{asset()}}' class='nav-link text-white custom-nav active'>Account</a>--}}
{{--                            @elseif ()--}}
                                <a href="{{route('login')}}" class='nav-link text-white custom-nav'>Login/Register</a>
{{--                            @else--}}
{{--                                <a href='{{asset()}}' class ='nav-link text-white custom-nav active'>Login/Register</a>--}}
{{--                            @endif--}}
                        </li>
                        <li class="nav-item">
{{--                            @if ()--}}
{{--                                <a href='{{asset()}}' class='nav-link text-white active custom-nav '>Post</a>--}}
{{--                            @else--}}
{{--                                <a href='{{asset()}}' class='nav-link text-white custom-nav '>Post</a>--}}
{{--                            @endif--}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            @yield('content')
        </section>
    </main>
</body>
</html>
