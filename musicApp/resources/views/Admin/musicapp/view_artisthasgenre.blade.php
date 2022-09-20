@section('title', 'View Artist Genre')
@extends('admin.dashboard')

@section('content')
    <div class="container-fluid mt-5">

        <div class=" ">
            <h1 class="text-center mb-5 wow fadeInUp fs-2">Artist Genres</h1>
            @foreach($artists as $artist)
                    <div class=" p-3 border bg-dark rounded w-25 ">{{$artist->artist}}</div>
                    @foreach($artist->artistsgenres as $item)
                        <span class=" p-3 border bg-dark rounded my-1 row col-1 ms-2">{{$item->genre}}</span>
                    @endforeach
                @endforeach
        </div>
    </div>
@endsection
