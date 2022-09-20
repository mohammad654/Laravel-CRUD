@section('title', 'ArtisthasGenre')
@extends('admin.dashboard')

@section('content')
    <h1 @class('text-center p-2 mb-5 border-bottom rounded')>Artist has Genre</h1>
    <div class="container ">
        <form action="{{route('ArtisthasGenre.store')}}" method="POST">
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
                        <label for="state"> Artist </label>
                        <select class="form-control text-white" name="artist_id">
                            <option value="" selected> Choose Artist</option>
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
                    <label for="state"> Genre </label>
                    <select name="genre_ids[]" class="form-multiselect  w-full mt-1 text-white bg-black rounded" multiple>
                        <option value="" selected>Choose Genre</option>
                        @foreach($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->genre}}</option>
                        @endforeach
                    </select>
                </div>

                @error('genre_id')
                <span  class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="row mt-5">
                <div class="form-group d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success btn-lg px-5 hover:bg-black hover:animate-[wiggle_1s_ease-in-out_infinite]  delete-link">ArtisthasGenre</button>
                </div>
            </div>
            </div>
        </form>
    </div>
@endsection
