@section('title', 'ArtisthasGenre')
@extends('admin.dashboard')

@section('content')
    <h1 @class('text-center p-2 mb-5 border-bottom rounded')>Artist has Genre</h1>
    <div class="container ">
        <form action="{{route('SongHasGenre.store')}}" method="POST">
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
                        <select class="form-control text-white" name="song_id">
                            <option value="" selected> Choose Song</option>
                            @foreach($songs as $song)
                                <option value="{{$song->id}}">{{$song->song}}</option>
                            @endforeach
                        </select>
                        @error('song_id')
                        <span  class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state"> Artist </label>
                            <select class="form-control text-white" name="genre_id">
                                <option value="" selected> Choose Genre</option>
                                @foreach($genres as $genre)
                                    <option value="{{$genre->id}}">{{$genre->genre}}</option>
                                @endforeach
                            </select>
                            @error('genre_id')
                            <span  class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class="form-group d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-success btn-lg px-5 hover:bg-black hover:animate-[wiggle_1s_ease-in-out_infinite]  delete-link">ArtisthasGenre</button>
                    </div>
                </div>
        </form>
    </div>
@endsection
