

@extends('students.layout')

@section('content')

    <div class="row mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 @class('text-success text-center') >Add New Student</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="{{route('students.store')}}" method="POST">
         @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="first">Students</label>
                        <input type="text" class="form-control" placeholder="Students" name="student">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="last"> Detail</label>
                        <textarea class="form-control" rows="3" placeholder="Detail" name="detail"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="form-group d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary btn-lg px-5 ">Add Student</button>
                </div>
            </div>
        </form>
    </div>
@endsection
