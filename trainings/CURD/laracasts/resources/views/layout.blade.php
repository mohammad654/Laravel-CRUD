<!DOCTYPE html>

<html lang="en">

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<title> App Name - @yield('title')</title>

<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- tailwindcss CSS -->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<!-- CSS -->
<link href="/app.css" rel="stylesheet">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-10">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homeIndex')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin')}}">Dashboard</a>
                </li>


                @if (Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">register</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('create.login')}}">LogIn</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="">{{auth()->user()->username}}</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('destroy') }}" method="POST" >
                            {{ csrf_field() }}
                            <button class="nav-link" >Logout</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>



<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- alpinejs js -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
