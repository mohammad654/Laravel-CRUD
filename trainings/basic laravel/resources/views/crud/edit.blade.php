


@section('title', 'Edit')
@extends('layout')

<div class="container">
    <h2>Edit  Device</h2>
    <div class="panel panel-success">
        <div class="panel-heading p-4">
            <a href="{{route('device.index')}}" class=" pull-right btn btn-secondary mt-0 "> List Devices</a>
            Device
        </div>

        <div class="panel-body mt-4">
            <form method="post" action="{{route('device.update',$device->id)}}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first"> Name</label>
                            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{$device->name}}">
                        </div>
                        @error('name')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="state"> Status </label>
                            <select class="form-control" name="state">
                                <option value="{{$device->state}}" @if($device->state==1) selected @endif>Active</option>
                                <option value="0" @if($device->state==0) selected @endif>Inactive</option>
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

