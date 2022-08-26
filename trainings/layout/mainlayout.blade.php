<!DOCTYPE html>

<html lang="en">

<head>

    @include('layout.head')

</head>

<body>

@include('layout.nav')

@include('layout.header')

@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>


@include('layout.footer')
@include('layout.footer-scripts')
 </body>
</html>
