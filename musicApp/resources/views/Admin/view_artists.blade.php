@section('title', 'View Artist')
@extends('admin.dashboard')


@section('content')
    <div class="container-fluid mt-5">
        <table class="table table-hover  table-dark table-striped text-with">
            <h1 class="text-center mb-5 wow fadeInUp fs-2">Artist</h1>
            <thead>
            <tr>
                <th scope="col">Artist</th>
                <th scope="col" >Slug</th>
                <th scope="col">About</th>
                <th scope="col">Img</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($artists as $artist)
                <tr>
                    <th scope="row">{{$artist->artist}}</th>
                    <td> {{$artist->slug}}</td>
                    <td style="font-size: 7px">{{$artist->detail}}</td>
                    <td><img src="artistImage/{{$artist->img}}" alt="" class="img card-img-top "></td>

                    <td><a class="btn btn-success px-5" href="{{ route('artist.show',$artist->id) }}" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                    <td>
                    <form action="{{ route('artist.destroy',$artist->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
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

