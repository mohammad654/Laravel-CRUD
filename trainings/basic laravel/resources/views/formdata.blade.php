@extends('layout')
@section('title', 'Form')


    @if(session()->has('success'))
        <h1>{{session('success')}}</h1>
    @endif
<div class="container mt-5">
    <form method="post" action="save">
        @csrf
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">First Name</label>
                        <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{old('name')}}">
                    </div>
                    @error('name')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="email" name="email">
                    </div>
                    @error('email')
                    <span>{{$message}}</span>
                    @enderror
                </div>
            </div>
            <!--  row   -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" placeholder="" id="company" name="company">
                    </div>
                    @error('company')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="phone" name="phone">
                    </div>
                    @error('phone')
                    <span>{{$message}}</span>
                    @enderror
                </div>
            </div>
            <!--  row   -->
            <div class="row mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

    </form>
</div>
