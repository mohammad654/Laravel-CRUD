

@extends('layout')

@section('title', 'Register')

@section('content')

    <h1 class="text-center text-xl font-bold bg-gray-100 py-10" >Register</h1>

    <div class="container">
        <div class="panel panel-success">
            <div class="panel-body mt-4">
                <form method="post" action="{{route('register')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{old('name')}}">
                            </div>
                            @error('name')
                            <span>{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first">user name</label>
                                <input type="text" class="form-control" placeholder="Enter username" id="name" name="username" value="{{old('username')}}">
                            </div>
                            @error('username')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                    </div>

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
                        <button type="submit" class="btn btn-primary hover:bg-blue-600">Register</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
