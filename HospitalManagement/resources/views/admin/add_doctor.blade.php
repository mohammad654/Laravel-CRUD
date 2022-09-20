

@extends('admin.dashboard')
@section('title', 'add doctor')

@section('content')
    <h1 @class('text-center p-2 mb-5 border-bottom rounded')>add doctor</h1>
    <div class="container ">
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
                </div>
            @endif
            <div class="row  ms-5 ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Doctor Name</label>
                        <input type="text" class="form-control rounded text-light bg-black " placeholder="Doctor Name" name="doctor_name" value="{{old('doctor_name')}}">
                    </div>
                    @error('doctor_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Doctor Speciality</label>
                        <select class="form-select bg-black text-light" aria-label="Default select example" name="speciality" >
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    @error('speciality')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="number" class="form-control rounded text-light bg-black " placeholder="Phone" name="phone"  value="{{old('phone')}}">
                    </div>
                    @error('phone')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Doctor Image</label>
                        <input class="form-control rounded text-light bg-black" type="file" id="formFile" name="doctor_image">
                    </div>
                    @error('doctor_image')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Doctor Room</label>
                        <input type="text" class="form-control rounded text-light bg-black " placeholder="Doctor Room" name="doctor_room" value="{{old('doctor_room')}}">
                    </div>
                    @error('doctor_room')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Doctor Detail</label>
                        <textarea class="form-control rounded text-light bg-black" rows="3" placeholder="Detail" name="detail">{{old('detail')}}</textarea>
                    </div>
                    @error('detail')
                    <span  class="text-danger">{{$message}}</span>
                    @enderror
                </div>

            </div>



            <div class="row mt-5">
                <div class="form-group d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success btn-lg px-5 hover:bg-black hover:animate-[wiggle_1s_ease-in-out_infinite]  delete-link">Add Doctor</button>
                </div>
            </div>


        </form>
    </div>
@endsection

