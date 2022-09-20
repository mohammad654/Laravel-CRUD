@section('title', 'View Artist')
@extends('admin.dashboard')


@section('content')
    <div class="container-fluid mt-5">
        <table class="table table-hover  table-dark table-striped text-with">
            <h1 class="text-center mb-5 wow fadeInUp fs-2">Artist</h1>
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">album</th>
                <th scope="col">artist</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($albums as $album)
                <tr>
                    <th scope="row">{{$album->id}}</th>
                    <th scope="row">{{$album->album}}</th>
                    <th scope="row">{{$album->artist->artist}}</th>

                    <td><a class="btn btn-success px-5" href="{{ route('artist.show',$album->id) }}" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                    <td>
                        <form action="{{ route('artist.destroy',$album->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
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

