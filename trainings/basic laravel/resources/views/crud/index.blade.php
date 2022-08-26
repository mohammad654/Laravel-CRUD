

@extends('layout')
@section('title', 'CRUD')


<h1 @class('text-center py-4 bg-danger')>Walk as if you are kissing the Earth with your feet</h1>


@if(Session()->has('success'))
    <div class="alert alert-success" role= "alert">
        <strong>Successful:</strong>
        {{ Session('success') }}
    </div>
@endif

<div class="container">
    <h2>List Devices</h2>
    <div class="panel panel-default">
        <div class="panel-heading p-4">
                <a href="{{route('device.create')}}" class=" pull-right btn btn-secondary mt-0 ">Create Device</a>
            List Devices
        </div>
        <div class="panel-body mt-4">
            <table class="table table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Device name</th>
                    <th scope="col">stats</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach($device as $i)
                    <tr>
                        <th scope="row">{{$i->id}}</th>
                         <td>{{$i->name}}</td>
                        <td>
                            @if($i->state==1)
                                <button type="button" class="btn btn-success px-5 fs-2">Active</button>
                            @else
                                <button type="button" class="btn btn-danger px-5 fs-2">Inactive</button>
                            @endif

                        </td>
                        <td>
                            <form action="{{ route('device.destroy',$i->id) }}" method="POST">
                                <a href="{{route('device.edit',$i->id)}}" class="btn btn-info px-5 fs-2">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger px-4 px-5 fs-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>


