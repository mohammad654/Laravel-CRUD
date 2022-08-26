


@section('title', 'Create')
@extends('layout')

<div class="container">
    <h2>add  Device</h2>
    <div class="panel panel-success">
        <div class="panel-heading p-4">
            <a href="{{route('device.index')}}" class=" pull-right btn btn-secondary mt-0 "> List Devices</a>
              Device
        </div>

        <div class="panel-body mt-4">
            <form method="post" action="{{route('device.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first"> Name</label>
                            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{old('name')}}">
                        </div>
                        @error('name')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="state"> Status </label>
                            <select class="form-control" name="state">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        @error('state')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

