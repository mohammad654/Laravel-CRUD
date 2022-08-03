
@extends('students.layout')


@section('content')

    <h1 @class('text-success text-center mt-5') > Students</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('delete'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th width="330px">Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->student }}</td>
                <td>{{ $student->detail }}</td>
                <td>
                    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    {{ $students->links() }}
@endsection
