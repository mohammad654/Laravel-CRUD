



@extends('mainlayout')


@section('title', 'Posts Title')

@section('content')
    <div class="flex justify-center mb-5">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @auth
                <form action="{{ route('posts') }}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="New Word!"></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Add Word</button>
                    </div>
                </form>
            @endauth

            @if ($posts->count())
                @foreach ($posts as $post)

                    <div class="container-fluid ">
                        <div class="container my-3">
                            <a href="" class="font-bold">{{$post->user->name  }}</a>
                            <span class="text-gray-600 text-sm ">{{$post->created_at->diffForHumans()  }}</span>
                            <p>{{$post->body}}</p>
                         </div>
                    </div>
                @endforeach
              
                <div class="container mb-5">
                {{ $posts->links() }}
                </div>
            @else
                <p>There are no Words</p>
            @endif
        </div>
    </div>
@endsection