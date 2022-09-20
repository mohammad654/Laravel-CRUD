

@extends('layout')
@section('title', 'Index')


@section('content')


    <h1 class="text-center text-xl font-bold bg-gray-100 py-10">Index</h1>

    @if(session()->has('success'))
        <div class=" fixed bottom-0 right-0 rounded-xl bg-lime-300 text-white py-10 p-3"
             x-data="{show:true}"
             x-init="setTimeout(()=> show=false,4000)"
             x-show="show">
            {{ session()->get('success') }}
        </div>
    @endif



@endsection

