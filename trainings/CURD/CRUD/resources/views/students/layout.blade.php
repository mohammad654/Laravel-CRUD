<!-- resources/views/layouts/app.blade.php -->

<html>
<head>
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
@section('sidebar')

    <div class="container mt-3">
        <h1><a class="btn btn-primary btn-lg px-5 d-grid gap-4 col-3" href="{{route('students.index')}}"> Home</a></h1>
        <h1><a class="btn-success btn  btn-lg px-5 float-end " href="{{ route('students.create') }}"> Add New Student</a>    </h1>
    </div>

@show

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
