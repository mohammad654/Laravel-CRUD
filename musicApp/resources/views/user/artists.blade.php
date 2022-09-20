
<div class="container my-5">
    <table class="table table table-hover   table-striped ">
        <h1 class="text-center mb-5 wow fadeInUp fs-2">Artist</h1>
        <thead>
        <tr>
            <th scope="col">Artist</th>
            <th scope="col">Slug</th>
            <th scope="col">About</th>
            <th scope="col">Img</th>
        </tr>
        </thead>
        <tbody>
        @foreach($artists as $artist)
        <tr>
            <th scope="row">{{$artist->artist}}</th>
            <td> {{$artist->slug}}</td>
            <td  style="font-size: 14px">{{$artist->detail}}</td>
            <td><img src="artistImage/{{$artist->img}}" alt="" class="img" width="100" height="200"></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
