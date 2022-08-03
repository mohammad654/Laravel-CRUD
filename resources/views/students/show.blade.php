

@extends('students.layout')


@section('content')

    <div class="pull-left text-info mt-5 text-center">
        <h2>Student</h2>
    </div>
    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">student</th>
            <th scope="col">Details</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{ $student->student }}</td>
            <td>{{ $student->detail }}</td>
            <td>{{ $student->created_at }}</td>
        </tr>
        </tbody>
    </table>
@endsection
