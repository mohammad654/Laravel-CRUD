<?p@section('title', 'add Song')
@extends('admin.dashboard')


@section('content')
    <h1 @class('text-center p-2 mb-5 border-bottom rounded')>add Song</h1>
    <div class="container ">
        <form action="{{route('song.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
                </div>
            @endif
            <div class="row  ms-5 ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Song Name</label>
                        <input type="text" class="form-control rounded text-light bg-black " placeholder="Song Name" name="songName" value="{{old('songName')}}">
                    </div>
                    @error('songName')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                            <label for="state"> Artist </label>
                            <select class="form-control text-white" name="artist_id">
                                <option value="">Please choose one Artist</option>
                                @foreach($artists as $artist)
                                    <option value="{{$artist->id}}">{{$artist->artist}}</option>
                                @endforeach
                            </select>
                    </div>

                    @error('artist_id')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Song Image</label>
                        <input class="form-control rounded text-light bg-black" type="file" id="formFile" name="songImage">
                    </div>
                    @error('songImage')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>



            </div>



            <div class="row mt-5">
                <div class="form-group d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success btn-lg px-5 hover:bg-black hover:animate-[wiggle_1s_ease-in-out_infinite]  delete-link">Add Album</button>
                </div>
            </div>


        </form>
    </div>
@endsection
