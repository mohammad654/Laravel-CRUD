
@section('title', 'main Title')

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

<nav class="flex justify-between flex bg-blue-100  px-5  py-3 mb-6">
    <ul class="flex items-center">
    <li><a href="#" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Home</a></li>
    <li><a href="{{route('dashboard')}}" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Dashboard</a></li>
    <li><a href="{{route('posts')}}" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Words</a></li>
    </ul>

    <ul class="flex items-center">
        @if(auth()->user())
        <a href="" class="p-3">{{ auth()->user()->name }}</a>


        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
            @csrf
            <button type="submit">Logout</button>
        </form>


        @else
                
        <li><a href="{{route('login')}}" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">login</a></li>
        <li><a href="{{route('register')}}" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">register</a></li>
   
        @endif

    </ul>
</nav>

<div class="container">
    @yield('content')

</div>

@include('layout.footer')
@include('layout.footer-scripts')
 </body>
</html>
