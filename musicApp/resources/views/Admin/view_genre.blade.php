@section('title', 'View Genres')
@extends('admin.dashboard')

@section('content')
    <div class="container-fluid mt-5">
        <table class="table table-hover  table-dark table-striped text-with">
            <h1 class="text-center mb-5 wow fadeInUp fs-2">Genres</h1>
            <thead>
            <tr>
                <th scope="col">Genre</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($genres as $genre)
                <tr>
                    <th scope="row">{{$genre->genre}}</th>
                    <td><a class="btn btn-success px-5" href="{{ route('genre.show',$genre->id) }}" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                    <td>
                        <form action="{{ route('genre.destroy',$genre->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
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
