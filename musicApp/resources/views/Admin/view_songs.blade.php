@section('title', 'View Songs')
@extends('admin.dashboard')


@section('content')
    <div class="container-fluid mt-5">
        <table class="table table-hover  table-dark table-striped text-with">
            <h1 class="text-center mb-5 wow fadeInUp fs-2">Songs</h1>
            <thead>
            <tr>
                <th scope="col">Song</th>
                <th scope="col" >Artist</th>
                <th scope="col">Img</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($songs as $song)
                <tr>
                    <th scope="row">{{$song->song}}</th>
                    <th scope="row">{{$song->songs->artist}}</th>
                    <td><img src="songImage/{{$song->image}}" alt="" class="img card-img-top "></td>

                    <td><a class="btn btn-success px-5" href="{{ route('song.show',$song->id) }}" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                    <td>
                        <form action="{{ route('song.destroy',$song->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn  px-5 btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection

