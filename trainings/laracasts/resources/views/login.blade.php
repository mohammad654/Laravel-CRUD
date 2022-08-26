

@extends('layout')

@section('title', 'login')

@section('content')


{{--    @if(session()->has('die'))--}}
{{--        <div >--}}
{{--            {{ session::get('die') }}--}}
{{--        </div>--}}
{{--    @endif--}}

@if($errors->any())
    <h4>{{$errors->first()}}</h4>
@endif


    <h1 class="text-center text-xl font-bold bg-gray-100 py-10" >login</h1>

    <div class="container">
        <div class="panel panel-success">
            <div class="panel-body mt-4">
                <form method="post" action="{{route('store')}}">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first">Email</label>
                                <input type="email" class="form-control" placeholder="Enter email" id="name" name="email" value="{{old('email')}}">
                            </div>
                            @error('email')
                            <span>{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first">password</label>
                                <input type="password" class="form-control" placeholder="Enter password" id="name" name="password" value="{{old('password')}}">
                            </div>
                            @error('password')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <button type="submit" class="btn btn-primary hover:bg-blue-600">log In</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
