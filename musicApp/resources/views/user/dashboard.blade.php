<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', 'Home')
    @include('user.header')
</head>
<body>
<!-- Back to top button -->
<div class="back-to-top"></div>
<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Mohammad Ali</a>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                    @if(Route::has('login'))
                        @auth
                            <x-app-layout>
                            </x-app-layout>
                        @else
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
                    </li>
                      @endauth
                    @endif

                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
    </div>
@endif

<div class="page-hero bg-image overlay-dark img img-fluid" style="background-image: url(../assets/img/moon.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">User</span>
            <h1 class="display-4">Mohammad Ali</h1>
            <a href="#" class="btn btn-primary">Let's Consult</a>
        </div>
    </div>
</div>




@include('user.artists')

@include('user.footer')
@include('user.script')
</body>
</html>
