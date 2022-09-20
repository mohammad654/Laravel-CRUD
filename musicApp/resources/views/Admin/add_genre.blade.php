

@section('title', 'add Genre')
@extends('admin.dashboard')


@section('content')
    <h1 @class('text-center p-2 mb-5 border-bottom rounded')>add Genre</h1>
    <div class="container ">
        <form action="{{route('genre.store')}}" method="POST">
            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
                </div>
            @endif
            <div class="row  ms-5 ">
                <div class="">
                    <div class="form-group">
                        <label for="">Genre Name</label>
                        <input type="text" class="form-control rounded text-light bg-black " placeholder="Genre Name" name="genre" value="{{old('genre')}}">
                    </div>
                    @error('genreName')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mt-5">
                <div class="form-group d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success btn-lg px-5 hover:bg-black hover:animate-[wiggle_1s_ease-in-out_infinite]  delete-link">Add Genre</button>
                </div>
            </div>


        </form>
    </div>
@endsection

