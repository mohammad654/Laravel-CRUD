@section('title', 'Edit Artist')
@extends('admin.dashboard')


@section('content')
    <h1 @class('text-center p-2 mb-5 border-bottom rounded')>Edit Album</h1>
    <div class="container ">
        <form action="{{route('album.update',$album->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
                </div>
            @endif

            <div class="row  ms-5 ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Album Name</label>
                        <input type="text" class="form-control rounded text-light bg-black " placeholder="album Name" name="albumName" value="{{$album->album}}">
                    </div>
                    @error('albumName')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">date</label>
                        <input type="date" class="form-control rounded text-light bg-black " placeholder="date" name="date"  value="{{$album->date}}">
                    </div>
                    @error('date')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="">Old Image</label>
                    <img src="/albumsImage/{{$album->img}}" alt="0" class="img card-img-top" >
                    <label for="">Change Image</label>
                    <div class="form-group">
                        <input class="form-control rounded text-light bg-black" type="file" id="formFile" name="albumImage" value="{{$album->img}}">
                    </div>
                    @error('albumImage')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>



            <div class="row mt-5">
                <div class="form-group d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success btn-lg px-5 hover:bg-black hover:animate-[wiggle_1s_ease-in-out_infinite]  delete-link">Edit Album</button>
                </div>
            </div>


        </form>
    </div>
@endsection
