@section('title', 'View Artist')
@extends('admin.dashboard')


@section('content')
    <div class="container-fluid mt-5">
        <table class="table table-hover  table-dark table-striped text-with">
            <h1 class="text-center mb-5 wow fadeInUp fs-2">Album</h1>
            <thead>
            <tr>
                <th scope="col">Album</th>
                <th scope="col" >date</th>
                <th scope="col">Img</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($albums as $album)
                <tr>
                    <th scope="row">{{$album->album}}</th>
                    <td> {{$album->date}}</td>
                    <td><img src="albumsImage/{{$album->img}}" alt="" class="img card-img-top "></td>

                    <td><a class="btn btn-success px-5" href="{{ route('album.show',$album->id) }}" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                    <td>
                        <form action="{{ route('album.destroy',$album->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
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

